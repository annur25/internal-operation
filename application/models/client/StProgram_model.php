<?php
class StProgram_model extends CI_model
{

    public function showAll() {
        $this->db->select('*');
        $this->db->join('tbl_students', 'tbl_students.st_num=tbl_stprog.st_num');
        $this->db->join('tbl_prog', 'tbl_prog.prog_id=tbl_stprog.prog_id');
        $this->db->join('tbl_lead', 'tbl_lead.lead_id=tbl_stprog.lead_id');
        $this->db->order_by('tbl_stprog.stprog_statusprogdate', 'DESC');
        return $this->db->get('tbl_stprog')->result_array();
    }

    public function showId($id) {
        $this->db->select('*');
        $this->db->where('stprog_id', $id); 
        $this->db->join('tbl_students', 'tbl_students.st_num=tbl_stprog.st_num');
        $this->db->join('tbl_prog', 'tbl_prog.prog_id=tbl_stprog.prog_id');
        $this->db->join('tbl_lead', 'tbl_lead.lead_id=tbl_stprog.lead_id');
        return $this->db->get('tbl_stprog')->row_array();
    }
    
    public function showStProg($id){
        $this->db->select('*');
        $this->db->where('tbl_stprog.st_num', $id); 
        $this->db->join('tbl_prog', 'tbl_prog.prog_id=tbl_stprog.prog_id');
        $this->db->join('tbl_lead', 'tbl_lead.lead_id=tbl_stprog.lead_id');
        return $this->db->get('tbl_stprog')->result_array();
    }

    public function showStatusProgram($id, $n) {
        $this->db->select('*');
        $this->db->where('st_num', $id); 
        $this->db->where('stprog_status', $n); 
        return $this->db->get('tbl_stprog')->result_array();
    }

    public function showStatusRunning($id, $n) {
        $this->db->select('*');
        $this->db->where('st_num', $id); 
        $this->db->where('stprog_runningstatus', $n); 
        return $this->db->get('tbl_stprog')->result_array();
    }

    public function save($data, $datas, $id)
    {
        $this->db->insert('tbl_stprog', $data);

        $this->db->set($datas);
        $this->db->where('st_num', $id);
        $this->db->update('tbl_students');
    }

    public function updateStudentsStatus($data, $id) {
        $this->db->set($data);
        $this->db->where('st_num', $id);
        $this->db->update('tbl_students');
    }

    public function update($data, $id) {
        $this->db->set($data);
        $this->db->where('stprog_id', $id);
        $this->db->update('tbl_stprog');
    }

    public function showStudentsMentor($id)
    {
        $this->db->select('*');
        $this->db->where('stprog_id', $id);
        return $this->db->get('tbl_stmentor')->row_array();
    }

    public function saveStudentsMentor($data)
    {
        $this->db->insert('tbl_stmentor', $data); 
    }

    public function updateStudentsMentor($data, $id)
    {
        $this->db->set($data);
        $this->db->where('stmentor_id', $id);
        $this->db->update('tbl_stmentor');
    }
    
    public function delete($id) {
        $this->db->where('stprog_id', $id);
        $this->db->delete('tbl_stprog'); 
        
        $this->db->where('stprog_id', $id);
        $this->db->delete('tbl_stmentor');
    }

    public function studentProgStatus($n, $d) {
        $this->db->select('*');
        $this->db->where('stprog_status', $n);
        $this->db->where("tbl_stprog.stprog_statusprogdate >=", $d);
        return $this->db->get('tbl_stprog')->result_array();
    }

    public function stprog_status($n, $start, $end) {
        $this->db->select('*');
        $this->db->where('stprog_status', $n);
        $this->db->where("tbl_stprog.stprog_statusprogdate >=", $start);
        $this->db->where("tbl_stprog.stprog_statusprogdate <=", $end);
        return $this->db->get('tbl_stprog')->result_array();
    }

    public function studentProgramLead($d) {
        $this->db->select("count(tbl_stprog.stprog_id), tbl_lead.lead_name");
        // $this->db->where('tbl_stprog.stprog_status', $n);
        $this->db->where("tbl_stprog.stprog_status <=", 2);
        $this->db->where("tbl_stprog.stprog_statusprogdate >=", $d);
        $this->db->group_by("tbl_stprog.lead_id");
        $this->db->join("tbl_lead","tbl_lead.lead_id=tbl_stprog.lead_id");
        return $this->db->get('tbl_stprog')->result_array();
    }

    public function stprog_lead($n, $start, $end) {
        $this->db->select("count(tbl_stprog.stprog_id) as tot, tbl_lead.lead_name");
        $this->db->where("tbl_stprog.stprog_status =", $n);
        $this->db->where("tbl_stprog.stprog_statusprogdate >=", $start);
        $this->db->where("tbl_stprog.stprog_statusprogdate <=", $end);
        $this->db->group_by("tbl_stprog.lead_id");
        $this->db->join("tbl_lead","tbl_lead.lead_id=tbl_stprog.lead_id");
        return $this->db->get('tbl_stprog')->result_array();
    }

    public function studentProgramProg($d) {
        $this->db->select("count(tbl_stprog.stprog_id), tbl_prog.prog_program");
        $this->db->where("tbl_stprog.stprog_status <=", 2);
        $this->db->where("tbl_stprog.stprog_statusprogdate >=", $d);
        $this->db->group_by("tbl_prog.prog_program");
        $this->db->join("tbl_prog","tbl_prog.prog_id=tbl_stprog.prog_id");
        return $this->db->get('tbl_stprog')->result_array();
    }

    public function stprog_prog($n, $start, $end) {
        $this->db->select("count(tbl_stprog.stprog_id) as tot,tbl_prog.prog_id, tbl_prog.prog_program");
        $this->db->where("tbl_stprog.stprog_status =", $n);
        $this->db->where("tbl_stprog.stprog_statusprogdate >=", $start);
        $this->db->where("tbl_stprog.stprog_statusprogdate <=", $end);
        $this->db->group_by("tbl_prog.prog_program");
        $this->db->join("tbl_prog","tbl_prog.prog_id=tbl_stprog.prog_id");
        return $this->db->get('tbl_stprog')->result_array();
    }

    public function stprog_avg($start, $end) {
        $this->db->select("count(tbl_stprog.stprog_id) as tot,tbl_prog.prog_id, tbl_prog.prog_program, sum(tbl_stprog.stprog_firstdisdate) as f_date, sum(tbl_stprog.stprog_statusprogdate) as l_date");
        $this->db->where("tbl_stprog.stprog_status =", 1);
        $this->db->where("tbl_stprog.stprog_statusprogdate >=", $start);
        $this->db->where("tbl_stprog.stprog_statusprogdate <=", $end);
        $this->db->group_by("tbl_prog.prog_program");
        $this->db->join("tbl_prog","tbl_prog.prog_id=tbl_stprog.prog_id");
        return $this->db->get('tbl_stprog')->result_array();
    }

}