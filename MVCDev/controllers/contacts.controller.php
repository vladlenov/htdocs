<?php
/**
 * User: vladlenov
 */

class ContactsController extends Controller {

    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Message();
    }
//метод вывода и обработки контактной формы
    public function index(){
        if($_POST){
            if($this->model->save($_POST)){
                Session::setFlash('Thank you, your message was sent successfully!');
            }
        }
    }

    public function admin_index(){
        $this->data = $this->model->getList();
    }
}