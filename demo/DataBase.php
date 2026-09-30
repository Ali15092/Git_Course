<?php 

class DataBase{
public $connection ;
public $statement;
public function __construct($config,$userName ='root',$userPassword='@li2005'){

$dsn ="mysql:".http_build_query($config,'',';');
$this->connection = new PDO($dsn,$userName,$userPassword,[
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC]);
}



function query ($query,$param=[]){
$this ->statement =$this->connection->prepare($query);
$this -> statement ->execute($param);
return $this;
}

function find(){
return $this ->statement->fetchALL();
}

function findOrAbort(){
$result = $this->find();    
if (! $result)
    abort();

return $result;
}


}