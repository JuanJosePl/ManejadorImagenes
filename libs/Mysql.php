<?php

/**
 * 
 */
class Mysql
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $port = "3306";
    private $db = "imagenes";
    private $conn;
    function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db);
        if (mysqli_connect_error()) {
            print("Error en la conexion: %d" . mysqli_connect_error());
            exit();
        } else {
            print "Conexion exitosa";
        }
    }
    public function query($sql)
    {
        $data = array();
        if ($sql != "") {
            if ($r = mysqli_query($this->conn, $sql)) {
                $data = mysqli_fetch_assoc($r);
            }
        }
        return $data;
    }
    public function querySelect($sql)
    {
        $data = array();
        if ($sql != "") {
            if ($r = mysqli_query($this->conn, $sql)) {
                while ($row = mysqli_fetch_assoc($r)) {
                    array_push($data, $row);
                }
            }
        }
        return $data;
    }

    public function queryNoSelect($sql)
    {
        $r = false;
        if ($sql != "") {
            $r = mysqli_query($this->conn, $sql);
        }

        return $r;
    }

    public function recuperarId()
    {
        return mysqli_insert_id($this->conn);
    }

    public function close()
    {
        mysqli_close($this->conn);
    }
}
