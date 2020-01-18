<?php
  session_start();

  // include "session.php";
  include "function.php";
  // include "query.class.php";
  
  $connect = new MainFunction();
  // $master = new RskQuery();

  // $logged_id = isset($_SESSION['logistics_id']) ? $_SESSION['logistics_id'] : 0;
  $page = basename($_SERVER['REQUEST_URI']);
	$pg = isset($_GET['pg']) ? $_GET['pg'] : "";
	$sub = isset($_GET['sub']) ? $_GET['sub'] : "";
	$tbl = isset($_GET['tbl']) ? $_GET['tbl'] : "";
	$id = isset($_GET['id']) ? $_GET['id'] : "";
  $ref = isset($_GET['ref']) ? $_GET['ref'] : "";
  $doc_type = isset($_GET['doc_type']) ? $_GET['doc_type'] : "";
  $search = isset($_GET['number']) ? $_GET['number'] : "";
  
  // $logged = $connect->activeUser($logged_id);
  // $logged_name = $logged['logged_name'];
  // $logged_department = $logged['department'];
  $uriSegments = parse_url($_SERVER['REQUEST_URI']);
    // echo $uriSegments["query"];
    if(!empty($uriSegments["query"])){
      switch($uriSegments["query"]){
        case(""):
          $data_type = 'customer';
        break;
        default:
          $data_type = "";
      }
    } else {
      $data_type = "";
    }
?>