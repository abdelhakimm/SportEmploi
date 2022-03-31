<?php

include "../Controller/ControllerJob.php";


if(isset($_GET["action"])){
    
    if($_GET["action"] == "all"){
        
        ControllerJob::getAllJob();

    }elseif($_GET["action"] == "id"){
        ControllerJob::getJobById($_GET["id"]);

    }elseif($_GET["action"] == "update"){
        ControllerJob::formUpdateJob($_GET["id"]);//send to form

    }elseif($_GET["action"] == "delete"){
        ControllerJob::deleteJobById($_GET["id"]);

    }elseif($_GET["action"] == "create"){
        ControllerJob::formJob();
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["id"])){

        ControllerJob::updateJob($_POST);//record form
     

    }else{

        ControllerJob::createJob($_POST);
    }
}

?>