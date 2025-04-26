<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

require_once getConf()->root_path . '/Medoo/src/Medoo.php';
use Medoo\Medoo;


class CalcCtrl{
    private $form;
    private $result;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->amount = getFromRequest('amount');
        $this->form->length = getFromRequest('length');
        $this->form->lending_rate = getFromRequest('lending_rate');
    }

    public function validate(){
        if (! (isset($this->form->amount) && isset($this->form->length) && isset($this->form->lending_rate))){
            return false;
        }
       // $infos [] = 'Przekazano parametry.';

        if($this->form->amount == ""){
            getMessages()->addError("Nie podałeś wartości pola ,,Kwota\"");
        }
        if($this->form->length == ""){
            getMessages()->addError("Nie podałeś wartości pola ,,Ile lat\"!");
        } 

        if(! getMessages()->isError()){
            if(!is_numeric($this->form->amount)){
                getMessages()->addError("Podana kwota nie jest wartością liczbową!");
            }
            if(!is_numeric($this->form->length)){
                getMessages()->addError("Podana ilość lat nie jest wartościa liczbową!");
            }
        }
        return ! getMessages()->isError();

    }


    public function action_calcCompute(){
        $this->getParams();
        
        if($this->validate()){
            $this->form->amount = intval($this->form->amount);
            $this->form->length = intval($this->form->length);
            $this->form->lending_rate = floatval($this->form->lending_rate);

            getMessages()->addInfo("Parametry poprawne.");

            if (inRole('admin')) {
						$this->result->result = round(($this->form->amount + ($this->form->amount * $this->form->lending_rate * $this->form->length)) / ($this->form->length * 12), 2);
					} else {
						getMessages()->addError('Tylko administrator może wykonać tę operację');
					}

        getMessages()->addInfo('Wykonano obliczenia.');
        }
        
        try {
            $database = new Medoo([
                'database_type' => 'mysql',
                'database_name' => 'calc',
                'server' => 'localhost',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
                'collation' => 'utf8_polish_ci',
                'port' => 3306,
                'option' => [
                    \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
                ]);

            $database->insert("wynik", [
                "kwota" => $this->form->amount,
                "lat" => $this->form->length,
                "procent" => $this->form->lending_rate,
                "rata" => $this->result->result,
                "data" => date("Y-m-d H:l:s")
            ]);
        } catch (\PDOException $ex) {
            getMessages()->addError("DB Error: ".$ex->getMessage());
        }

        $this->generateView();
    }

    public function action_calcShow(){
        getMessages()->addInfo("Witaj w kalkulatorze kredytowym");
        $this->generateView();
    }

    public function generateView(){
    getSmarty()->assign('user', unserialize($_SESSION['user']));
    getSmarty()->assign('page_title', 'Kalkulator kredytowy');
    getSmarty()->assign('page_description', 'Oblicz ile wynosi twoja rata kredytowa');
    getSmarty()->assign('form', $this->form);
    getSmarty()->assign('res', $this->result);

    try {
        $database = new \Medoo\Medoo([
            'database_type' => 'mysql',
            'database_name' => 'calc',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_polish_ci',
            'port' => 3306,
            'option' => [
                \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        ]);

        $records = $database->select("wynik", [
            "kwota",
            "lat",
            "procent",
            "rata",
            "data"
        ]);

        getSmarty()->assign('records', $records); // <-- przypisanie rekordów do szablonu

    } catch (\PDOException $ex) {
        getMessages()->addError("DB Error: ".$ex->getMessage());
    }

    getSmarty()->display('CalcView.tpl');
}

}