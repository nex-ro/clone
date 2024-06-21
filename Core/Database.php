<?php 
class Database{
    private $servername = "localhost"; // ganti dengan nama server MYSQL 
    private $username = "root"; // ganti dengan username MYSQL
    private $password = ""; // ganti dengan password MYSQL
    private $database = "kampus_1tid"; // ganti dengan nama database MYSQL
    private $conn;
    function __construct()
    {
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database);
    }
    public function execute($sql)
    {
        $result = mysqli_query($this->conn,$sql);
        $data = [];
        while ($row = mysqli_fetch_array($result)){
            $data[] = $row;
        }
        return $data;
    }

    public function delete($table,$where)
    {
        $status=false;
        $query = "DELETE FROM $table WHERE $where";
        //echo $query;
        $result = mysqli_query($this->conn, $query);
        if($result){
            //cek dulu nomor dari baris yang berubah
            $affectedRows = mysqli_affected_rows($this->conn);
            if ($affectedRows > 0){
                $status = true;
            }
        }
        else {
            $status = false;
        }
        return $status;
    }
    public function insert($table,$col,$values){
        $status=false;
        //print_r($col);
        $f="";
        foreach ($col as $val){
            $f .=$val.',';
        }
        $f = rtrim($f,",");
        $v = "";
        foreach ($values as $val){
            $v .= "'".$val."',";
        }
        $v = rtrim($v,",");
        //echo $v;
        $query = "INSERT INTO $table ($f) VALUES ($v)";
        // echo $query;
        $result = mysqli_query($this->conn,$query);

        if ($result){
            //cek jumlah row yang berubah
            $affectedRows = mysqli_affected_rows($this->conn);
            if ($affectedRows > 0){
                $status = true;
            }
        } else {
            $status = false;
        }
        return $status;
    }
    public function getConnection(){
        return $this->conn;
    }
}
?>