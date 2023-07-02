<?php
$vue=FALSE;
$images=["P.png","F.png","C.png"];

if (isset($_GET["coup"])) {
    $coup_joueur = $_GET['coup'];
    $images_joueur = $images[$coup_joueur];
    $coup_ordinateur = random_int(0,2);
    $images_ordinateur = $images[$coup_ordinateur];

    if($coup_joueur==0 && $coup_ordinateur==1){
		$message = "Vous avez perdu. zut";
        $class = "perdu";
    }else if($coup_joueur==1 && $coup_ordinateur==2){
        $message = "Vous avez perdu. zut";
        $class = "perdu";
    }else if($coup_joueur==2 && $coup_ordinateur==0){
        $message = "Vous avez perdu. zut";
        $class = "perdu";
    }if($coup_ordinateur==0 && $coup_joueur==1){
		$message = "Vous avez gagner !";
        $class = "gagner";
    }else if($coup_ordinateur==1 && $coup_joueur==2){
        $message = "Vous avez gagner !";
        $class = "gagner";
    }else if($coup_ordinateur==2 && $coup_joueur==0){
        $message = "Vous avez gagner !";
        $class = "gagner";
    }else if($coup_ordinateur == $coup_joueur){
        $message = "Vous ete a egalite !";
        $class = "egalite";
    }

    $vue=TRUE;
}

?>
