
    <body>
    <div class="container mlogin">
        <div id="login">
            <h1>LOGIN</h1>
            <form action="" id="loginform" method="post" name="loginform">
                <p><label for="user_login">Имя пользователя:<br>
                    <input class="input" id="username" name="username" size="20" type="text" value=""></label></p>
                <p><label for="yser_pass">Пароль:<br>
                    <input class="input" id="password" name="password" size="20" type="password" value=""></label></p>
                <p class="submit"><input class="button" name="login" type="submit" value="Log In"></p>
                <p class="regtext">Ещё не зарегистрированы?<a href="/register">Регистрация</a>!</p>
            </form>
        </div>
    </div>


<?php if(!empty($data)){
    echo "<p class=\"error\">" . "MESSAGE:" . $data . "</p>";
} ?>