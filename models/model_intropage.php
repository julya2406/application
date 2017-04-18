

<?php

    class Model_Intropage extends Model
    {

        public function getData()
        {
            //session_start();
            var_dump($_SESSION);

            if (!isset($_SESSION["session_username"])) {
                header("location:login.php");
            }
        }
    }
