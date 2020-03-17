<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 8/18/2019
 * Time: 6:35 PM
 */

namespace App\Config;


class Database
{
    private $db_name = 'cockbook';
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    public $conn;


    public  function getConnection(){

             $this->conn = null;

             try{

                 $this->conn = new PDO('mysql:host='.$this->host, 'dbname='.$this->db_name, $this->username, $this->password);

             } catch (PDOException $exception){

                 echo 'Connection Error'. $exception->getMessage();
             }




    }

}