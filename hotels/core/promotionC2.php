<?PHP
require_once("../../entities/promotion.php");
class promotionC {
    
function afficherpromotion ($promotion){
		echo "Id promotion: ".$promotion->getid()."<br>";
		echo "Nom du promotion: ".$promotion->getdate_d()."<br>";
		echo "nombre d'etoil: ".$promotion->getdate_f()."<br>";
		echo "nombre de chambres: ".$promotion->gettitre()."<br>";
        echo "description du promotion: ".$promotion->getdescription()."<br>";
        echo "pourcentage du promotion: ".$promotion->getpourcentage()."<br>";
        echo "idH: ".$promotion->getidH()."<br>";
	}
	/*function calculeridH(){
        $sql="SELECT SUM(idH)/count(idH) from promotion";
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
	function ajouterpromotion($promotion){
		$sql="insert into promotion (id,date_d,date_f,titre,description,pourcentage,idH) values 
(:id,:date_d,:date_f,:titre,:description,:pourcentage,:idH)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$promotion->getid();
        $date_d=$promotion->getdate_d();
        $date_f=$promotion->getdate_f();
        $titre=$promotion->gettitre();
        $description=$promotion->getdescription();
        $pourcentage=$promotion->getpourcentage();
        $idH=$promotion->getidH();
        //lier variable => paramètre
        $req->bindValue(':id',$id);
		$req->bindValue(':date_d',$date_d);
		$req->bindValue(':date_f',$date_f);
		$req->bindValue(':titre',$titre);
        $req->bindValue(':description',$description);
        $req->bindValue(':pourcentage',$pourcentage);
        $req->bindValue(':idH',$idH);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherpromotions(){
		$sql="SElECT * From promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpromotion($id){
		$sql="DELETE FROM promotion where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpromotion($promotion){
		$sql="UPDATE promotion SET id=:id, date_d=:date_d,date_f=:date_f,titre=:titre,description=:description,pourcentage=:pourcentage,idH=:idH WHERE id=:id";
		$db = config::getConnexion();
try{

		$req=$db->prepare($sql);
        $id=$promotion->getid();
        $date_d=$promotion->getdate_d();
        $date_f=$promotion->getdate_f();
        $titre=$promotion->gettitre();
        $description=$promotion->getdescription();
        $pourcentage=$promotion->getpourcentage();
        $idH=$promotion->getidH();
		$datas = array( ':id'=>$id, ':date_d'=>$date_d,':date_f'=>$date_f,':titre'=>$titre,':description'=>$description,':pourcentage'=>$pourcentage,':idH'=>$idH);
		//lier variable => paramètre
		$req->bindValue(':id',$id);
		$req->bindValue(':date_d',$date_d);
		$req->bindValue(':date_f',$date_f);
		$req->bindValue(':titre',$titre);
        $req->bindValue(':description',$description);
        $req->bindValue(':pourcentage',$pourcentage);
        $req->bindValue(':idH',$idH);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpromotion($idH){
		$sql="SELECT * from promotion where idH=$idH";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListepromotions($date_d){
		$sql="SELECT * from promotion
    where date_d LIKE '%$date_d%'";
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
		$sql="SELECT * from promotion
    order by id DESC";
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