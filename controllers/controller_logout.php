<?php
    class Controller_Logout extends Controller{

        function __construct()
        {
            $this->model = new Model_Logout();
            //$this->view = new View();
        }

        function actionIndex()
        {
            $this->model->getData();
            //$this->view->generate('logout_view.php', 'template_view.php', $data);
        }
    }