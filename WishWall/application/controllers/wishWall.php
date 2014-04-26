<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
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
	private $wishManager, $userManager;
	public function __construct()
	{
		parent::__construct();
		// load models
		$this->load->model('UserManager');
		$this->load->model('WishManager');
		$this->load->helper('url');
	}
	public function wall()
	{
		// prepare data sent to wish wall
		$wishManager = WishManager::getInstance();
		
		$this->load->library('pagination');
		$this->load->helper('url');

	    $config['base_url'] = site_url('/WishWall/wall');
	    $this->db->where('Status', '0');
	    $this->db->from('Wishes');
	    $config['total_rows'] = $this->db->count_all_results();
	    $config['per_page'] = 5;
	    $config['uri_segment'] = 3;

	    $this->pagination->initialize($config);
	    
	    $wishes = $wishManager->getAllWishes($config['per_page'], $this->uri->segment(3));
	    $mainContent['wishes'] = $wishes;	
		// translate wish makers and helpers id into username
		$userManager = UserManager::getUserManager();
		for($i = 0; $i < count($wishes); $i++)
		{
			$userInfo = $userManager->getUserThroughID($wishes[$i]->wishMaker);
			$wishes[$i]->wishMaker = $userInfo->UserName;
			$userInfo = $userManager->getUserThroughID($wishes[$i]->wishHelper);
			$wishes[$i]->wishHelper = $userInfo->UserName;
		}
		$header['title'] = 'wish wall';
		// load views
		$this->load->view('templates_wishwall/header.php',$header);
		$this->load->view('templates_wishwall/navigator.php');
		$this->load->view('templates_wishwall/wallHeader.php');
		$this->load->view('templates_wishwall/newWish.php');
		$this->load->view('templates_wishwall/mainContent.php', $mainContent);
		$this->load->view('templates_wishwall/wallFooter.php');
		$this->load->view('templates_wishwall/profile');
		$this->load->view('templates_wishwall/footer.php');
	}
	// creates new wish
	// given: $title, $description, $expDate
	public function createNewWish()
	{
		// get post values
		$title = $this->input->post('newWishTitle');
		$description = $this->input->post('newWishDescription');
		$expDate = $this->input->post('newWishExpDate');

		// enter data
		$wishManager = WishManager::getInstance();
		$wishManager->createNewWish($title, $_SESSION['UID'], $description, $expDate);

		// refresh the wish wall
		Header("Location:" . site_url() . '/Wishwall/wall');
	}
	// help with certain wish
	public function help()
	{
		// get post values
		$wishId = $this->input->post('wishId');

		// enter data
		$wishManager = WishManager::getInstance();
		$wishManager->help($wishId, $_SESSION['UID']);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */