<?php 
    include "Controllers/Mahasiswa.php";
    // $mhs = new Mahasiswa();
    // $mhs ->index();
    // $mhs ->index();
    if(!isset($_GET['page'])){
        $mhs = new Mahasiswa();
        $mhs ->index();
    }else if(isset($_GET['page']) && $_GET['page'] == "hapus"){
        $mhs = new Mahasiswa();
        $mhs ->hapus();
    }else if(isset($_GET['page']) && $_GET['page'] == "tambahData"){
        $mhs = new Mahasiswa();
        $mhs ->ViewTambahData();
    }else if(isset($_GET['page']) && $_GET['page'] == "insertDataMahasiswa"){
        $mhs = new Mahasiswa();
        $data = [];
        $data['nim'] = $_POST['nim'];
        $data['nama'] = $_POST['nama'];
        $data['prodi'] = $_POST['prodi'];
        $mhs->tambahData($data);
    }

    // }else if($_GET['page'] == 'about'){
    //     $mhs = new Mahasiswa();
        // $mhs ->about();
?>