<?php
include_once("php/crud.php");
session_start();
$crud=new crud();


$user_id=$_SESSION['user_id'];
$query_userdetails=($crud->getData("SELECT * FROM user_details WHERE user_id='$user_id'"));
if(!empty($query_userdetails)){
  $firstname=$query_userdetails[0]['firstname'];
  $lastname=$query_userdetails[0]['lastname'];
  $fullname=$firstname." ".$lastname;

  $election_id=$query_userdetails[0]['election_id'];
  $query_electiondetails=($crud->getData("SELECT * FROM election_details WHERE election_id='$election_id'"));
  if(!empty($query_electiondetails)){
    $election_name=$query_electiondetails[0]['election_name'];
    $institute=$query_electiondetails[0]['institute'];
  }

  // $user_id = new UserID($userid_value);
  // $user_controller = new UserController($user_id);
  // $index_view = new IndexView($user_controller, $user_id);
  
  // $response = $index_view->setHomeDetails();
  // $fullname = $response->getFullName();
  // $election_name = $response->getElectionName();
  // $institute = $response->getInstitute();
}
?>