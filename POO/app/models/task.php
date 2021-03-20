<?php

require_once('data_provider.php');

class Task extends DataProvider
{
    public function addTask($content,$description){

        $database = $this->Connect();

        if($database == null) {
            return;
        }

        $sql = "insert into tasks (content,description) values (:content,:description)";

        $smt = $database->prepare($sql);

        $smt->execute([
            ":content" => $content,
            ":description" => $description
        ]);
        
        $smt = null;
        $database = null;
    }

    public function getAllTasks(){

        $database = $this->Connect();

        if($database == null) {
            return;
        }

        $query = $database->query('select * from tasks');

        $data = $query -> fetchAll(PDO::FETCH_OBJ);

        $query = null;
        $database = null;

        return $data;
    }

    public function getTaskByID($id){

        $database = $this->Connect();

        if($database == null) {
            return;
        }

        $sql = "select * from tasks where id = :id";

        $smt = $database->prepare($sql);

        $smt->execute([
            ":id" => $id
        ]);
        

        $data = $smt->fetch();

        $smt = null;
        $database = null; 

        if(!$data) echo "Data Not Found !";
        
        return $data[0];

    }

    public function searchTask($ser){
       
        $database = $this->Connect();

        if($database == null) {
            return;
        }

        $sql = "select * from tasks where Content like :ser or Description like :ser";

        $smt = $database->prepare($sql);

        $smt->execute([
            ":ser" => '%'.$ser."%"
        ]);
        

        $data = $smt->fetchAll(PDO::FETCH_OBJ);

        $smt = null;
        $database = null; 

        if(!$data) return [];

        return $data;
    }

    public function updateTask($id,$content,$description){

        $database = $this->Connect();

        if($database == null) {
            return;
        }

        $sql = "update tasks set content = :con, description = :desc where id = :id";

        $smt = $database->prepare($sql);

        $smt->execute([
            ":con" => $content,
            ":desc" => $description,
            ":id" => $id
        ]);
        
        $smt = null;
        $database = null;
    }

    public function deleteTask($id){

        $database = $this->Connect();

        if($database == null) {
            return;
        }

        $sql = "delete from tasks where id = :id";

        $smt = $database->prepare($sql);

        $smt->execute([
            ":id" => $id
        ]);
        
        $smt = null;
        $database = null;
    }
}
