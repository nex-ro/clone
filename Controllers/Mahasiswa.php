<?php 
include_once 'Models/Mahasiswa_model.php';
class Mahasiswa {
    var $db;
    function __construct(){
        $this->db = new Mahasiswa_model () ;
    }
    function index(){
       $data = $this->db->getAllData();
       //print_r($data);
       require_once 'View/header.php';
       require_once 'View/navbar.php';
       require_once 'View/Mahasiswa/index.php';
       require_once 'View/footer.php';
    }
    // function about(){
    //     require_once 'Views/header.php';
    //     require_once 'Views/navBar.php';
    //     require_once 'Views/Mahasiswa/index.php';
    //     require_once 'Views/footer.php';
    // }
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
    function hapus(){
        $id = $_GET['id'];
        $this->db->hapusData($id);
    }
}
?>