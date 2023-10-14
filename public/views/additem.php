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