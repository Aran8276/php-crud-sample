<?php

class database
{
    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $db = "smkn6";
    var $connect = "";

    function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    function index()
    {
        $res = array();
        $data = mysqli_query($this->connect, "SELECT * FROM siswa");
        while ($row = mysqli_fetch_array($data)) {
            $res[] = $row;
        }
        return $res;
    }

    function store($nama, $kelas, $hobi)
    {
        mysqli_query($this->connect, "INSERT INTO siswa values('', '$nama', '$kelas', '$hobi')");
    }

    function update($nis)
    {
        $data = mysqli_query($this->connect, "SELECT * FROM siswa WHERE nis = '$nis'");
        while ($row = mysqli_fetch_array($data)) {
            $res[] = $row;
        }
        return $res;
    }

    function update_db($nis, $nama, $kelas, $hobi)
    {
        mysqli_query($this->connect, "UPDATE siswa SET nama = '$nama', kelas = '$kelas', hobi = '$hobi' WHERE nis = '$nis'");
    }

    function delete($nis)
    {
        mysqli_query($this->connect, "DELETE FROM siswa WHERE nis = '$nis'");
    }
}
