<?PHP
class promotion{

	private $id;
	private $date_d;
	private $date_f;
	private $titre;
    private $description;
    private $pourcentage;
    private $idH;
	function __construct($id,$date_d,$date_f,$titre,$description,$pourcentage,$idH){
		$this->id=$id;
        $this->date_d=$date_d;
        $this->date_f=$date_f;
        $this->titre=$titre;
        $this->description=$description;
        $this->pourcentage=$pourcentage;
        $this->idH=$idH;
		
	}
	
	function getid(){
		return $this->id;
	}
    function getdate_d(){
		return $this->date_d;
	}
    function getdate_f(){
		return $this->date_f;
	}
    function gettitre(){
		return $this->titre;
	}
    function getdescription(){
		return $this->description;
	}
    function getpourcentage(){
		return $this->pourcentage;
	}
    function getidH(){
		return $this->idH;
	}


	function setid($id){
		$this->id=$id;
	}

	function setdate_d($date_d){
		$this->date_d=$date_d;
	}
	function setdate_f($date_f){
		$this->date_f=$date_f;
	}
    function settitre($titre){
		$this->titre=$titre;
	}
    function setdescription($description){
		$this->description=$description;
	}
    function setpourcentage($pourcentage){
		$this->pourcentage=$pourcentage;
	}
    function setidH($idH){
		$this->idH=$idH;
	}
    
	
}

?>