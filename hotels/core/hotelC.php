<?PHP
include "../../config.php";
require_once("../../entities/hotel.php");
class hotelC {
    
function afficherhotel ($hotel){
		echo "Id hotel: ".$hotel->getidH()."<br>";
		echo "Nom du hotel: ".$hotel->getnomHotel()."<br>";
		echo "nombre d'etoil: ".$hotel->getnbEtoils()."<br>";
		echo "nombre de chambres: ".$hotel->getnbChambre()."<br>";
		echo "photo du hotel: ".$hotel->getphoto()."<br>";
        echo "description du hotel: ".$hotel->getdescription()."<br>";
        echo "adresse du hotel: ".$hotel->getadresse()."<br>";
        echo "note: ".$hotel->getnote()."<br>";
	}
	/*function calculernote(){
        $sql="SELECT SUM(note)/count(note) from hotel";
		$db = config::getConnexion();
		try{
		$moy=$db->query($sql);
		return $moy;
	}

        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    */
	function ajouterhotel($hotel){
		$sql="insert into hotel (idH,nomHotel,nbEtoils,nbChambre,photo,description,adresse,note) values 
(:idH,:nomHotel,:nbEtoils,:nbChambre,:photo,:description,:adresse,:note)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idH=$hotel->getidH();
        $nomHotel=$hotel->getnomHotel();
        $nbEtoils=$hotel->getnbEtoils();
        $nbChambre=$hotel->getnbChambre();
        $photo=$hotel->getphoto();
        $description=$hotel->getdescription();
        $adresse=$hotel->getadresse();
        $note=$hotel->getnote();
        //lier variable => paramètre
        $req->bindValue(':idH',$idH);
		$req->bindValue(':nomHotel',$nomHotel);
		$req->bindValue(':nbEtoils',$nbEtoils);
		$req->bindValue(':nbChambre',$nbChambre);
		$req->bindValue(':photo',$photo);
        $req->bindValue(':description',$description);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':note',$note);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherhotels(){
		$sql="SElECT * From hotel";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerhotel($idH){
		$sql="DELETE FROM hotel where idH= :idH";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idH',$idH);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierhotel($hotel){
		$sql="UPDATE hotel SET idH=:idH, nomHotel=:nomHotel,nbEtoils=:nbEtoils,nbChambre=:nbChambre,photo=:photo,description=:description,adresse=:adresse,note=:note WHERE idH=:idH";
		$db = config::getConnexion();
try{

		$req=$db->prepare($sql);
        $idH=$hotel->getidH();
        $nomHotel=$hotel->getnomHotel();
        $nbEtoils=$hotel->getnbEtoils();
        $nbChambre=$hotel->getnbChambre();
        $photo=$hotel->getphoto();
        $description=$hotel->getdescription();
        $adresse=$hotel->getadresse();
        $note=$hotel->getnote();
		$datas = array( ':idH'=>$idH, ':nomHotel'=>$nomHotel,':nbEtoils'=>$nbEtoils,':nbChambre'=>$nbChambre,':photo'=>$photo,':description'=>$description,':adresse'=>$adresse,':note'=>$note);
		//lier variable => paramètre
		$req->bindValue(':idH',$idH);
		$req->bindValue(':nomHotel',$nomHotel);
		$req->bindValue(':nbEtoils',$nbEtoils);
		$req->bindValue(':nbChambre',$nbChambre);
		$req->bindValue(':photo',$photo);
        $req->bindValue(':description',$description);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':note',$note);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererhotel($idH){
		$sql="SELECT * from hotel where idH=$idH";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListehotels($nomHotel){
		$sql="SELECT * from hotel
    where nomHotel LIKE '%$nomHotel%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
    function afficheASC(){
		$sql="SELECT * from hotel
    order by idH DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>