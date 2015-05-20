<?php 

class Start extends CI_Controller
{
	// private $titre_defaut;
	
	// A constructor called by default that must absolutly call the parent __construct() function
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		//	Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
		//$this->titre_defaut = 'Mon super site';
	}


	// This function is called if url is 
	// by default :D
	public function index()
	{
		$this->accueil();
	}

	public function accueil()
	{
		// $this->load->view("theme/header");

		// $data = array();
  //       $data['username'] = 'Arthur';
  //       $data['email'] = 'email@ndd.fr';
  //       $data['online'] = true;

        // Third argument true (returns values, but doesn't show content)
        $this->load->view("templates/header");
		$this->load->view("accueil");//, $data);
		$this->load->view("templates/footer");
	}

	public function forum()
	{
		$this->load->view("templates/header");
		$this->load->view("forum");
		$this->load->view("templates/footer");
	}

	public function projets()
	{
		$this->load->view("templates/header");
		$this->load->view("projets");
		$this->load->view("templates/footer");
	}

	public function competitions()
	{
		$this->load->view("templates/header");
		$this->load->view("competitions");
		$this->load->view("templates/footer");
	}

	public function documentation()
	{
		$this->load->view("templates/header");
		$this->load->view("documentations");
		$this->load->view("templates/footer");
	}

	public function executif()
	{
		$this->load->view("templates/header");
		$this->load->view("executif");
		$this->load->view("templates/footer");
	}

	public function contactezNous()
	{
		$this->load->view("templates/header");
		$this->load->view("contactezNous");
		$this->load->view("templates/footer");
	}

	public function inscription()
	{
		$this->load->view("templates/header");
		$this->load->view("inscription");
		$this->load->view("templates/footer");
	}
}

