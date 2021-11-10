<!DOCTYPE html>
<html>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Cimade - Français</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="../style.css">
    </head>

  <body>
    <h3 class="text">Cimade Lyon</h3>
    <h4>Rendez-vous d'inscription pour les cours de français 2021-2022</h4>
<p></p>
<p>Nous organisons de nouvelles sessions d'inscription aux cours de français. Ce sera:
  <ul>
    <li>Mercredi 10 novembre 2021, de 14 à 17h.</li>
    <li>Jeudi 11 novembre 2021, de 14 à 17h.</li>
    <li>Lundi 3 janvier 2022, de 13h à 16h.</li>
    <li>Vendredi 7 janvier, de 13h à 16h.</li>
    <li>Samedi 8 janvie, de 13h à 16h.</li>
    <li>Lundi 10 janvier, de 13h à 16h.</li>
    <li>Vendredi 14 janvie, de 13h à 16h.</li>
    <li>Samedi 15 janvier, de 13h à 16h.</li>
    <>Lundi 28 février, de 13h à 16h.</li>
    <li>Vendredi 4 mars, de 13h à 16h.</li>
    <li>Samedi 5 mar, de 13h à 16h.</li>
    <li>Lundi 11 avril, de 13h à 16h.</li>
    <li>Vendredi 15 avril, de 13h à 16h.</li>
</ul>
</p>
<p>Vous pouvez venir à ces moments, au 33 Rue Imbert-Colomès (Lyon 1er), sans rendez-vous.</p>
    <?php
   include '../functions.php';
   date_default_timezone_set('Europe/Paris');
   $current_date = new DateTime(date("Y-m-d H:i:s", time()));
   $days = array();
   $hours = array("14h", "14h30", "15h", "15h30", "16h", "16h30");
   if ($current_date < new DateTime('2021-09-21 12:00:00')) {
     $days['Mardi 21 septembre 2021'] = $hours;
   }
   if ($current_date < new DateTime('2021-09-22 12:00:00')) {
     $days['Mercredi 22 septembre 2021'] = $hours;
   }
   if ($current_date < new DateTime('2021-09-28 12:00:00')) {
     $days['Mardi 28 septembre 2021'] = $hours;
   }
   if ($current_date < new DateTime('2021-09-29 12:00:00')) {
     $days['Mercredi 29 septembre 2021'] = $hours;
   }
   if ($current_date < new DateTime('2021-10-02 12:00:00')) {
     $days['Samedi 2 octobre 2021'] = $hours;
   }

   $csv_file = dirname(__FILE__).DIRECTORY_SEPARATOR.'rendezvous.csv';

/*   do_page($csv_file, $days, 
           "<p>Pour venir vous informer et vous inscrire, il faut prendre rendez-vous. Merci d’écrire votre nom, prénom, et votre téléphone ou email&nbsp;; et de choisir un jour et une heure de rendez-vous.</p>\n      <p>Venez au 33 Rue Imbert-Colomès (Lyon 1er) le jour et l’heure de votre rendez-vous. Merci !</p>\n<p>Plus d'information sur les cours de français <a href=\"https://www.lacimade.org/activite/les-ateliers-socio-linguistiques-a-s-l/\">ici</a>.</p>",
           '<p>Venez à l’heure au 33 Rue Imbert-Colomès (Lyon 1er). <b>Masque obligatoire</b> mais nous pourrons vous en fournir si vous n’en avez pas :).</p><p>Si vous ne pouvez pas venir, merci de nous envoyer un mail à <a href="mailto:fle.lyon@lacimade.org">fle.lyon@lacimade.org</a> pour annuler.</p>',
6,
"<p>Si vous ne pouvez pas venir à ces dates: nous organiserons certainements de nouvelles sessions d’information et d’inscription, en debut 2022. ".
          "Vous pouvez laisser vos nom, prénom, et téléphone ou email, ".
          "et nous vous contacterons si et quand nous en organiserons.</p>"
); */
   ?>


<!--  <p>Les cours de français Cimade dans nos locaux sont suspendus depuis le 30 octobre 2020 en raison de la situation sanitaire, qui  impacte largement notre capacité à déployer nos activités habituelles. De nouvelles informations seront données sur cette page lorsqu’il nous sera possible de reprendre une activité normale. Nous nous excusons de ne pouvoir vous ouvrir nos portes pour l’instant, mais nous espérons pouvoir malgré tout vous recevoir à nouveau prochainement, pour de nouvelles inscriptions et une reprise des cours.
          </p>  -->
  </body>

</html>
