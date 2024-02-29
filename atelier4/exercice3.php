<?php
$nom=$_POST['nom'];
var_dump($nom);
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$adresse=$_POST['adresse'];
$tel=$_POST['tel'];
$codePostal=$_POST['code'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" >
        <title> Document</title>
    </head>
    <body>
        <table>
            <tr>
                <td>Nom</td>
                <td>prenom</td>
                <td>email</td>
                <td>adresse</td>
                <td>tel</td>
                <td>code postal</td>
            </tr>
            <tr>
                <td><?php   echo $nom;  ?></td>
                <td><?php   echo $prenom;  ?></td>
                <td><?php   echo $email;  ?></td>
                <td><?php   echo $adresse;  ?></td>
                <td><?php   echo $tel;  ?></td>
                <td><?php   echo $codePostal;  ?></td>

</tr>
        </table>
        <form action="contact.php" section="post">
            <label>NOM</label>
            <input type="text" name="Nom">
            <label>prenom</label>
            <input type="text" name="prenom">
            <label> Email</label>
            <input type="email" name="email">
            <label> telephone</label>
            <input type="tel" name="tel">
            <label> Adresse</label>
            <input type="adresse" cols="30" rows="10">
            <label> Code Postal</label>
            <input type="number" name="code">
           
            <input type="submit" name="valider">
        </form>
    </body>
</html>