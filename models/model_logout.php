<?php

    class Model_Logout extends Model
    {

        public function getData()
        {
            session_start();
            unset($_SESSION['session_username']);
            session_destroy();
            header("location:/login");
        }
    }