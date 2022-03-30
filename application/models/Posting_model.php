<?php
    class Posting_model extends CI_Model
    {
        function tampil_posting(){
            $query = $this->db->query("SELECT * FROM posting ORDER BY tgl_rilis DESC LIMIT 3");
            // return $this->db->get('posting');
            return $query;
        }
    }
    
?>