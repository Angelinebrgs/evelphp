<?php
//Dans ce fichier on va traiter le formulaire
if(isset($_POST['submit']))
{
    //On selection les checkbox pour voir si elles sont coché
    if(isset($_POST['checkbox']))
    {
        //On appelle la fonction et génère le mdp
        echo genererMDP();
    }
}
//Pour traiter le form
if(!isset($_POST['submit']))
{
    //Si quelque chose est submit on upload le fichier
    if(is_uploaded_file($_FILES['fichier']['tmp_name']))
    {
    //On défini que l'extention du fichier ne bougera pas et qu'elle est une chaine de caractère
        $ext = strrchr($_FILES['fichier']['name'],'.');
    //On envoie le fichier là ou l'ont veut qu'il soit et on le renome angie.(sont extention)
        move_uploaded_file($_FILES['fichier']['tmp_name'],'upload/angie'.$ext);
    }
}
?>