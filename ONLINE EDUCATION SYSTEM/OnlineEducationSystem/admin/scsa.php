<?php

                if (!empty($_FILES["myFile"]["name"])) {
                    $target_location = "C:/xampp/htdocs/OnlineEducationSystem/upload/" . basename($_FILES["myFile"]["name"]);

                    if (!(move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_location)))
                        echo "Error: " . $_FILES["myFile"]["error"] . "<br>";


                    // add form data processing code here
                    //echo  '<strong>Verification successful.</strong>';
//        error_reporting(0);
                    // get database connection
                    include_once 'database.php';
                    // include_once './folderupload.php';
                    $database = new Database();
                    $db = $database->getConnection();
                    // instantiate user object
                    //echo "sdasd".$_COOKIE["dis"];

                    include_once 'Upload.php';
                    $user = new Upload($db);
                    //echo "asdasda".$_POST['myFile'];
                    // set user property values
                    $user->subject = 'csa';
                    $user->filename = $_FILES["myFile"]["name"];
                    $user->description = $_POST['description'];

                    // create the user

                    if ($user->insertrec()) {
                        /* $user_arr=array(
                          "status" => true,
                          "message" => "Successfully inserted!",
                          "id" => $user->id,
                          "username" => $user->username
                          ); */
                        echo '<center><p style="color:green;">Successfully Uploaded!</p></center>';
                    } else {
                        /* $user_arr=array(
                          "status" => false,
                          "message" => "Username already exists!"
                          ); */
                        echo '<center><p style="color:red;">Failed Uploading!</p></center>';
                    }
                }
header('location:acsa.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>