<?php
include 'dbconfig.php';
  class avis 
  {
  	
  	private $cin_client ;
    private $reclamation ;
     
  	
  	function __construct($cin_client,$reclamation)
  	{

  		
  		$this->cin_client=$cin_client;
  		
  		$this->reclamation=$reclamation;
  		
      

  	}

    

  	public function afficheravis()
  	{
  		
  		echo "cin_client : ".$this->cin_client."<br>";
  		echo "reclamation : ".$this->reclamation."<br>";
  		
  	}
    // getters 
  	
  	public function getcin_client()
  	{
  		return $this->cin_client;
  	}
  	public function getreclamation()
  	{
  		return $this->reclamation;
  	}
  	






   //setters 
  	
  	public function setcin_client($cin_client)
  	{
       $this->cin_client=$cin_client;
  	}
  	public function setreclamation($reclamation)
  	{
       $this->reclamation=$reclamation;
  	}
  	
    

  }

?>