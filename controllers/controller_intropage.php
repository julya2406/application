<?php
    class Controller_Intropage extends Controller{

        function __construct()
        {
            $this->model = new Model_Intropage();
            $this->view = new View();
        }

        function actionIndex()
        {
            $data = $this->model->getData();
            $this->view->generate('intropage_view.php', 'template_view.php', $data);
        }

    }