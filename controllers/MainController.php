<?php

class MainController extends BaseController
{
  public $layout = 'main';
  public function index()
  {
    return $this->view('main/prueba_willy');
  }

  public function create()
  {


    if (count($_POST)) {
      $pruebaData = $_POST['prueba'];

      $pruebaModel = new Prueba();
      $pruebaModel->create($pruebaData);

      $this->redirect('main', 'index');
    }

    return $this->view('main/create');
  }

  public function update()
  {

    if(count($_POST)){
      

      $pruebaUpdate=new prueba();
      $pruebaUpdate->updateById()
    }

    return $this->view('main/update');
  }
}
