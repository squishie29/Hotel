<?PHP
include "../core/hotelC.php";
$hotel1C=new hotelC();
$listehotels=$hotel1C->afficherhotels();

//var_dump($listehotels->fetchAll());
?>
<table border="1">
    <tr>
        <td>Cin</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>nb heures</td>
        <td>tarif horaire</td>
        <td>supprimer</td>
        <td>modifier</td>
    </tr>

    <?PHP
    foreach($listehotels as $row){
        ?>
        <tr>
            <td><?PHP echo $row['cin']; ?></td>
            <td><?PHP echo $row['nom']; ?></td>
            <td><?PHP echo $row['prenom']; ?></td>
            <td><?PHP echo $row['nbHeures']; ?></td>
            <td><?PHP echo $row['tarifHoraire']; ?></td>
            <td><form method="POST" action="supprimerhotel.php">
                    <input type="submit" name="supprimer" value="supprimer">
                    <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
                </form>
            </td>
            <td><a href="modifierhotel.php?cin=<?PHP echo $row['cin']; ?>">
                    Modifier</a></td>
        </tr>
        <?PHP
    }
    ?>
</table>


