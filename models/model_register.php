<?php
    include_once "./DataBase.php";
    require_once './includes/connection.php';

    class Model_Register extends Model
    {
        public function getData()
        {
            //$connection = $this->getConnect();
            //session_start();
            $message = '';
            $connection = new DataBase();
            if (isset($_POST['register'])) {
                if (!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                    $register['full_name'] = stripslashes(htmlspecialchars(trim($_POST['full_name'])));
                    $register['email'] = stripslashes(htmlspecialchars(trim($_POST['email'])));
                    $register['username'] = stripslashes(htmlspecialchars(trim($_POST['username'])));
                    $register['password'] = stripslashes(htmlspecialchars(trim($_POST['password'])));

                    $data = $connection->select("SELECT * FROM usertbl WHERE username=(:username)", $register['username']);
                    $num_rows = count($data);

                    if ($num_rows == 0) {

                        $data = $connection->insert('usertbl', $register);
                        //$captcha = $_POST['captcha'];
                        //var_dump($_SESSION['captcha']);
                        if ($data/* && $captcha == $_SESSION['captcha']*/) {
                            $message = "Account successfully created!";
                            $message = wordwrap($message, 70, "\r\n");
                            mail($register['email'], 'Благодарим за регистрацию', $message);
                            $pdo = NULL;
                        } else {
                           // var_dump($captcha);
                            $message = /*var_dump($_SESSION['captcha']);*/"Failed to insert datainformation!";

                        }
                    } else {
                        $message = "That username already exists! Please try another one!";
                    }
                } else {
                    $message = "All fields are required!";
                }
            }
            if (!empty($this->message)) {
                echo "<p class=\"error\">" . "MESSAGE:" . $message . "</p>";
            }
            $connection = NULL;
            return $message;
        }
    }
