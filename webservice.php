<?php require("getDetails.class.php"); ?>
<?php error_reporting(error_reporting() & ~E_NOTICE); ?>
<?php
//this is the file that called by ajax code written in webservice.php & webservice2.php
/*
  ajax created in different different files because of easy readable for understand
 */
		if(isset($_GET['submit']))
		{
      		$obj = new getDetails();
		switch ($_GET['submit']) {
        case '1':
                  $code = $_GET['id']; //this course id is course short code which may be course id in ERP
                  $content_id = $obj->retrieveContentID($courseshortcode);
                  $quizasslistarray = $obj->quizorasslistOfContent($content_id);
                  echo json_encode($quizasslistarray);
          break;
        case '2':
                $qaid = $_GET['id2'];
                $content_two = $obj->getcontentTwo($qaid);
                echo json_encode($content_two);
          break;
        default:
                //sample error message -- easily editable
                $json_error_msg = array("id"=>"0","val"=>"ERROR");
                echo json_encode($json_error_msg);
          break;
      }
		}



?>
