<?php

class Start extends BaseController
{
	//Route::get('/', 'Start@accueil');

	public function accueil()
	{
        	// Third argument true (returns values, but doesn't show content)
		return View::make('templates/header');
		View::make('accueil');
		View::make('templates/footer');
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
}

