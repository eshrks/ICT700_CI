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

        $this->form_validation->set_rules('grade_level',     'grade level',      'required|trim');
        $this->form_validation->set_rules('student_number',  'student number',   'required|trim');
        $this->form_validation->set_rules('first_name',      'first name',       'required|trim');
        $this->form_validation->set_rules('last_name',       'last name',        'required|trim');
        $this->form_validation->set_rules('midterm_grade',   'midterm grade',    'required|trim');
        $this->form_validation->set_rules('final_grade',     'final grade',      'required|trim');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'grade_level'       => $this->input->post('grade_level'),
                'student_number'    => $this->input->post('student_number'),
                'first_name'        => $this->input->post('first_name'),
                'middle_name'       => $this->input->post('middle_name'),
                'last_name'         => $this->input->post('last_name'),
                'midterm_grade'     => $this->input->post('midterm_grade'),
                'final_grade'       => $this->input->post('final_grade'),
                'created'           => 1,
                'date_created'      => date('Y-m-d')
            );

            $result = $this->students_model->add($data);

            if ($result) {
                $this->session->set_flashdata('successAdd', 'Student successfully added');
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

    public function delete()
    {
        $id = $this->input->post('id');
        $this->students_model->delete($id);

        $this->session->set_flashdata('successDelete', 'Student Successfully Deleted.');
        redirect(site_url('students'));
    }

    public function edit($id)
    {
        $data['student'] = $this->students_model->row($id);

        $this->load->view('template/top_head');
        $this->load->view('students/edit', $data);
        $this->load->view('template/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_error_delimiters('<div style="color: red; font-size: .8rem;">', '</div>');

        $this->form_validation->set_rules('grade_level',      'grade level',      'required|trim');
        $this->form_validation->set_rules('student_number',   'student number',   'required|trim');
        $this->form_validation->set_rules('first_name',       'first name',       'required|trim');
        $this->form_validation->set_rules('last_name',        'last name',        'required|trim');
        $this->form_validation->set_rules('midterm_grade',    'midterm grade',    'required|trim');
        $this->form_validation->set_rules('final_grade',      'final grade',      'required|trim');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'grade_level'       => $this->input->post('grade_level'),
                'student_number'    => $this->input->post('student_number'),
                'first_name'        => $this->input->post('first_name'),
                'middle_name'       => $this->input->post('middle_name'),
                'last_name'         => $this->input->post('last_name'),
                'midterm_grade'     => $this->input->post('midterm_grade'),
                'final_grade'       => $this->input->post('final_grade'),
                'updated'           => 1,
                'date_updated'      => date('Y-m-d')
            );

            $result = $this->students_model->update($data, $id);

            if ($result) {
                $this->session->set_flashdata('successUpdate', 'Student successfully updated');
                redirect('students');
            } else {
                $this->session->set_flashdata('errorUpdate', 'Failed to update student.');
            }
        }

        $data['student'] = $this->students_model->row($id);

        $this->load->view('template/top_head');
        $this->load->view('students/edit', $data);
        $this->load->view('template/footer');
    }

    public function deleted()
    {
        $data['students'] = $this->students_model->deleted();
        $this->load->view('template/top_head');
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('students/deleted', $data);
        $this->load->view('template/footer');
    }

    public function restore($id)
    {
        $this->students_model->restoreStudent($id);
        $this->session->set_flashdata('successRestore', 'Student Successfully Restored');
        redirect(site_url('students/deleted'));
    }
}
