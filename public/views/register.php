<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
    <style>
        input{
            border: none;
            background-color: transparent;
            border-bottom: #b4dcaa 1px solid;
            padding: 1em;
            margin: 1em;
            width:50%

        }
    </style>
</head>
<body>
<div class="container">
    <form action="register" method="POST">
        <div class="messages">
            <?php
            if (isset($messages)) {
                foreach ($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </div>
        <input type="text" name="name" placeholder="name">
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="email" placeholder="e-mail">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="confirm-password" placeholder="confirm password">
        <button type="submit">Register</button>
    </form>
</div>
</body>
</html>