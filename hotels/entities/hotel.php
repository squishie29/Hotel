<?PHP
class hotel{

	private $idH;
	private $nomHotel;
	private $nbEtoils;
	private $nbChambre;
	private $photo;
    private $description;
    private $adresse;
    private $note;
	function __construct($idH,$nomHotel,$nbEtoils,$nbChambre,$photo,$description,$adresse,$note){
		$this->idH=$idH;
        $this->nomHotel=$nomHotel;
        $this->nbEtoils=$nbEtoils;
        $this->nbChambre=$nbChambre;
        $this->photo=$photo;
        $this->description=$description;
        $this->adresse=$adresse;
        $this->note=$note;
		
	}
	
	function getidH(){
		return $this->idH;
	}
    function getnomHotel(){
		return $this->nomHotel;
	}
    function getnbEtoils(){
		return $this->nbEtoils;
	}
    function getnbChambre(){
		return $this->nbChambre;
	}
    function getphoto(){
		return $this->photo;
	}
    function getdescription(){
		return $this->description;
	}
    function getadresse(){
		return $this->adresse;
	}
    function getnote(){
		return $this->note;
	}


	function setidH($idH){
		$this->idH=$idH;
	}

	function setnomHotel($nomHotel){
		$this->nomHotel=$nomHotel;
	}
	function setnbEtoils($nbEtoils){
		$this->nbEtoils=$nbEtoils;
	}
    function setnbChambre($nbChambre){
		$this->nbChambre=$nbChambre;
	}
    function setphoto($photo){
		$this->photo=$photo;
	}
    function setdescription($description){
		$this->description=$description;
	}
    function setadresse($adresse){
		$this->adresse=$adresse;
	}
    function setnote($note){
		$this->note=$note;
	}
    
	
}

?>