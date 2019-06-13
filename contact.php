<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/portfolio.css">
    <title>Jérémy Putanier</title>
</head>

<body id="body_contact">
    <header>
        <?php require_once 'nav.php' ?>
    </header>

    <main id="mainContact">
        <div class="bloc_contact">
            <p class="contact">Envoyez moi un mail !</p>

            <form method="POST" action="#">
                <p><input type="text" name="name" id="name" required>
                <label for="name">Nom<span class="required">*</span></label></p>

                <p><input type="email" name="email" id="email">
                <label for="email">E-mail<span class="required">*</span></label></p>

                <p><textarea name="textarea" id="textarea" placeholder="Entrez votre texte ici" rows="6" cols="35"></textarea></p>
                <p><span class="required">* Ces champs sont requis</span></p>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </main>

    <footer>
    </footer>

</body>

</html>