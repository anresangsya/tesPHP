<?php

require_once('dbConnect.php');

if($_SERVER['REQUEST_METHOD']=='POST') {

  $id = $_POST['id'];

  $sql = "SELECT * FROM peserta WHERE id='$id'";
 
  $check = mysqli_fetch_array(mysqli_query($con,$sql));
 
    if(isset($check)){
      //update
      $sql = "UPDATE peserta SET status='1' WHERE id='$id'";
      if(mysqli_query($con,$sql)){
        echo $id . ' successfully updated';
      }else{
        echo 'oops! Please try again!';
      }

    }else{ 
      echo 'ID not found';
    }
    mysqli_close($con);
}else{
  echo "error";
}