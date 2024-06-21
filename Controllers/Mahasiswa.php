<?php 
include_once 'Models/Mahasiswa_model.php';
class Mahasiswa {
    var $db;
    function __construct(){
        $this->db = new Mahasiswa_model () ;
    }
    function index(){
        require_once 'View/login.php';
    }
    function dashboard(){
        $data = $this->db->getAllData();
        require_once 'View/header.php';
        require_once 'View/navbar.php';
        require_once 'View/Mahasiswa/index.php';
        require_once 'View/footer.php';
    }
    function ViewTambahData () {
        // $data = $this->db->getAllData();
        require_once 'View/header.php';
        require_once 'View/navbar.php';
        require_once 'View/Mahasiswa/tambahData.php';
        require_once 'View/footer.php';
    }
    function tambahData($data){
        $this->db->tambahData($data);
    }
    function stats(){
        require_once 'View/header.php';
        require_once 'View/navbar.php';
        // disini
        require_once 'View/footer.php';
    }
    function hapus(){
        $id = $_GET['id'];
        $this->db->hapusData($id);
    }

    function editData(){
        $nim=$_GET["nim"]; 
        $data=$this->db->editData($nim);
        require_once 'View/header.php';
        require_once 'View/navbar.php';
        require_once 'View/Mahasiswa/edit.php';
        require_once 'View/footer.php';
    }
    function updateData($data,$oldNim){
        $this->db->updateData($data,$oldNim);
    }
}
?>