<?php
class Login_model extends CI_Model{

public function getUser($where)
{
    $user=$this->db->get_where('users',$where);
    if($user->num_rows()>0){
        return $user->result();
    }else{
        return false;
    }
}

public function checkEmail($email){
    $this->db->select('email');
    $this->db->where('email',$email);
    $this->email = $this->db->get('users');

    return $this->email->result_array();

}
public function checkPhone($phone)
{
    $this->db->select('phone');
    $this->db->where('phone',$phone);
    $this->phone = $this->db->get('users');

    return $this->phone->result_array();
}
public function insertUser($data)
{
    $query =$this->db->insert('users',$data);
    return $query;
}
public function get_role($user)
{
    $this->db->where('email',$user);
    $this->db->select('role');
    $result=$this->db->get('users')->result();
    return $result;
}
public function editUser($info,$id)
{
    $this->db->where('id',$id);
    return $this->db->update('users',$info);
}


### AN API FOR SENDING SMS TO CONTACTS YOU HAVE USING INTERNET
public function beem_sms($phone_number, $message){
    if($phone_number != ''){
    $secret_key ='NjdiYzRlNjllN2I0YTcxZTYzN2IzNDY0ZGJmMGZjOTVlNDllNDFmNGM3YmExYjcwODhjNmFlMjI0M2IxZGMwYw==';
    $api_key = 'b169bd8b3710345b';
    $sender_name ='INFO';

    // The data to send to the API
    $postData = array(
        'source_addr' => $sender_name,
        'encoding'=> 0,
        'schedule_time' => '',
        'message' => $message,
        'recipients' => [array('recipient_id' => '1', 'dest_addr'=> str_replace('+', null, $phone_number))]
    );
    //.... Api url
    
    $Url ='https://apisms.beem.africa/v1/send';

    $ch = curl_init($Url);
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
            'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => json_encode($postData)
    ));

    $response = curl_exec($ch);
    return $response;
    }
}
}
?>