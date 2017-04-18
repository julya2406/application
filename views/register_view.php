
<div class="container mregister">
    <div id="login">
        <h1>Регистрация</h1>
        <form action="/register" id="registerform" method="post" name="registerform">
            <p><label for="user_login">Полное имя:<br>
                    <input class="input" id="full_name" name="full_name" type="text" size="20" value=""></label></p>
            <p><label for="user_pass">E-mail:<br>
                    <input class="input" id="email" name="email" type="email" value="" size="50"></label></p>
            <p><label for="user_pass">Имя пользователя:<br>
                    <input class="input" id="username" name="username" type="text" size="25" value=""></label></p>
            <p><label for="user_pass">Пароль:<br>
                    <input class="input" id="password" name="password" type="password" size="20" value=""></label>
            <p><label for="user_pass">Введите числа на картинке:<br></label>
                    <input style="float: left" class="input" id="captcha" name="captcha" type="text" size="5" value=""></p>
            <p><img style="float: right" src="/htdocs/application/includes/captcha.php" alt="CAPTCHA"><br></p>
            <p class="submit"><input class="button" id="register" name="register" type="submit"
                                     value="Зарегистрироваться"></p>
            <p><input class="button" id='register' type="reset" value="Очистить"></p><br>
            <p class="regtext">Уже зарегистрированы?<a href="/login">Введите имя пользователя</a>!</p>
        </form>
    </div>
</div>
<?php if(!empty($data)){
    echo "<p class=\"error\">" . "MESSAGE:" . $data . "</p>";
} ?>