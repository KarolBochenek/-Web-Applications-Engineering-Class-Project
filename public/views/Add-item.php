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
</head>
<body>
<div class="base-container">
    <header>
        <img src="public/img/uploads/logo.svg" alt="logo">
        <div class="search-bar">
            <form>
                <input placeholder="search project">
            </form>
        </div>
        <ul>
            <li>
                <i class="lorem ipsum"></i>
                <a href="#" class="button">Add item</a>
            </li>
            <li>
                <i class="lorem ipsum"></i>
                <a href="#" class="button">Full items list</a>
            </li>
            <li>
                <i class="lorem ipsum"></i>
                <a href="#" class="button">Manage</a>
            </li>
            <li>
                <i class="lorem ipsum"></i>
                <a href="#" class="button">Log out</a>
            </li>

        </ul>

    </header>
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
                <textarea name="description" rows=5 placeholder="description"></textarea>

                <input type="file" name="file"/><br/>
                <button type="submit">send</button>
            </form>
        </section>
    </main>


    <footer>
        <div class="footer">FOOTER</div>
    </footer>
</div>
</body>
</html>