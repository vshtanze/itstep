<?php
/**
 * Created by PhpStorm.
 * User: Apsent86
 * Date: 05.01.17
 * Time: 20:14
 */

function clearId($id){
    $var=str_replace("hot",'',$id);
    return $var;
}

 $idNews=clearId($_GET["id"]);


echo($idNews);