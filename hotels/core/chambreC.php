<?PHP
require_once ("../../config.php");
require_once("../../entities/chambre.php");
class chambreC {
    
function afficherchambre ($chambre){
		echo "iddd: ".$chambre->getidCh()."<br>";
		echo "Nom du chambre: ".$chambre->getnbBed()."<br>";
        echo "id hotel: ".$chambre->getidH()."<br>";
		echo "nombre d'etoil: ".$chambre->gettypeC()."<br>";
        echo "prix du chambre: ".$chambre->getprix()."<br>";
	}
	/*function calculernote(){
        $sql="SELECT SUM(note)/count(note) from chambre";
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
	function ajouterchambre($chambre){
		$sql="insert into chambre (idCh,nbBed,idH,typeC,prix) values 
(:idCh,:nbBed,:idH,:typeC,:prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idCh=$chambre->getidCh();
        $nbBed=$chambre->getnbBed();
        $idH=$chambre->getidH();
        $typeC=$chambre->gettypeC();
        $prix=$chambre->getprix();
        //lier variable => paramètre
        $req->bindValue(':idCh',$idCh);
		$req->bindValue(':nbBed',$nbBed);
        $req->bindValue(':idH',$idH);
		$req->bindValue(':typeC',$typeC);
        $req->bindValue(':prix',$prix);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherchambres(){
		$sql="SElECT * From chambre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerchambre($idCh){
		$sql="DELETE FROM chambre where idCh= :idCh";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCh',$idCh);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function modifierchambre($chambre){
		$sql="UPDATE chambre SET idCh=:idCh, nbBed=:nbBed,idH=:idH,typeC=:typeC,prix=:prix WHERE idCh=:idCh";
		$db = config::getConnexion();
try{

		$req=$db->prepare($sql);
        $idCh=$chambre->getidCh();
        $nbBed=$chambre->getnbBed();
        $idH=$chambre->getidH();
        $typeC=$chambre->gettypeC();
        $prix=$chambre->getprix();
		$datas = array( ':idCh'=>$idCh, ':nbBed'=>$nbBed,':idH'=>$idH,':typeC'=>$typeC,':prix'=>$prix);
		//lier variable => paramètre
		$req->bindValue(':idCh',$idCh);
		$req->bindValue(':nbBed',$nbBed);
		$req->bindValue(':idH',$idH);
		$req->bindValue(':typeC',$typeC);
		$req->bindValue(':prix',$prix);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererchambre($idH){
		$sql="SELECT * from chambre where idH=$idH";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListechambres($nbBed){
		$sql="SELECT * from chambre
    where nbBed LIKE '%$nbBed%'";
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