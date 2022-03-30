<?php
    class Admin_model extends CI_Model
    {
        function lihat_posting(){
            $query = $this->db->query("SELECT * FROM posting ORDER BY tgl_rilis DESC");
            return $query;
        }

        function insert_post($data, $table){
            $this->db->insert($table, $data);
            return;
        }

        function edit_posting($where, $table){
            return $this->db->get_where($table, $where);
        }

        function update_posting($where, $data, $table){
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        function hapus_posting($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        function insert_contact($data, $table){
            $this->db->insert($table, $data);
            return;
        }
        function lihat_contact(){
            $query = $this->db->query("SELECT * FROM kritik_saran ORDER BY id_contact DESC");
            return $query;
        }
        function jadwal_dokter(){
            $query = $this->db->query("SELECT * FROM jadwal_dokter ORDER BY id_dokter DESC");
            return $query;
        }
    }
    
?>