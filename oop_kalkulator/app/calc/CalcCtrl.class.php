<?php
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl{
    private $msgs;
    private $form;
    private $result;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
        $this->form->length = isset($_REQUEST['length']) ? $_REQUEST['length'] : null;
        $this->form->lending_rate = isset($_REQUEST['lending_rate']) ? $_REQUEST['lending_rate'] : null;
    }

    public function validate(){
        if (! (isset($this->form->amount) && isset($this->form->length) && isset($this->form->lending_rate))){
            return false;
        }
        $infos [] = 'Przekazano parametry.';

        if($this->form->amount == ""){
            $this->msgs->addError("Nie podałeś wartości pola ,,Kwota\"");
        }
        if($this->form->length == ""){
            $this->msgs->addError("Nie podałeś wartości pola ,,Ile lat\"!");
        } 

        if($this->msgs->isError()){
            if(!is_numeric($this->form->amount)){
                $this->msgs->addError("Podana kwota nie jest wartością liczbową!");
            }
            if(!is_numeric($this->form->length)){
                $this->msgs->addError("Podana ilość lat nie jest wartościa liczbową!");
            }
        }
        return ! $this->msgs->isError();

    }


    public function process(){
        $this->getParams();
        
        if($this->validate()){
            $this->form->amount = intval($this->form->amount);
            $this->form->length = intval($this->form->length);
            $this->form->lending_rate = floatval($this->form->lending_rate);
            $this->msgs->addInfo("Parametry poprawne.");

        $this->result->result = round(($this->form->amount + ($this->form->amount * $this->form->lending_rate * $this->form->length)) / ($this->form->length * 12), 2);

        $this->msgs->addInfo('Wykonano obliczenia.');
        }
        $this->generateView();
    }

    public function generateView(){
        global $conf;

        $smarty = new Smarty\Smarty();
        $smarty->assign('conf', $conf);
        $smarty->assign('page_title', 'Kalkulator kredytowy');
        $smarty->assign('page_description', 'Oblicz ile wynosi twoja rata kredytowa');

        $smarty->assign('msgs',$this->msgs);
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);

        $smarty->display($conf->root_path.'/app/calc/calc.html');
    }
}