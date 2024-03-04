<?php
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index()
    {
        $data['users'] = $this->users_model->rows();
        $this->load->view('template/top_head');
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('users/index', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $this->form_validation->set_error_delimiters('<div style="color: red; font-size: .8rem;">', '</div>');
        
        $this->form_validation->set_rules('userLevel',      'user level',       'required|trim');
        $this->form_validation->set_rules('lastName',       'last name',        'required|trim');
        $this->form_validation->set_rules('firstName',      'first name',       'required|trim');
        $this->form_validation->set_rules('contactNumber',  'contact number',   'required|trim');
        $this->form_validation->set_rules('userName',       'username',         'required|trim');
        $this->form_validation->set_rules('password',       'password',         'required|trim');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'user_level'        => $this->input->post('userLevel'),
                'last_name'         => $this->input->post('lastName'),
                'first_name'        => $this->input->post('firstName'),
                'middle_name'       => $this->input->post('middleName'),
                'contact_number'    => $this->input->post('contactNumber'),
                'user_name'         => $this->input->post('userName'),
                'pword'             => md5($this->input->post('password')),
                'created'           => 1,
                'date_created'      => date('Y-m-d')
            );

            $result = $this->users_model->add($data);

            if ($result) {
                $this->session->set_flashdata('successAdd', 'User successfully added');
                redirect('users');
            } else {
                $this->session->set_flashdata('errorAdd', 'Failed to add user.');
            }
        }

        $this->load->view('template/top_head');
        $this->load->view('template/nav');
        $this->load->view('users/add');
        $this->load->view('template/footer');
    }
}
