<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de php</title>
</head>
<body>
    <form  name="form" action="action.php" method="post" enctype="multipart/form-data">
        <br>
        <label for="fichier">Fichier</label>
        <input type="file" name='fichier'>
        <br>
        <input type="checkbox" name="choix[]" value="protection">Protéger le fichier avec un mot de passe
        <br>
        <label for="fichier">Fichier2</label>
        <input type="file" name='fichier2'>
        <br>
        <input type="checkbox" name="choix" value="protection">Protéger le fichier avec un mot de passe
        <br>
        <label for="fichier">Fichier3</label>
        <input type="file" name='fichier3'>
        <br>
        <input type="checkbox" name="choix" value="protection">Protéger le fichier avec un mot de passe
        <br>
        <label for="fichier">Fichier4</label>
        <input type="file" name='fichier'>
        <br>
        <input type="checkbox" name="choix" value="protection">Protéger le fichier avec un mot de passe
        <br>
        <label for="fichier">Fichier5</label>
        <input type="file" name='fichier'>
        <br>
        <input type="checkbox" name="choix" value="protection">Protéger le fichier avec un mot de passe
        <br>
        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>
</html>