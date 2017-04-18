<?php

    class Controller_Login extends Controller
    {
        function __construct()
        {
            $this->model = new Model_Login();
            $this->view = new View();
        }

        function actionIndex()
        {
            $data = $this->model->getData();
            $this->view->generate('login_view.php', 'template_view.php', $data);
        }
    }