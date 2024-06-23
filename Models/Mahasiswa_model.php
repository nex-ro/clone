<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
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
                Notifikasi::setNotif('success',"berhasil","data berhasil ditambahkan");
                echo "<script> 
                window.location.href = 'index.php?page=dashboard';</script>";
            }else{
                echo "<script>alert ('Data Gagal Dihapus!');</script>";
            }
        }
        function tambahData($data){
            $col = ['nim', 'nama', 'prodi'];
            $status = $this->db->insert('mahasiswa', $col, $data);
            if ($status){
                Notifikasi::setNotif('success',"berhasil","data berhasil ditambahkan");
                echo "<script>
                window.location.href = 'index.php?page=dashboard';</script>";
            }else{
                Notifikasi::setNotif('error',"OOps..","data gagal ditambahkan");
                echo "<script>alert ('Data Gagal Ditambahkan!');</script>";
            }
        }
        function editData($nim){
            $where='nim='.$nim;
            $data=$this->db->edit('mahasiswa', $where);
            return $data;
        }
        function updateData($data, $oldNIM) {
           $col="nim='".$data['nim']."',nama='".$data['nama']."',prodi='".$data['prodi']."'";
            $status = $this->db->updateedit('mahasiswa',$col, $oldNIM);
            if ($status){
                echo "<script>alert ('Data Berhasil Ditambahkan!'); window.location.href='index.php?page=dashboard';</script>";
            }else{
            echo "<script>alert ('Data Gagal Ditambahkan!');window.location.href='index.php?page=dashboard';</script>";
            }
        }
        function handleLogin($client){
            if (isset($_GET['code'])) {
                $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
                $client->setAccessToken($token['access_token']);
              
                // get profile info
                $google_oauth = new Google_Service_Oauth2($client);
                $google_account_info = $google_oauth->userinfo->get();
                print_r($google_account_info);
              // simpan data 
              echo "<script>window.location.href='index.php?page=dashboard';</script>";
              }
              else{
                echo "<script>window.location.href='index.php;</script>";
              }
        }
    }
?>
</body>
</html>
