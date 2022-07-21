<?php
include_once 'config/db.php';
if(isset($_POST['submit']))
{    
     $date = $_POST['date'];
     $problem = $_POST['problem'];
     $incident = $_POST['incident'];
     $team = $_POST['team'];
     $mttd = $_POST['mttd'];
     $mttr = $_POST['mttr'];
     $category = $_POST['category'];
     $description = $_POST['description'];
     $mttrexpanded = $_POST['mttrexpanded'];
     $mtis = $_POST['mtis'];
     $mtjc = $_POST['mtjc'];
     $mtii = $_POST['mtii'];
     $mtfi = $_POST['mtfi'];
     $inc_url = $_POST['inc_url'];
     $prb_url = $_POST['prb_url'];
     $status = $_POST['status'];

     $sql = "INSERT INTO outage (date,problem,incident,team,mttd,mttr,category,description,mttrexpanded,mtis,mtjc,mtii,mtfi,inc_url,prb_url,status)
     VALUES ('$date','$problem','$incident','$team','$mttd','$mttr','$category','$description','$mttrexpanded','$mtis','$mtjc','$mtii','$mtfi','$inc_url','$prb_url','$status')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
