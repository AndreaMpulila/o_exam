<?php
class Admin extends CI_controller 
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            $this->session->flashdata('info','You Have no Right to access the page');
            redirect ('');
        }
    }
    public function index()
    {
        $this->session->set_userdata('active_link','Home');
        $data['mpux']='Admin';
        $this->load->view('__base.php',$data);
        $this->load->view('__footer.php');
    }
    public function questions()
    {
        $this->session->set_userdata('active_link','Questions');
        $data['mpux']='Admin';
        $this->load->view('__base.php',$data);
        $this->load->view('question/index.php');
        $this->load->view('__footer.php');
    }
    public function addQuestion()
    {
        $this->session->set_userdata('active_link','Questions');
        $data['mpux']='Admin';
        $data['course'] = $this->db->get('course')->result();
        $this->load->view('__base.php',$data);
        $this->load->view('question/add.php');
        $this->load->view('__footer.php');

    if($this->input->post('submit')){
        $question = $this->input->post('question');
        $qtype = $this->input->post('qtype');
        $marks = $this->input->post('marks');
        $topic = $this->input->post('topic');
        $course = $this->input->post('course');
        if(empty($question) or empty($qtype) or empty($marks) or empty($topic)){
            $this->session->set_flashdata('error'," All field should be filled before pressing 'Save' !");
            redirect('Admin/addQuestion');
        }
        if($qtype=="choice"){
            $array=[$_POST['A'],$_POST['B'],$_POST['C'],$_POST['D'],$_POST['E']];
            $data = array(
                'question_text'=>$question,
                'type'=>$qtype,
                'topic'=>$topic,
                'module'=>$course,
                'marks'=>$marks
            );
            $req = $this->Lecturermodel->inserqn($data);
            for($j=0;$j<count($array);$j++){
                if($j ==0 && !empty($array[$j])){$this->db->insert('question_choices',array('question_id'=>$req, 'choice_type'=>'A', 'choice_value'=>"$array[$j]") );}
                if($j ==1 && !empty($array[$j])){$this->db->insert('question_choices',array('question_id'=>$req, 'choice_type'=>'B', 'choice_value'=>"$array[$j]") );}
                if($j ==2 && !empty($array[$j])){$this->db->insert('question_choices',array('question_id'=>$req, 'choice_type'=>'C', 'choice_value'=>"$array[$j]") );}
                if($j ==3 && !empty($array[$j])){$this->db->insert('question_choices',array('question_id'=>$req, 'choice_type'=>'D', 'choice_value'=>"$array[$j]") );}
                if($j ==4 && !empty($array[$j])){$this->db->insert('question_choices',array('question_id'=>$req, 'choice_type'=>'E', 'choice_value'=>"$array[$j]") );}
            }
        }else{
            $data = array(
                'question_text'=>$question,
                'type'=>$qtype,
                'topic'=>$topic,
                'module'=>$course,
                'marks'=>$marks
            );
            $req = $this->Lecturermodel->inserqn($data);
        } 
        if($req){
            $this->session->set_flashdata('success',"Question added Successfully!");
            redirect('Admin/addQuestion');
        }


    }
    if($this->input->post('upload')){
        $this->uploadByExcel();  
    }
   }


   public function view_questions($id)
   {
    $this->session->set_userdata('active_link','Questions');
    $this->db->where('id',$id);
    $refer =$this->db->get('course')->result();
    foreach($refer as $ref){$da = $ref->course_code;}
    $data['qn']=$this->Lecturermodel->get_course_question($da);
    $data['module']=$da;
    $data['course']= $this->Lecturermodel->getCourse();
    $this->load->view('lecturer/base');
    $this->load->view('lecturer/question_module',$data);
    $this->load->view('lecturer/footer');
    if($this->input->post('submit')){
        $question = $this->input->post('question');
        $qtype = $this->input->post('qtype');
        $marks = $this->input->post('marks');
        $topic = $this->input->post('topic');
        $course = $this->input->post('course');
        if(empty($question) or empty($qtype) or empty($marks) or empty($topic)){
            $this->session->set_flashdata('error'," All field should be filled before pressing 'Save' !");
            redirect('Lecturer/questions');
        }
        if($qtype=="choice"){
            $array=[$_POST['A'],$_POST['B'],$_POST['C'],$_POST['D'],$_POST['E']];
            $data = array(
                'question_text'=>$question,
                'type'=>$qtype,
                'topic'=>$topic,
                'module'=>$course,
                'marks'=>$marks
            );
            $req = $this->Lecturermodel->inserqn($data);
            for($j=0;$j<count($array);$j++){
                if($j ==0 && !empty($array[$j])){$this->db->insert('question_choices',array('question_id'=>$req, 'choice_type'=>'A', 'choice_value'=>"$array[$j]") );}
                if($j ==1 && !empty($array[$j])){$this->db->insert('question_choices',array('question_id'=>$req, 'choice_type'=>'B', 'choice_value'=>"$array[$j]") );}
                if($j ==2 && !empty($array[$j])){$this->db->insert('question_choices',array('question_id'=>$req, 'choice_type'=>'C', 'choice_value'=>"$array[$j]") );}
                if($j ==3 && !empty($array[$j])){$this->db->insert('question_choices',array('question_id'=>$req, 'choice_type'=>'D', 'choice_value'=>"$array[$j]") );}
                if($j ==4 && !empty($array[$j])){$this->db->insert('question_choices',array('question_id'=>$req, 'choice_type'=>'E', 'choice_value'=>"$array[$j]") );}
            }
        }else{
            $data = array(
                'question_text'=>$question,
                'type'=>$qtype,
                'topic'=>$topic,
                'module'=>$course,
                'marks'=>$marks
            );
            $req = $this->Lecturermodel->inserqn($data);
        } 
        if($req){
            $this->session->set_flashdata('success',"Question added Successfully!");
            redirect('Lecturer/questions');
        }


    }
   }

   public function edit_question($id)
   {
       $data['question']= $this->db->get_where('questionbank',array('id'=>$id))->result();
       $data['course']= $this->Lecturermodel->getCourse();
       $this->load->view('lecturer/base');
       $this->load->view('lecturer/edit_qn',$data);
       $this->load->view('lecturer/footer');
       if($this->input->post('submit')){
       $question = $this->input->post('question');
        $qtype = $this->input->post('qtype');
        $marks = $this->input->post('marks');
        $topic = $this->input->post('topic');
        $course = $this->input->post('course');
        if(empty($question) or empty($qtype) or empty($marks) or empty($topic)){
            $this->sessiion->set_flashdata('error'," All field should be filled before pressing 'Save' !");
            redirect('Lecturer/questions');
        }

        if($qtype=="choice"){
            $array=[
                !empty($_POST['A'])?$_POST['A']:'',
                !empty($_POST['B'])?$_POST['B']:'',
                !empty($_POST['C'])?$_POST['C']:'',
                !empty($_POST['D'])?$_POST['D']:'',
                !empty($_POST['E'])?$_POST['E']:''
            ];
            $data = array(
                'question_text'=>$question,
                'type'=>$qtype,
                'topic'=>$topic,
                'module'=>$course,
                'marks'=>$marks
            );
            $req = $this->Lecturermodel->updateqn($id,$data);
            for($j=0;$j<count($array);$j++){
                if($j ==0 && !empty($array[$j])){
                    $this->db->where(['question_id'=>$id,'choice_type'=>'A']);
                    $this->db->set(array('question_id'=>$id, 'choice_type'=>'A', 'choice_value'=>"$array[$j]") );
                    $this->db->update('question_choices');
                }
                if($j ==1 && !empty($array[$j])){
                    $this->db->where(['question_id'=>$id,'choice_type'=>'B']);
                    $this->db->set(array('question_id'=>$id, 'choice_type'=>'B', 'choice_value'=>"$array[$j]") );
                    $this->db->update('question_choices');
                }
                if($j ==2 && !empty($array[$j])){
                    $this->db->where(['question_id'=>$id,'choice_type'=>'C']);
                    $this->db->set(array('question_id'=>$id, 'choice_type'=>'C', 'choice_value'=>"$array[$j]") );
                    $this->db->update('question_choices');
                }
                if($j ==3 && !empty($array[$j])){
                    $this->db->where(['question_id'=>$id,'choice_type'=>'D']);
                    $this->db->set(array('question_id'=>$id, 'choice_type'=>'D', 'choice_value'=>"$array[$j]") );
                    $this->db->update('question_choices');
                }
                if($j ==4 && !empty($array[$j])){
                    $this->db->where(['question_id'=>$id,'choice_type'=>'E']);
                    $this->db->set(array('question_id'=>$id, 'choice_type'=>'E', 'choice_value'=>"$array[$j]") );
                    $this->db->update('question_choices');
                }
            }
            
        }else{
        $data = array(
            'question_text'=>$question,
            'type'=>$qtype,
            'topic'=>$topic,
            'module'=>$course,
            'marks'=>$marks
        );
        $req = $this->Lecturermodel->updateqn($id,$data);
    }
        if($req){
            $this->session->set_flashdata('success',"Question updated Successfully!");
            redirect('Lecturer/questions');
        }


    }
}
    public function delete_question($id){
        $this->load->view('lecturer/base');
        $this->load->view('lecturer/delete_qn');
        $this->load->view('lecturer/footer');
        if($this->input->post('submit')){
            $request = $this->Lecturermodel->delete_question($id);
            if($request){
                $this->session->set_flashdata('success',"Question deleted Successfully!");
            redirect('Lecturer/questions');
            }
        }
    }
    public function delete_allquestions($id){
        $this->load->view('lecturer/base');
        $this->db->where('id',$id);
        $refer =$this->db->get('course')->result();
        foreach($refer as $ref){$da = $ref->course_code;}
        $this->db->where('module',$da);
        $data['question']=$this->db->get('questionbank')->num_rows();
        $this->load->view('lecturer/delete_all_qn',$data);
        $this->load->view('lecturer/footer');
        if($this->input->post('submit')){
            $request = $this->Lecturermodel->delete_all_question($da);
            if($request){
                $this->session->set_flashdata('success',"Question deleted Successfully!");
            redirect('Lecturer/questions');
            }
        }
    }
   
}
