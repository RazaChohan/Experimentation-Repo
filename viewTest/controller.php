<?php
include_once 'view.php';
class Controller{
    public $req;
    public $res;
    
    public function callView($r){
        $this->req=$r;
        $v = new view();
        $this->res= $v->render($this->req);

        
    }
}
// Dispatcher code
$c=new Controller();
$c->callView('Request');
//echo $c->res;