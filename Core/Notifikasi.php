
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
class Notifikasi{
    public static function setNotif($icon,$title ,$text){
        $_SESSION['pesan']=[
            'icon'=>$icon,
            'title'=>$title,
            'text'=>$text,

        ];
    }
    public static function tampilNotif(){
        if(isset($_SESSION['pesan'])){
            echo '<script>
            Swal.fire({
                icon: "'.$_SESSION['pesan']['icon'].'",
                title: "'.$_SESSION['pesan']['title'].'",
                text: "'.$_SESSION['pesan']['text'].'",
              });
            </script>';
            unset($_SESSION['pesan']);
        }
    }
   
}


?>

</body>
</html>
