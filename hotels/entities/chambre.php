<?PHP
class chambre{

	private $idCh;
	private $nbBed;
    private $idH;
	private $typeC;
    private $prix;
	function __construct($idCh,$nbBed,$idH,$typeC,$prix){
		$this->idCh=$idCh;
        $this->nbBed=$nbBed;
        $this->idH=$idH;
        $this->typeC=$typeC;
        $this->prix=$prix;
		
	}
	
	function getidCh(){
		return $this->idCh;
	}
    function getnbBed(){
		return $this->nbBed;
	}
    function getidH(){
		return $this->idH;
	}
    function gettypeC(){
		return $this->typeC;
	}
    function getprix(){
		return $this->prix;
	}

	function setidCh($idCh){
		$this->idCh=$idCh;
	}
	function setnbBed($nbBed){
		$this->nbBed=$nbBed;
	}
    function setidH($idH){
		$this->idH=$idH;
	}
	function settypeC($typeC){
		$this->typeC=$typeC;
	}
    function setprix($prix){
		$this->prix=$prix;
	}
    
	
}

?>