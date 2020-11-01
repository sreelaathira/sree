<?php
class Registration extends CI_Controller 
{

	public function index()
	{
		$this->load->view('index_page');
    }
    public function insert()
	{
        $this->load->model('Reg_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run()==false)
        {
            $this->load->view('reg_view');
        }
        else
        {
           
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $config['max_width'] = 1500;
            $config['max_height'] = 1500;
    
            $this->load->library('upload', $config);
    
            if (!$this->upload->do_upload('img')) 
        {
                $error = array('error' => $this->upload->display_errors());
                 echo $error['error'];
               // $this->load->view('list', $error);
            } 
        else 
        {
                $data =  $this->upload->data();
                $datas=$data['file_name'];
            
                $formarray=array();
          $formarray['name']=$this->input->post('name');
          $formarray['address']=$this->input->post('add');
          $formarray['email']=$this->input->post('email');
          $formarray['mob']=$this->input->post('mob');
          $formarray['image']=$datas;
          $this->Reg_model->reginsert($formarray);
            }
        }

    }
    public function show()
    {
      $this->load->model('Reg_model');
      $details= $this->Reg_model->show();
      $data = array();
      $data['users']=$details;
      $this->load->view('list',$data);
    }
}
?>
