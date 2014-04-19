<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WishWall extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// load models
		$this->load->model('UserManager');
		$this->load->model('WishManager');
		// prepare data sent to wish wall
		$wishManager = WishManager::getInstance();
		$wishes = $wishManager->getAllWishes();	
		// translate wish makers and helpers id into username
		$userManager = UserManager::getUserManager();
		for($i = 0; $i < count($wishes); $i++)
		{
			$userInfo = $userManager->getUserInformationThroughID($wishes[$i]->wishMaker);
			$wishes[$i]->wishMaker = $userInfo['UserName'];
			$userInfo = $userManager->getUserInformationThroughID($wishes[$i]->wishHelper);
			$wishes[$i]->wishHelper = $userInfo['UserName'];
		}
		$data['wishes'] = $wishes;
		// load views
		$this->load->view('templates/wishwall/header.php');
		$this->load->view('templates/wishwall/navigation.php');
		$this->load->view('templates/wishwall/wishwall', $data);
		$this->load->view('templates/wishwall/footer.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */