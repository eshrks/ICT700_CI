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
        
        $this->form_validation->set_rules('user_level',      'user level',       'required|trim');
        $this->form_validation->set_rules('first_name',      'first name',       'required|trim');
        $this->form_validation->set_rules('last_name',       'last name',        'required|trim');
        $this->form_validation->set_rules('contact_number',  'contact number',   'required|trim');
        $this->form_validation->set_rules('user_name',       'username',         'required|trim');
        $this->form_validation->set_rules('pword',       'password',         'required|trim');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'user_level'        => $this->input->post('user_level'),
                'first_name'        => $this->input->post('first_name'),
                'middle_name'       => $this->input->post('middle_name'),
                'last_name'         => $this->input->post('last_name'),
                'contact_number'    => $this->input->post('contact_number'),
                'user_name'         => $this->input->post('user_name'),
                'pword'             => md5($this->input->post('pword')),
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

    public function delete()
    {
        $id = $this->input->post('id');
        $this->users_model->delete($id);

        $this->session->set_flashdata('successDelete', 'User Successfully Deleted.');
        redirect(site_url('users'));
    }

    public function edit($id)
    {
        $data['user'] = $this->users_model->row($id);

        $this->load->view('template/top_head');
        $this->load->view('users/edit', $data);
        $this->load->view('template/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_error_delimiters('<div style="color: red; font-size: .8rem;">', '</div>');
        
        $this->form_validation->set_rules('user_level',      'user level',       'required|trim');
        $this->form_validation->set_rules('first_name',      'first name',       'required|trim');
        $this->form_validation->set_rules('last_name',       'last name',        'required|trim');
        $this->form_validation->set_rules('contact_number',  'contact number',   'required|trim');
        $this->form_validation->set_rules('user_name',       'username',         'required|trim');
        $this->form_validation->set_rules('pword',       'password',         'required|trim');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'user_level'        => $this->input->post('user_level'),
                'first_name'        => $this->input->post('first_name'),
                'middle_name'       => $this->input->post('middle_name'),
                'last_name'         => $this->input->post('last_name'),
                'contact_number'    => $this->input->post('contact_number'),
                'user_name'         => $this->input->post('user_name'),
                'pword'             => md5($this->input->post('pword')),
                'updated'           => 1,
                'date_updated'      => date('Y-m-d')
            );

            $result = $this->users_model->update($data, $id);

            if ($result) {
                $this->session->set_flashdata('successUpdate', 'User successfully updated');
                redirect('users');
            } else {
                $this->session->set_flashdata('errorUpdate', 'Failed to update user.');
            }
        }

        $data['user'] = $this->users_model->row($id);

        $this->load->view('template/top_head');
        $this->load->view('users/edit', $data);
        $this->load->view('template/footer');
    }

    public function deleted()
    {
        $data['users'] = $this->users_model->deleted();
        $this->load->view('template/top_head');
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('users/deleted', $data);
        $this->load->view('template/footer');
    }

    public function restore($id)
    {
        $this->users_model->restoreUser($id);
        $this->session->set_flashdata('successRestore', 'User Successfully Restored');
        redirect(site_url('users/deleted'));
    }
}
