<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="public/js/script.js" defer></script>
    <title>REGISTER PAGE</title>
    <style>

        .container {
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            width: 80%;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center vertically */
            align-items: center; /* Center horizontally */
        }

        .container form {
            display: flex;
            flex-direction: column;
            width: 100%;
            align-items: center;
        }

        .container input {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #fff;
            font-size: 16px;
            width: 100%; /* Make the input fields full width */
        }

        .container button {
            background-color: #267BFB;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%; /* Make the button full width */
        }

        .container button:hover {
            background-color: #0486F9;
        }

        .container .messages {
            margin-bottom: 10px;
            text-align: center;
            color: #FF0000;
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