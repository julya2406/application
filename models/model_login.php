<?php
    include_once './DataBase.php';
    require_once './includes/connection.php';

    class Model_Login extends Model
    {

        public function getData()
        {
            $message = '';
            $connection = new DataBase();
            if (isset($_SESSION["session_username"])) {
                $connection = NULL;
                header("Location: /intropage");
            }

            if (isset($_POST["login"])) {
                $dbUsername = 0;
                $dbPassword = 0;
                if (!empty($_POST['username']) && !empty($_POST['password'])) {
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);


                    $data = $connection->select("SELECT * FROM usertbl WHERE username=(:username)", $username);
                    //$pdostmt = $DB::prepare($query);
                    //$pdostmt->bindParam(':username', $username);
                    //$pdostmt->execute();

                    $num_rows = count($data);
                    //$num_rows = mysqli_num_rows($pdo, $query);
                    if ($num_rows != 0) {
                        while ($row = array_shift($data)) {
                            $dbUsername = $row['username'];
                            $dbPassword = $row['password'];
                        }
                        if ($username == $dbUsername && $password == $dbPassword) {
                            $_SESSION['session_username'] = $username;
                            header("Location: intropage.php");
                        }
                        echo "Invalid password!";
                    } else {
                        echo "Invalid username or password!";
                    }
                } else {
                    $message = "All fields are required!";
                }
            }

            return $message;
        }
    }