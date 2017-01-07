<?php
/**
 * Created by PhpStorm.
 * User: Apsent86
 * Date: 06.01.17
 * Time: 19:40
 */
class MySqlRepo{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "NewsPortal";
    private  $conn;

    private   $sqlCategory="SELECT * FROM Category";
    private   $sqlNewsForCat="select * from News where Ns_Cat={0} order by  Ns_Data DESC";
    private   $sqlNewsHot="select * from News order by  Ns_Data DESC LIMIT 2";
    private  function getStrForCat($cat){
        return str_replace('{0}',$cat,$this->sqlNewsForCat);
    }

    public  function __constructor($servername,$username,$password,$dbname ){
        $this->servername=$servername;
        $this->username=$username;
        $this->password=$password;
        $this->dbname=$dbname;
    }
    private function connection(){
        $this->conn=mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
        if($this->conn)
            return true;
        else
            return mysqli_connect_error();
    }
    private function disconnect(){
        mysqli_close($this->conn);
    }
    public  function getCategory(){
        $this->connection();
        $var=array();
        $val= mysqli_query($this->conn,$this->sqlCategory)->fetch_all(MYSQLI_ASSOC);
        $var[]=$val;
        $this->disconnect();
        return $var[0];
    }

    public function getNews($cat){
        $this->connection();
        $var=array();
        $val= mysqli_query($this->conn,$this->getStrForCat($cat))->fetch_all(MYSQLI_ASSOC);
        $var[]=$val;
        $this->disconnect();
        return $var[0];
    }
    public function getHot(){
        $this->connection();
        $var=array();
        $val= mysqli_query($this->conn,$this->sqlNewsHot)->fetch_all(MYSQLI_ASSOC);
        $var[]=$val;
        $this->disconnect();
        return $var[0];
    }


}
 function getImg($news){
    $var='img/{0}.jpg';
    echo(str_replace("{0}",$news['Ns_Img'],$var)) ;
    }
 function getIdHot($news){
     $var='hot';
     $var2= $news['Ns_Id'];
     echo($var.$var2);
 }
function getIdCat($cat){
    $var='cat';
    $var2= $cat['Ct_Id'];
    echo($var.$var2);
}

$resurse=new MySqlRepo();

$hot=$resurse->getHot();






