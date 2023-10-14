<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <style>
        input{
            border: none;
            background-color: transparent;
            border-bottom: #b4dcaa 1px solid;
            color: white;
            padding: 1em;
            margin: 1em;
            width:50%

        }
        .logo>img{
            margin:0.5em;
        }
        a{
            background:  transparent linear-gradient(180deg, #1a53a996 0%, #0486f9 100%) 0% 0% no-repeat padding-box;
            box-shadow:  0px 3px 6px #00000029;
            border: 1px solid white;
            border-radius: 23px;
            width:100%;
            color: white;
            margin: 1em;
            line-height: 2.5em;
            justify-content: center;
            padding:1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/uploads/logo.svg" alt="logo2">
        </div>
        <div class="login-container">
            <form class="login" action="login" method="POST">
            <div class="messages">
                    <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                    ?>
                </div>
                <input type="text" name="email" placeholder="email@email.com">
                <input type="text" name="password" placeholder="password"> 
                <button type="submit">LOGIN</button>

            </form>
            <a href="register" class="register-link"> Zarejestruj się!</a>
        </div>

    </div>
</body>
</html>