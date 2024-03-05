<?php
class Students_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'students';
    }

    public function rows()
    {
        $where = array('is_deleted' => 0);
        $query = $this->db->get_where($this->table, $where);
        return $query->result();
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return TRUE;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $data = array(
            'is_deleted' => 1,
            'date_deleted' => date('Y-m-d')
        );
        $this->db->update($this->table, $data);
    }

    public function row($id)
    {
        $where = array('id' => $id);
        $query = $this->db->get_where($this->table, $where);
        return $query->row();
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        return TRUE;
    }

    public function deleted()
    {
        $where = array('is_deleted' => 1);
        $query = $this->db->get_where($this->table, $where);
        return $query->result();
    }

    public function restoreStudent($id)
    {
        $this->db->where('id', $id);
        $is_delete = array(
            'is_deleted' => 0
        );
        return $this->db->update('students', $is_delete);
    }
}
