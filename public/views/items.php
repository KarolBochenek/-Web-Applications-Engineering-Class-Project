<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <link rel="stylesheet" href="public/css/content.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTS</title>
    <script src="public/js/book-details.js" defer></script>
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
        .content-details{
            display: none;
        }

    </style>
</head>
<body>
    <div class="base-container">
        <?php require_once __DIR__ . '/../templates/header.php'; ?>
        <main>
                <section class="grid-container">
                    <?php if (isset($items)): ?>
                    <?php foreach ($items as $item): ?>
                        <div class="grid-element" id="<?= $item->getId(); ?>">
                            <img src="public/img/uploads/<?= $item->getImage(); ?>">
                            <div class="content-description">
                                <h3><?= $item->getTitle(); ?></h3>
                                <h3><?= $item->getGenre(); ?></h3>
                                <h3><?= $item->getAuthor(); ?></h3>
                                <p><?= $item->getDescription(); ?></p>
                                <div class="content-details">
                                 <p>Number of pages: <?=$item->getPages();?></p>
                                    <p>Publisher: <?=$item->getPublisher();?></p>
                                    <p>ISBN: <?=$item->getISBN();?></p>
                                    <p>Condition: <?=$item->getCondition();?></p>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" >Tabela wypożyczeń jest pusta</td>
                        </tr>
                    <?php endif; ?>
                </section>
            <section class="right">
                <div class="right-grid-element" id="right-grid-element1">right-WPIS</div>
                <div class="right-grid-element" id="right-grid-element2">right-WPIS2</div>
                <div class="right-grid-element" id="right-grid-element3">right-WPIS3</div>
            </section>
        </main>


        <footer>
            <?php require_once __DIR__ . '/../templates/footer.php'; ?>
        </footer>
    </div>
</body>
</html>