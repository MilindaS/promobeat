<?php
error_reporting(0);
session_start();

$session_data = $this->session->userdata('logged_in');
$multiple_image_array = array();
$path = "public/uploads/temp/";
$counter = 1;

$session_id='1'; //$session id
define ("MAX_SIZE","9000"); 

function getExtension($str)
{
    $i = strrpos($str,".");
    if (!$i) { return ""; }
    $l = strlen($str) - $i;
    $ext = substr($str,$i+1,$l);
    return $ext;
}


$valid_formats = array("jpg", "png", "gif", "bmp","pdf");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
	
    $uploaddir = "public/uploads/temp/"; //a directory inside
    foreach ($_FILES['photos']['name'] as $name => $value){
	
        $filename = stripslashes($_FILES['photos']['name'][$name]);
        $filename = preg_replace("/[^A-Z0-9._-]/i", "_", $filename);
        $size=filesize($_FILES['photos']['tmp_name'][$name]);
        //get the extension of the file in a lower case format
        $ext = getExtension($filename);
        $ext = strtolower($ext);
     	
        if(in_array($ext,$valid_formats)){
	    	if ($size < (MAX_SIZE*1024)){
				
				$image_name=time().$filename;
				// echo "<img src='".$uploaddir.$image_name."' class='imgList'>";
				$newname=$uploaddir.$image_name;
	           
	        	if(move_uploaded_file($_FILES['photos']['tmp_name'][$name], $newname)) {
		       		$time=time();
		       		echo "<span>".$image_name."</span><input type='hidden' class='form-control' value=".$image_name." name='file' />";
		       	}else{
		        	echo '<span class="imgList">You have exceeded the size limit! so moving unsuccessful! </span>';
	            }

	    	}else{
				echo '<span class="imgList">You have exceeded the size limit!</span>';
	       	}
       
        }else{ 
	    	echo '<span class="imgList">Unknown extension!</span>';
        }
        $counter ++;
    }
}

?>