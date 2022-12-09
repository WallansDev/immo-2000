<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immo 2000</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="assets/img/favicon.png">
</head>

<body>

    <a href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" style="color: black; margin: 2% 0 0 2%;" width="3%" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
        </svg></a>

    <div class="login-page2">
        <div class="form2">
            <?php
            $hai = $_POST['hai-number'];
            $hai2 = number_format($hai, 2, ',', ' ');

            // HAI
            echo "<p class='hai'>HONORAIRES D'AGENCES INCLUS : <span class='hai-span'>" . $hai2 . "€</span></p>";

            if ($hai >= 0 && $hai <= 17999) {

                // Calcul de la COM
                $netvendeur = $hai - 3000;
                $com = $hai - $netvendeur;

                // COM
                $com2 = number_format($com, 2, ',', ' ');
                echo "<p class='com'>COMMISSION : <span class='com-span'>" . $com2 . "€</span></p>";

                // Calcul du prix net vendeur

                $netvendeur2 = number_format($netvendeur, 2, ',', ' ');
                echo "<p class='net'>PRIX NET VENDEUR : <span class='net-span'>" . $netvendeur2 . "€</span></p>";
            } else if ($hai >= 18000 && $hai <= 49999) {

                // Calcul de la COM
                $netvendeur = $hai - 5000;
                $com = $hai - $netvendeur;

                // COM
                $com2 = number_format($com, 2, ',', ' ');
                echo "<p class='com'>COMMISSION : <span class='com-span'>" . $com2 . "€</span></p>";

                // Calcul du prix net vendeur

                $netvendeur2 = number_format($netvendeur, 2, ',', ' ');
                echo "<p class='net'>PRIX NET VENDEUR : <span class='net-span'>" . $netvendeur2 . "€</span></p>";
            } else if ($hai >= 50000 && $hai <= 59999) {
                // Calcul de la COM
                $pourcent = 10 / 100;
                $com = ($hai * $pourcent);

                // COM
                $com2 = number_format($com, 2, ',', ' ');
                echo "<p class='com'>COMMISSION : <span class='com-span'>" . $com2 . "€</span></p>";

                // Calcul du prix net vendeur
                $netvendeur = $hai - $com;
                $netvendeur2 = number_format($netvendeur, 2, ',', ' ');
                echo "<p class='net'>PRIX NET VENDEUR : <span class='net-span'>" . $netvendeur2 . "€</span></p>";
            } else if ($hai >= 60000 && $hai <= 109999) {
                // Calcul de la COM
                $pourcent = 8 / 100;
                $com = ($hai * $pourcent);

                // COM
                $com2 = number_format($com, 2, ',', ' ');
                echo "<p class='com'>COMMISSION : <span class='com-span'>" . $com2 . "€</span></p>";

                // Calcul du prix net vendeur
                $netvendeur = $hai - $com;
                $netvendeur2 = number_format($netvendeur, 2, ',', ' ');
                echo "<p class='net'>PRIX NET VENDEUR : <span class='net-span'>" . $netvendeur2 . "€</span></p>";
            } else if ($hai >= 110000 && $hai <= 149999) {
                // Calcul de la COM
                $pourcent = 7 / 100;
                $com = ($hai * $pourcent);

                // COM
                $com2 = number_format($com, 2, ',', ' ');
                echo "<p class='com'>COMMISSION : <span class='com-span'>" . $com2 . "€</span></p>";

                // Calcul du prix net vendeur
                $netvendeur = $hai - $com;
                $netvendeur2 = number_format($netvendeur, 2, ',', ' ');
                echo "<p class='net'>PRIX NET VENDEUR : <span class='net-span'>" . $netvendeur2 . "€</span></p>";
            } else if ($hai >= 150000 && $hai <= 249999) {
                // Calcul de la COM
                $pourcent = 6 / 100;
                $com = ($hai * $pourcent);

                // COM
                $com2 = number_format($com, 2, ',', ' ');
                echo "<p class='com'>COMMISSION : <span class='com-span'>" . $com2 . "€</span></p>";

                // Calcul du prix net vendeur
                $netvendeur = $hai - $com;
                $netvendeur2 = number_format($netvendeur, 2, ',', ' ');
                echo "<p class='net'>PRIX NET VENDEUR : <span class='net-span'>" . $netvendeur2 . "€</span></p>";
            } else if ($hai >= 250000 && $hai <= 499999) {
                // Calcul de la COM
                $pourcent = 5 / 100;
                $com = ($hai * $pourcent);

                // COM
                $com2 = number_format($com, 2, ',', ' ');
                echo "<p class='com'>COMMISSION : <span class='com-span'>" . $com2 . "€</span></p>";

                // Calcul du prix net vendeur
                $netvendeur = $hai - $com;
                $netvendeur2 = number_format($netvendeur, 2, ',', ' ');
                echo "<p class='net'>PRIX NET VENDEUR : <span class='net-span'>" . $netvendeur2 . "€</span></p>";
            } else if ($hai >= 500000) {
                // Calcul de la COM
                $pourcent = 4 / 100;
                $com = ($hai * $pourcent);

                // COM
                $com2 = number_format($com, 2, ',', ' ');
                echo "<p class='com'>COMMISSION : <span class='com-span'>" . $com2 . "€</span></p>";

                // Calcul du prix net vendeur
                $netvendeur = $hai - $com;
                $netvendeur2 = number_format($netvendeur, 2, ',', ' ');
                echo "<p class='net'>PRIX NET VENDEUR : <span class='net-span'>" . $netvendeur2 . "€</span></p>";
            } else {
                echo "Ce nombre     ne figure dans aucune tranche ! <br> Veuillez réessayer";
            }

            ?><br>
            <p class="message"><a href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                    </svg> Revenir à l'acceuil</a></p>
        </div>
    </div>
</body>

</html>