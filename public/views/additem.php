<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <link rel="stylesheet" href="public/css/content.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTS</title>
    <!--<script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>-->
    <style>
        .search-bar {
            width: 30%;
        }

        .search-bar>input {
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 3px 6px #00000029;
            border: 1px solid #707070;
            border-radius: 23px;
            width: 100%;
            text-align: center;
            letter-spacing: 0.72px;
            color: #A8A8A8;
            margin: 1em;
            line-height: 2.5em;
            box-sizing: border-box;
        }
        .project-form {
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

        .project-form h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .project-form form {
            display: flex;
            flex-direction: column;
            width: 100%;
            align-items: center;
        }

        .project-form input,
        .project-form textarea {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #fff;
            font-size: 16px;
            width: 100%; /* Make the input fields full width */
        }

        .project-form input[type="file"] {
            font-size: 14px;
            width: 100%;
        }

        .project-form button {
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

        .project-form button:hover {
            background-color: #0486F9;
        }

        .project-form .messages {
            margin-bottom: 10px;
            text-align: center;
            color: #FF0000;
        }


    </style>
</head>
<body>
<div class="base-container">
    <?php require_once __DIR__ . '/../templates/header.php'; ?>
    <main>

        <section class="project-form">
            <h1>Add Item</h1>
            <form action="additem" method="POST" ENCTYPE="multipart/form-data">
                <div class="messages">
                    <?php
                            if(isset($messages)){
                                foreach($messages as $message) {
                                    echo $message;
                                }
                            }
                        ?>
                </div>
                <input name="title" type="text" placeholder="title">
                <input name="author" type="text" placeholder="author name">
                <input name="genre" type="text" placeholder="genre">
                <input name="pages" type="text" placeholder="number of pages">
                <input name="publisher" type="text" placeholder="publisher">
                <input name="ISBN" type="text" placeholder="ISBN">
                <input name="condition" type="text" placeholder="condition">
                <textarea name="description" rows=5 placeholder="description"></textarea>

                <input type="file" name="file"/><br/>
                <button type="submit">send</button>
            </form>
        </section>
    </main>


    <footer>
        <?php require_once __DIR__ . '/../templates/footer.php'; ?>
    </footer>
</div>
</body>
</html>