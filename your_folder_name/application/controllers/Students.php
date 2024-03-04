<?php
class Students extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('students_model');
    }

    public function index()
    {
        $data['students'] = $this->students_model->rows();
        $this->load->view('template/top_head');
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('students/index', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $this->form_validation->set_error_delimiters('<div style="color: red; font-size: .8rem;">', '</div>');
        
        $this->form_validation->set_rules('gradeLevel',     'grade level',      'required|trim');
        $this->form_validation->set_rules('studentNumber',  'student number',   'required|trim');
        $this->form_validation->set_rules('firstName',      'first name',       'required|trim');
        $this->form_validation->set_rules('lastName',       'last name',        'required|trim');
        $this->form_validation->set_rules('midtermGrade',   'midterm grade',    'required|trim');
        $this->form_validation->set_rules('finalGrade',     'final grade',      'required|trim');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'grade_level'       => $this->input->post('gradeLevel'),
                'student_number'    => $this->input->post('studentNumber'),
                'first_name'        => $this->input->post('firstName'),
                'middle_name'       => $this->input->post('middleName'),
                'last_name'         => $this->input->post('lastName'),
                'midterm_grade'     => $this->input->post('midtermGrade'),
                'final_grade'       => $this->input->post('finalGrade'),
                'created'           => 1,
                'date_created'      => date('Y-m-d')
            );

            $result = $this->students_model->add($data);

            if ($result) {
                $this->session->set_flashdata('successAdd', 'User successfully added');
                redirect('students');
            } else {
                $this->session->set_flashdata('errorAdd', 'Failed to add user.');
            }
        }

        $this->load->view('template/top_head');
        $this->load->view('template/nav');
        $this->load->view('students/add');
        $this->load->view('template/footer');
    }
}
