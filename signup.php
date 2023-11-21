<!DOCTYPE html>
<html lang="en">
<head>
    <title>Регистрация</title>
    <meta charset="UTF-8">
    <meta http-equiv="XA-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
    <div class="signup-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Заполните эту форму чтобы начать общение в чате с друзьями</p>
            </div>
            <div class="form-group">
                <label>Имя пользователя</label>
                <input type="email" class="form-control" name="user_name" placeholder="Например: Maria" 
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Пароль</label>
                <input type="password" class="form-control" name="user_pass" placeholder="Пароль" 
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Адрес электронной почты</label>
                <input type="email" class="form-control" name="user_email" placeholder="example@gmail.com" 
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Страна</label>
                <select class="form-control" name="user_country" required>
                    <option disabled="">Выберите страну</option>
                    <option>Россия</option>
                    <option>Китай</option>
                    <option>Индия</option>
                    <option>Белоруссия</option>
                    <option>Словения</option>
                </select>
            </div>
            <div class="form-group">
                <label>Пол</label>
                <select class="form-control" name="user_gender" required>
                    <option disabled="">Выберите пол</option>
                    <option>Мужчина</option>
                    <option>Женщина</option>
                </select>
            </div>
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required>I accept the agreement
                <a href="#"></a>&amp;<a href="#">Privacy Policy</a></label>
            </div>
            
            <div class="small">Забыл пароль?<a href="forgot_pass.php">Восстановить</a></div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Зарегистрироваться</button>
            </div>
            <!--<?php //include("signin_user.php"); ?> -->
        </form>
        <div class="text-center-small" style="color:#67428B;">Уже есть аккаунт?<a href="signin.php">Войти</a></div>
</body>
</html>