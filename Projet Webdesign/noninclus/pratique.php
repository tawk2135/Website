<?php
function tableau(){


  $produits = array(

    'papier' => array(

      'copieur'  => "Photocopieur et multiusage",
      'jetencre' => "Imprimante à jet d'encre",
      'laser'    => "Imprimante laser",
      'photo'    => "Papier d'impression photographique"),

    'stylos' => array(

      'bille'    => "Stylos à bille",
      'fluo'     => "Surligneurs",
      'feutre'   => "Feutres et marqueurs"),

    'divers' => array(

      'rubans'   => "Rubans adhésifs",
      'colle'    => "Colles",
      'attache'  => "Attaches-trombonnes"
    )
  );

  echo "<pre>";

  foreach($produits as $section => $items)
    foreach($items as $cle => $valeur)
      echo "$section :\t$cle\t($valeur)<br>";

  echo "</pre>";
}
function DebutdePage($titre){
    try {
        //Envoyer une entete pour specifier qu'on envoie un fichier html sur le réseau, et que celui-ci
        //peut contenir des accents
header('Content-Type:text/html;charset=utf-8');
       ?>
<doctype html>
    <!-- tout ce code ne sera afficher que lorsque lea fonction debut de page sera appeler-->
    <html>
        <head>
            <title><?php echo $titre;?></title>
            <meta charset="utf-8"><!-- specifier au navigateur que la page html contient des accents-->
        <head>
        <body>
            <?php
            
        } 
        catch (Exception $erreur) {
        echo "une erreur est survenu dans le fichier".$erreur->getFile()."a la ligne".$erreur->getLine()
                ."Problème survenu:".$erreur->getMessage();
    }

}