<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }
    public function index()
    {
        $this->session->set_userdata('active_link','Login');
        $this->load->view('user_login/login');
        if($_POST){
            if($this->form_validation->run('login')==FALSE){
            return redirect('');
            }
            $post_info =$_POST;
            array_pop($post_info);
            $password =['password'=>md5($post_info['password'])];
           $phone = strpos($post_info['username'],"@")?['username'=>$post_info['username']]:['phone'=>$post_info['username']];

            $login_info = array_merge($password,$phone);
            $request =$this->Login_model->getUser($login_info);
            if($request){
               foreach($request as $result){
                $user=$result->username;
                $role=$result->role;
                $uuid=$result->id;
               }
               if(empty($reason)){
               $this->session->set_userdata(['uuid'=>$uuid,'user'=>$user,'role'=>$role,'logged_in'=>'1']);
               $this->session->set_flashdata('success','Logged in successfully');
                switch ($role) {
                    case 'admin':
                        $this->loginStatus('active',$uuid);
                        $this->session->set_userdata('can_access',1);
                        redirect('admin');
                        break;
                    case 'sofficer':
                        $this->loginStatus('active',$uuid);
                        $this->session->set_userdata('can_access',2);
                        redirect('sofficer');
                        break;
                    case 'wofficer':
                        $this->loginStatus('active',$uuid);
                        $this->session->set_userdata('can_access',3);
                        redirect('wofficer');
                        break;
                    case 'supporter':
                        $this->loginStatus('active',$uuid);
                        $this->session->set_userdata('can_access',4);
                        redirect('supporter');
                        break;
                    case 'accountant':
                        $this->loginStatus('active',$uuid);
                        $this->session->set_userdata('can_access',5);
                        redirect('accountant');
                        break;
                    case 'citizen':
                        $this->loginStatus('active',$uuid);
                        $this->session->set_userdata('can_access',6);
                        redirect('citizen');
                        break;
                    default:
                        $this->session->set_userdata('help','Some of your information is Not Defined well in The system, Contact Admin for more Help!');
                        return redirect('');
                        break;
                }

            }
            else{
                $this->session->set_userdata(['uuid'=>$uuid,'user'=>$user,'phone'=>$phone,'role'=>$role,'logged_in'=>'1','location'=>$location,'user_avatar'=>$avatar,'fname'=>$fname,'lname'=>$lname,'reason'=>$reason]);
                return redirect('oos');
            }
        }else{
                $this->session->set_flashdata('error','Invalid Username or Password!');
                return redirect('');
            }
            
        }
    }
    public function register()
    {
        $this->session->set_userdata('active_link','Register');
        $this->load->view('user_login/register');
        if($_POST){
            if ($this->form_validation->run('signup') == FALSE)
            {
                $this->session->set_flashdata('error','The information Provided is not valid Try again!');
            return redirect('register');
            }
           $post_info =$_POST;
            array_pop($post_info);
            $email=$post_info['email'];
            $phone =$post_info['phone'];
            $estatus =$this->Login_model->checkEmail($email);
            $pstatus =$this->Login_model->checkPhone($phone);
            if(empty($estatus) && empty($pstatus)){
                $password =['password'=>md5($post_info['password'])];
                array_pop($post_info);
               $login_info= array_merge($post_info,$password);
                
            $request =$this->Login_model->insertUser($login_info);
                if($request){
                    $this->session->set_flashdata('success','You have successfuly Registered, You may Login now!');
                return redirect('');
                }
        }else{
            $this->session->set_flashdata('error','You are Trying to register using Phone number or Email which has already taken!, Try another Email or Phone number');
            $data['info']='Something Wrong!';
                return redirect('register',$data);
        }
        };
    }
    
    public function get_users()
    {
        $ward =$this->input->post('service');
        $users =$this->db->query("SELECT u.* from users as u inner join services as s on u.place_id = s.location and s.id =$ward")->result();
        $response = array();
		foreach ($users as $user) {
			$response[] = array(
				'id' => $user->id,
				'name' => $user->fname.' '.$user->lname
			);
		}
		echo json_encode($response);   
    }
    
    #####----END OF AJAX REQUESTS-----#####
    public function logout($status=null)
    {
        $this->loginStatus('inactive',$this->session->userdata('uuid'));
        $this->session->sess_destroy();
        $this->session->set_flashdata('info',"Logged out Successfuly");
			return redirect('');
    }
    public function loginStatus($status,$currentSession)
    {
        $date =date('Y-m-d H:m:s');
        $where = $status=='inactive'?",last_logout= '$date'":'';
        $this->db->query("UPDATE users SET user_status = '$status'".$where." WHERE id = '$currentSession'");
    }

}
