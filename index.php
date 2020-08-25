<?php
session_start();
$dest = isset($_GET['url']) ? $_GET['url'] : "Login";
?>

<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Panel v0.1</title>
    <link rel="stylesheet" type="text/css" href="/loginpane/css/login.css">
    <link rel="stylesheet" type="text/css" href="/loginpane/css/login-mobile.css">
    <link rel="stylesheet" type="text/css" href="/loginpane/css/fa/all.css">

    <!-- Js Initialization -->
    <script src="/loginpane/js/jquery-3.5.1.min.js"></script>
</head>

<body>
<div class="login">
    <div class="login-wrapper">
        <div class="login-slider">
            <div class="login-slider-content">
                <form action="index.php" class="form-wrapper" method="post">
                    <div class="login-logo"><img src="/img/background.jpg"></div>
                    <div class="form-input"><i class="fas fa-user"></i><input type="text" name="username" placeholder="Username"></div>
                    <div class="form-input"><i class="fas fa-lock"></i><input type="password" name="password" placeholder="Password"></div>
                    <div class="form-input">
                        <label>
                            <textarea placeholder="Desc"></textarea>
                        </label>
                    </div>
                    <div class="form-input">
                        <label>
                            <i class="fas fa-calendar"></i><input type="date">
                        </label>
                    </div>
                    <div class="form-input">
                        <i class="fas fa-clock"></i><label>
                            <input type="time">
                        </label>
                    </div>
                    <div class="form-input">
                        <label>
                            <select>
                                <option name="opt1">Option-1</option>
                                <option name="opt2">Option-2</option>
                                <option name="opt3">Option-3</option>
                            </select>
                        </label>
                    </div>
                    <button class="login-btn">Login</button>
                </form>
                <form action="index.php" class="form-wrapper" method="post">
                    <div class="form-input"><i class="fas fa-lock-open"></i><input type="text" name="captcha" pattern="\d*" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="8" placeholder="SMS Code"> </div>
                    <button class="verificate-btn">Confirm</button>
                    <i class="verification-timer">03:00</i>
                </form>
            </div>

        </div>

    </div>

</div>
</body>

<footer>
    <script src="/loginpane/js/login.js"></script>
</footer>
</html>
