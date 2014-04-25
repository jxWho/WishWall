<?php
    session_start();
    class Register extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('UserManager');
        }
        public function index()
        {
            $UM = UserManager::getUserManager();

            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules(
                'Username',
                'Username',
                'required|is_unique[Users.UserName]'
            );
            $this->form_validation->set_rules(
                'Password',
                'Password',
                'required|matches[CPassword]'
            );

            $this->form_validation->set_rules(
                'CPassword',
                'Confirm Password',
                'required'
            );


            $data['title'] = 'Register';

            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('logInPages/signUp');
                $this->load->view('templates/footer');
            }else{
                $userName = $this->input->post('Username');
                $passwd = $this->input->post('Password');
                $r = $UM->createUser( $userName, $passwd );

                if( $r != -1){
                    $_SESSION['UID'] = $r;

                    echo "Register successfully!<br />";

                    $this->load->helper('url');
                    $nextUrl = site_url('MyPage/view');
                    echo "<a href='$nextUrl'>Go to My Home</a>";
                }

            }
        }
    }
?>
