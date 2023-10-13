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
        <header> 
            <img src="public/img/uploads/logo.svg" alt="logo">
            <div class="search-bar">
                    <input placeholder="Search">
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
            <!--<section class="grid-container">
                <div class="grid-element" id="grid-element1">
                    <img src="public/img/uploads/lorem.png" alt="books">

                    <div class="content-description">
                        <h2>Lorem ipsum dolor sitttt amet</h2>
                        <p>Lorem ipsum dolor sit ameeet, consectetur adipiscing elit. Etiam commodo nisi sed auctor hendrerit. Aliquam in semper libero.</p>
                        <div class="social-section">
                            <i class="fas-fa heart"> 600 </i>
                        </div>
                    </div> 
                </div>  
                <div class="grid-element" id="grid-element2">
                    <img src="public/img/uploads/lorem.png" alt="books">
                    <div class="content-description">
                        <h2>Lorem ipsum dolor sit amet</h2> 

                        <p>Lorem ipsum dolor sit amet</p>

                        <div class="social-section">
                            <i class="fas-fa heart"> 600 </i>
                        </div>
                    </div> 
                </div>
                <div class="grid-element" id="grid-element3">
                    <img src="public/img/uploads/lorem.png" alt="books">
                    <div class="content-description">
                        <h2>Lorem ipsum dolor sit amet</h2> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo nisi sed auctor hendrerit. Aliquam in semper libero.</p>
                        <div class="social-section">
                            <i class="fas-fa heart"> 600 </i>
                        </div>
                    </div> 
                </div>
                <div class="grid-element" id="grid-element4">
                    <img src="public/img/uploads/lorem.png" alt="books">
                    <div class="content-description">
                        <h2>Lorem ipsum dolor sit amet</h2> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo nisi sed auctor hendrerit. Aliquam in semper libero.</p>
                        <div class="social-section">
                            <i class="fas-fa heart"> 600 </i>
                        </div>
                    </div> 
                </div>
                <div class="grid-element" id="grid-element5">
                    <img src="public/img/uploads/lorem.png" alt="books">
                    <div class="content-description">
                        <h2>Lorem ipsum dolor sit amet</h2> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo nisi sed auctor hendrerit. Aliquam in semper libero.</p>
                        <div class="social-section">
                            <i class="fas-fa heart"> 600 </i>
                        </div>
                    </div> 
                </div>
                <div class="grid-element" id="grid-element6">
                    <img src="public/img/uploads/lorem.png" alt="books">
                    <div class="content-description">
                        <h2>Lorem ipsum dolor sit amet</h2> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo nisi sed auctor hendrerit. Aliquam in semper libero.</p>
                        <div class="social-section">
                            <i class="fas-fa heart"> 600 </i>
                        </div>
                    </div> 
                </div>
                <div class="grid-element" id="grid-element6">
                    <img src="public/img/uploads/lorem.png" alt="books">
                    <div class="content-description">
                        <h2>Lorem ipsum dolor sit amet</h2> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo nisi sed auctor hendrerit. Aliquam in semper libero.</p>
                        <div class="social-section">
                            <i class="fas-fa heart"> 600 </i>
                        </div>
                    </div> 
                </div>
                <div class="grid-element" id="grid-element6">
                    <img src="public/img/uploads/lorem.png" alt="books">
                    <div class="content-description">
                        <h2>Lorem ipsum dolor sit amet</h2> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo nisi sed auctor hendrerit. Aliquam in semper libero.</p>
                        <div class="social-section">
                            <i class="fas-fa heart"> 600 </i>
                        </div>
                    </div> 
                </div>
                <div class="grid-element" id="grid-element6">
                    <img src="public/img/uploads/lorem.png" alt="books">
                    <div class="content-description">
                        <h2>Lorem ipsum dolor sit amet</h2> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo nisi sed auctor hendrerit. Aliquam in semper libero.</p>
                        <div class="social-section">
                            <i class="fas-fa heart"> 600 </i>
                        </div>
                    </div> 
                </div> -->
                <section class="grid-container">
                    <?php if (isset($items) && count($items) > 0): ?>
                    <?php foreach ($items as $item): ?>
                        <div id="<?= $item->getId(); ?>">
                            <img src="public/img/uploads/<?= $item->getImage(); ?>">
                            <div>
                                <h2><?= $item->getTitle(); ?></h2>
                                <p><?= $item->getDescription(); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
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