<?php 
    include "Controllers/Mahasiswa.php";
    include "Core/Notifikasi.php";
    require_once "Core/configGoogle.php";

    if(!session_id()){
        session_start();
    }
    if(!isset($_GET['page'])){
        print_r($client->createAuthUrl());

        $mhs = new Mahasiswa();
        $mhs ->index($client);

    }else if(isset($_GET['page']) && $_GET['page'] == "handleLogin"){
        $mhs = new Mahasiswa();
        $mhs->handleLogin($client);
    }
    else if(isset($_GET['page']) && $_GET['page'] == "dashboard"){
        $mhs = new Mahasiswa();
        $mhs ->dashboard();
    }
    else if(isset($_GET['page']) && $_GET['page'] == "stats"){
        $mhs = new Mahasiswa();
        $mhs ->stats();
    }
    else if(isset($_GET['page']) && $_GET['page'] == "hapus"){
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
    else if(isset($_GET['page']) && $_GET['page'] == "edit"){
        $mhs = new Mahasiswa();
        $data=$mhs->editData();
    }else if(isset($_GET['page']) && $_GET['page'] == "editDataMhs"){
        $mhs = new Mahasiswa();
        $data = [];
        $data['nim'] = $_POST['nim'];
        $data['nama'] = $_POST['nama'];
        $data['prodi'] = $_POST['prodi'];
        $oldNim=$_POST['oldNIM'];
        $mhs->updateData($data,$oldNim);
    }

    // }else if($_GET['page'] == 'about'){
    //     $mhs = new Mahasiswa();
        // $mhs ->about();
?>