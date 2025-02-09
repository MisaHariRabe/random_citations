<?php
require_once "quotes.php";
$random_citation = generate_citation();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Une application web pour générer des citations inspirantes.">
    <title>Générateur de citations</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>La citation du jour</h1>

    <div id="quote-box">
        <p id="citation-body"><?php echo $random_citation[0]; ?></p>
        <span id="citation-teller"><?php echo $random_citation[1]; ?></span>
    </div>

    <br>

    <button id="new-quote">Nouvelle citation</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#new-quote").click(function () {
                $.ajax({
                    url: "quotes.php",
                    dataType: "json",
                    success: function (data) {
                        $("#citation-body").text(data[0]);
                        $("#citation-teller").text(data[1]);
                    },
                    error: function () {
                        alert("Erreur lors du chargement de la citation.");
                    }
                });
            });
        });
    </script>

    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/service-worker.js')
                    .then((registration) => {
                        console.log('Service Worker enregistré avec succès :', registration);
                    })
                    .catch((error) => {
                        console.log('Erreur d\'enregistrement du Service Worker :', error);
                    });
            });
        }
    </script>
</body>

</html>