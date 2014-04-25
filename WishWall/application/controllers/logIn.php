<?php
    session_start();
    class LogIn extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('UserManager');
        }
        public function index()
        {
            if( isset($_SESSION['UID']) && $_SESSION['UID']>0 ){
                $this->load->helper('url');
                redirect('MyPage/view');
            }
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = "Log In";

            $this->form_validation->set_rules(  'Username',
                                                'Username',
                                                'required');

            $this->form_validation->set_rules(   'Password',
                                                'Password',
                                                'required');

            if( $this->form_validation->run() === FALSE){
                $this->load->view('templates/header', $data);
                $this->load->view('logInPages/home');
                $this->load->view('templates/footer');
            }else{
                $this->logInWithUsernameAndPassword();
            }

        }

        public function logInWithUsernameAndPassword()
        {
            $UM = UserManager::getUserManager();

            $this->load->helper('url');

            $un = $this->input->post('Username');
            $pw = $this->input->post('Password');

            $result = $UM->logInWithUserNameAndPassword( $un, $pw);

            if( $result == 0){
                echo "failed to Log";
            }else{
                redirect('Mypage/view');
            }

        }

        public function logOut()
        {
            $this->load->helper('url');
            session_destroy();
            redirect('LogIn');
        }
    }
?>
