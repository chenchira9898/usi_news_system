<?php 

//redirect('user/login', 'refresh');
 
class Loadpost {

    public function __construct() {
        $this->CI = & get_instance();
    }

    public function check_login() {
        if ($this->CI->session->userdata('login_id') == NULL) {
            if ($this->CI->router->method != 'login' && $this->CI->router->method != 'validlogin' && $this->CI->router->method != 'listview' && $this->CI->router->method !='read') {
                echo "<script type='text/javascript'>";
                echo "window.location='../user/login';";
                echo "</script>";   
                redirect('user/login', 'refresh');
                exit();
            }
        }else{
            if($this->CI->router->method=='login'){
                redirect('','refresh');
                exit();
            }
        } 
    }


}



 

