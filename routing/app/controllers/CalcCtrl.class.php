<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

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

       // getSmarty()->assign('msgs',$this->msgs);
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->display('CalcView.tpl');
    }
}