<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/portfolio.css">
    <title>Jérémy Putanier</title>
</head>

<body>
    <header id="headerPages">
        <?php require_once 'nav.php' ?>  
    </header>
    <main id="mainComp">
            <div class="flex">
                <img class="imgComp html_img" src="/img/html.svg"><img class="imgComp css_img" src="img/css.svg" alt="">
                <p class="html pComp">HTML/CSS</p>
                <div class="html-bar blue"></div>
            </div>
            <div class="flex">
                <img class="imgComp" src="/img/bootstrap.svg">
                <p class="pComp">Bootstrap</p>
                <div class="bootstrap-bar blue"></div>
            </div>
            <div class="flex">
                <img class="imgComp" src="img/js.svg">
                <p class="pComp">JavaScript/Ajax</p>
                <div class="js-bar blue"></div>
            </div>
            <div class="flex">
                <img class="imgComp" src="img/node.svg">
                <p class="pComp">Node.js</p>
                <div class="node-bar blue"></div>
            </div>
            <div class="flex">
                <img class="imgComp" src="img/php.svg">
                <p class="pComp">PHP</p>
                <div class="php-bar blue"></div>
            </div>
            <div class="flex">
                <img class="imgComp" src="img/laravel.png">
                <p class="pComp">Laravel</p>
                <div class="laravel-bar blue"></div>
            </div>
            <div class="flex">
                <img class="imgComp" src="img/mysql.svg">
                <p class="pComp">MySQL</p>
                <div class="mysql-bar blue"></div>
            </div>
            <div class="flex">
                <img class="imgComp" src="img/wp.svg">
                <p class="pComp">Wordpress</p>
                <div class="wp-bar blue"></div>
            </div>
            <div class="flex">
                <img class="imgComp" src="img/git.svg">
                <p class="pComp">GitHub</p>
                <div class="git-bar blue"></div>
            </div>
            <div class="flex">
                <img class="imgComp" src="img/en.svg">
                <p class="pComp">Anglais Technique</p>
                <div class="en-bar blue"></div>
        </div>
    </main>

    <footer>
    </footer>
    <script src="./js/main.js"></script>
</body>

</html>