<?php
// require necessite que le fichier soit inclu. s'il ne l'est pas le reste du code ne va pas s'exécuter
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'config.php';
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'connexion.php';

//  /// get All elements from DB don't need to protect because don't give it parameters which can be modified in inspector
if( isset( $_POST['getAllTask'] ) ){
    $q = "SELECT * FROM task";
    $q = $db->query($q);
    $q->execute();
    $result = $q->fetchAll(PDO::FETCH_ASSOC);
    //debug($result);
    echo json_encode($result);
}

//   /// get one element from DB where id is defined
if( isset( $_POST['getTask'] ) ){
  // $id = $_POST['getTask'];
  $id = $_POST['getTask'];
  $q = "SELECT * FROM task WHERE task_id = :id";
  $sth = $db->prepare($q);
  $sth->bindParam(':id', $id, PDO::PARAM_INT);
  $sth->execute();
  $result = $sth->fetch(PDO::FETCH_ASSOC);
  // fetch if on element, fetchall if multiple elements
  // debug($result);
  echo json_encode($result);
}
//    /// add one element to the DB
if( isset( $_POST['insertTask'] ) ){
     $title = $_POST['task_title'];
     $description = $_POST['task_description'];
     $startt = $_POST['task_start_timestamp'];
     $endt = $_POST['task_end_timestamp'];

     $q = "INSERT INTO task (task_title, task_description, task_start_timestamp, task_end_timestamp) VALUES (:title, :description, :startt, :endt)";
     $q = $db->prepare($q);

     $q->bindParam(":title",$title, PDO::PARAM_STR);
     $q->bindParam(":description",$description, PDO::PARAM_STR);
     $q->bindParam(":startt",$startt, PDO::PARAM_STR);
     $q->bindParam(":endt",$endt, PDO::PARAM_STR);
     $q->execute();

     if ($q->rowCount() > 0){
        echo "ça marche ma poule!";
       //header("Location: ../index.php"); // echo true else false when my vars will be properly encoded
   }else{
       echo "please fill in all fields";
   }
    //  echo json_encode($result);

 }

// Update task that is allready in DB

if (isset ($_POST['updateTask'])){
    // $id = 2;
    $title = $_POST['task_title'];
    $description = $_POST['task_description'];
    $startt = $_POST['task_start_timestamp'];
    $endt = $_POST['task_end_timestamp'];
    $id = $_POST['lIDaCHANGER'];

    $q = "UPDATE task SET task_title = :title, task_description = :description, task_start_timestamp = :startt, task_end_timestamp = :endt WHERE task_id=:id";
    // Prepare statement
    //try catch used to know if there are errors. they wouldn't show if this wasnt used.

    try {
        $stm = $db->prepare($q);
        $stm->bindParam(":title",$title, PDO::PARAM_STR);
        $stm->bindParam(":description",$description, PDO::PARAM_STR);
        $stm->bindParam(":startt",$startt, PDO::PARAM_STR);
        $stm->bindParam(":endt",$endt, PDO::PARAM_STR);
        $stm->bindParam(":id",$id, PDO::PARAM_INT);
        // execute the query
        $stm->execute();
        echo $stm->rowCount() . " records UPDATED successfully";
    } catch (Exception $e) {
        echo 'Exception -> ';
        var_dump($e->getMessage());
    }


}



if( isset ($_POST['deleteTask']) ){
    $task = $_POST['deleteTask'];
    // $id = 2;
    $title = $_POST['task_title'];
    $description = $_POST['task_description'];
    $startt = $_POST['task_start_timestamp'];
    $endt = $_POST['task_end_timestamp'];

    $q = "DELETE task WHERE task_title = :title, task_description = :description, task_start_timestamp = :startt, task_end_timestamp = :endt WHERE task_id=:id";
    // Prepare statement
    //try catch used to know if there are errors. they wouldn't show if this wasnt used.

    try {
        $stm = $db->prepare($q);
        $stm->bindParam(":title",$title, PDO::PARAM_STR);
        $stm->bindParam(":description",$description, PDO::PARAM_STR);
        $stm->bindParam(":startt",$startt, PDO::PARAM_STR);
        $stm->bindParam(":endt",$endt, PDO::PARAM_STR);
        $stm->bindParam(":id",$id, PDO::PARAM_INT);
        // execute the query
        $stm->execute();
        echo $stm->rowCount() . " records UPDATED successfully";
    } catch (Exception $e) {
        echo 'Exception -> ';
        var_dump($e->getMessage());
    }

}

?>
