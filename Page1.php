<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Sytle_page_1.css">
    <title>Bienvenue sur mon site</title>
</head>
<body>
<header>
    <img src="image1.jpg" alt="" id="image1">
    <h1 class="title1">Bienvenue</h1>
</hearder>
    <h2 class="title2"> A propos de moi :</h2>
    <ul>
        <li> <img src="photo.jpg" alt="" class="me"> </li>
        <li> <label for="">Nom, Prenom : </label> Lavinaud, Thibaut</li>
        <li> <label for="">Profession : </label> Etudiant en recherche d'alternance</li>
        <li> <label for="">Domaine d'étude : </label> Développement web</li>
        <li> <label for="">Date de naissance (JJ/MM/AAAA) : </label> 14/10/1999</li>
        <li> <label for="">Téléphone : </label> 06.08.97.59.54</li>
        <li> <label for=""> Adresse : </label> 2 rue du tambourin, 34560 Villeveyrac</li>
        <li> <label for=""> Mobilités :</label> Montpellier, Dijon</li>
    </ul>

    
    <h2 class="title3"> Connaissances</h2>
    <img src="image_c_1.png" alt="" class="imagec1"> <img src="image_c_2.png" alt="" class="imagec2"> <img src="image_c_3.png" alt="" class="imagec3"> <img src="image_c_4.png" alt="" class="imagec4"> <img src="image_c_5.png" alt="" class="imagec5"> <img src="image_c_6.png" alt="" class="imagec6"> <img src="image_c_7.png" alt="" class="imagec7">
    <h2>Plus de détails <a href="CV_Lavinaud_Thibaut_Alternance_DEV_Web.pdf"> sur mon CV</a></h2>
    <h2>Si vous êtes intéressés, vous pouvez remplir le formulaire de contact :</h2>
    <form action="page2.php" method="post" class="form1">
        <p>
            <label for="">Nom de l'entreprise : </label><input type="text" name="nom" id="nom_entreprise" placeholder = "nom"><br>
            <label for="">Email : </label><input type="text" name="mail" id="mail_entreprise" placeholder="Email"><br>
            <label for="">Téléphone : </label><input type="tel" name="tel" id="tel_entreprise" placeholder="Téléphone"><br>
            <input type="submit" value="Renseigner">
        </p>
    </form>
</body>
</html>