<?php
function genererMDP()
{
    //On défini mdp comme une chaine de caractère avec la liste de tout les caractère souhaité
        $mdp = 'azertyuiopqsdfghjklmwxcvbn1234567890AZERTYUIOPQSDFGHJKLMWXCVBN';
    //On défini une variable de longueur pour notre mot de passe
        $longueur = rand(13,20);
    //On initalise une variable vide pour qu'elle prenne la valeur du mot de passe
        $ch = '';
    //On boucle de manière a ce que notre mot de passe fasse la taille souhaité
        for($i=0;$i<$longueur;$i++)
        {
    //On donne a la variable vide la valeur du mot de passe
            $ch.= $mdp[rand(0,strlen($mdp)-1)];
        }
    //On affiche le mot de passe a l'utilisateur
        return $ch;
        genererMDP() = genererMDP($ch)
}
?>