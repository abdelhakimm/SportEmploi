<?php
echo "avant";
include "../Controller/ControllerJob.php";
echo "dans le controller";

if(isset($_GET["action"])){
    echo "dans le if get action";
    if($_GET["action"] == "all"){
        echo "dans le if all";
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