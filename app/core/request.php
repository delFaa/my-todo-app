<?php
// require necessite que le fichier soit inclu. s'il ne l'est pas le reste du code ne va pas s'exécuter
require dirname(_FILE_).DIRECTORY_SEPARATOR.'config.php';
require dirname(_FILE_).DIRECTORY_SEPERATOR.'connexion.php';

  // $response = $db->query('SELECT task_title FROM task');
  //
  // while ($data = $response->fetch())
  // {
  //   echo ($data['task_title']);
  // }

  // $request = $db->prepare('INSERT INTO task (task_title, task_description, task_start_timestamp, task_end_timestamp) VALUES(?,?,?,?)');
  // $request->execute(array($_POST['task_title'], $_POST['task_description'], $_POST['task_start_timestamp'], $_POST['task_end_timestamp']));

  //                                      /// get All elements from DB don't need to protect because don't give it parameters which can be modified in inspector
  if( isset( $_POST['getAllTask'] ) ){
      $q = "SELECT * FROM task";
      $q = $db->query($q);
      $q->execute();
      $result = $q->fetchAll();
      // var_dump($result);
      echo json_encode($result);
  }
//                                        /// get one element from DB where id is defined
  if( isset( $_POST['getTask'] ) ){
    $id = $_POST['getTask'];
    $q = "SELECT * FROM task WHERE task_id = :id";
    $sth = $db->prepare($q);
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->execute();

    $result = $sth->fetch();
    //fetch if on element, fetchall if multiple elements

    // var_dump($result);
    echo json_encode($result);
  }


//   //                                        /// add one element to the DB
if( isset( $_POST['insertTask'] ) ){

      // i need to convert my JSON to ArrayAccess
      // I recover my vars
     $title = $_POST['task_title'];
     $description = $_POST['task_description'];
     $startt = $_POST['task_start_timestamp'];
     $endt = $_POST['task_endt_timestamp'];

     $q = "INSERT INTO task (task_title, task_description, task_start_timestamp, task_end_timestamp)
            VALUES (:title, :description, :startt, :endt')" ;
     $q = $db->prepare($q);

     $q->bindParam(":title",$title, PDO::PARAM_STR);
     $q->bindParam(":description",$description, PDO::PARAM_STR);
     $q->bindParam(":startt",$startt, PDO::PARAM_STR);
     $q->bindParam(":endt",$endt, PDO::PARAM_STR);

     $q->execute();
     // $stm->bindParam(':id', $id, PDO::PARAM_INT, ':title', $title, PDO::PARAM_STR, ':description', $description, PDO::PARAM_STR, ':startt', $startt, PDO::PARAM_STR, ':endt', $endt, PDO::PARAM_STR);

     $result = $q->fetchAll(PDO::FETCH_ASSOC);

     if ($q->rowCount() > 0){
       echo"inserted"; // echo true else false when my vars will be properly encoded

    //  echo json_encode($result);
   }
 }

 if (isset ($_POST['updateTask'])){

 }

 if (isset ($_POST['selectTask'])){
   $task = $_POST['selectTask'];

   if($task == "*"){
     //select all task
   }else{
     //select by id
   }
 }

 if( isset ($_POST['deleteTask']) ){
   $task = $_POST['deleteTask'];
   if{is_array($task)){

   }
    else{

    }
 }

//   if( isset( $_POST['insertTask'] ) ){
//     if( isset( $_POST['task_title'] ) && isset( $_POST['task_description'] ) ){
//       $q = "INSERT INTO task (task_title, task_description)
//       WHERE task_title = :title, task_description = :description, task_start_timestamp= :startt, task_end_timestamp= :endt ";
//       $stm = $db->prepare($q);
//       $stm->bindParam($_POST['task_title'])
//     }
//   }
// <!-- <form action="" method="post">
//   <input type="text" name="task_title">
//   <textarea name="task_description" rows="8" cols="80"></textarea>
//   <input type="submit" name="insertTask" value="Insert">
// </form> -->
// //
