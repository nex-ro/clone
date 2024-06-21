<?php 
    include 'Core/Database.php';
    class Mahasiswa_model extends Database{
        private $db;
        function __construct(){
            $this->db = new Database();
        }
        function getAllData(){
            $query = "SELECT * FROM mahasiswa ORDER BY created DESC";
            $data = $this->db->execute($query);
            return $data;
        }
        function hapusData($id){
            //echo $query;
            $where = 'nim='.$id;
            $status = $this->db->delete('mahasiswa', $where);
            if ($status){
                echo "<script>alert ('Data Berhasil Dihapus!');
                window.location.href = 'index.php';</script>";
            }else{
                echo "<script>alert ('Data Gagal Dihapus!');</script>";
            }
        }
        function tambahData($data){
            $col = ['nim', 'nama', 'prodi'];
            $status = $this->db->insert('mahasiswa', $col, $data);
            if ($status){
                echo "<script>alert ('Data Berhasil Ditambahkan!');
                window.location.href = 'index.php';</script>";
            }else{
                echo "<script>alert ('Data Gagal Ditambahkan!');</script>";
            }
        }
    }
?>