<!DOCTYPE html>
<html>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Cimade Lyon - Inscriptions pour les « portes ouvertes » 2021-2022</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="../style.css">
    </head>

  <body>
    <h3 class="text">Cimade Lyon</h3>
    <h4>Inscriptions pour les sessions d’information  « portes ouvertes » bénévoles 2021-2022</h4>
    <?php
   include '../functions.php';
   date_default_timezone_set('Europe/Paris');
   $current_date = new DateTime(date("Y-m-d H:i:s", time()));
   $days = array();
   //$days["Mardi 14 septembre"] = array("19h");
   //$days["Samedi 25 septembre"] = array("10h", "14h30");

   if (($current_date > new DateTime('2020-10-28 01:00:00')) &&
       ($current_date < new DateTime('2020-11-11 12:00:00'))) {
       // disabled for now
       //$days['Mercredi 11 novembre'] = array("16h00", "18h30");
   }

   $csv_file = dirname(__FILE__).DIRECTORY_SEPARATOR.'rendezvous.csv';
$details = "<p>Venez au 33 Rue Imbert-Colomès (Lyon 1er, métro Hotel de Ville) le jour et l’heure de la séance confirmée.".
           "N’oubliez pas votre masque ! Et <b>en cas de désistement, merci de le signaler par mail à ".
           "<a href=\"mailto:devenirbenevole.lyon.lacimade@gmail.com\">devenirbenevole.lyon.lacimade@gmail.com</a></b> ; ".
           "vous libérerez ainsi une place pour quelqu'un d'autre... Merci !\n      </p>\n";
   do_page($csv_file, $days,
           "<p>Pour participer à une séance d’information sur les possibilités de bénévolat, ".
           "il faut vous inscrire pour une des séances proposées. Chaque séance dure 1h30. ".
           "Merci d’écrire votre nom, prénom,  votre téléphone et  votre email,  et cliquer sur la séance choisie.</p>\n".
            $details.
//           "<p>Si vous n’avez pas pu vous inscrire (séances complètes, ou pas disponibles pour les séances  proposées),".
//           "envoyez-nous un email, d’autres séances pourront vous être proposées ultérieurement.</p>".
           "<p>Pour plus d'information sur les possibilités de bénévolat, ".
           "voyez <a href=\"https://www.lacimade.org/reunion-daccueil-des-nouveaux-benevoles-a-lyon/\">cette page<a>.",
            $details.
           'Au plaisir de vous rencontrer et de vous présenter les opportunités de bénévolat à la Cimade Lyon !</p>',
           10);
   ?>

  </body>

</html>
