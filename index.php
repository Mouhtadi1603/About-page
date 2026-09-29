<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos</title>
    <link rel="stylesheet" href="css2/index.css">
    <script src="js2/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $('ul li:nth-child(2) > a').addClass('active');
        });
    </script>
</head>
<body>

    <div>
        <?php include "menu.php";   ?>
    </div><br><br>

    <section class="debut" id="apropos">
		<div class="apropos" >
			<h2 >A propos de nous</h2>
		</div>
		<div>
			<p class="mo1"> LivreEducation a été créée en 2022 par Mouhtadi TOUKOUROU étudiant et web entrepreneur, avec l'envie d'amener les jeunes et tout autre personne voulant entreprendre, à s'informer à ce sujet de la manière la plus simple possible. Dans un univers où tout le monde veut entreprendre et monter un business (en ligne ou physique), comprendre ce que cache le mot <strong>entreprenariat</strong> s'avère primordial. Nombreux sont les entrepreneurs à succès qui ont partagé leurs expériences du domaine dans les livres qu'ils ont produits. Nous œuvrons ainsi à vous faire télécharger ces livres en format audio pour vous permettre de vous instruire à tout moment et partout où vous le voulez.</p>
		</div>
	</section>
</body>
</html>