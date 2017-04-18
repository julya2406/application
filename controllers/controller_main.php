<?php
    class Controller_Main extends Controller{

        function actionIndex(){
            $this->view->generate('main_view.php', 'template_view.php');
        }
    }