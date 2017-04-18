<?php

class Controller_Register extends Controller
{

    function __construct()
    {
        $this->model = new Model_Register();
        $this->view = new View();
    }

    function actionIndex()
    {
        $data = $this->model->getData();
        $this->view->generate('register_view.php', 'template_view.php', $data);
    }
}