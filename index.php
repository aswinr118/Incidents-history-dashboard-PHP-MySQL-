<!-- PHP code to establish connection with the localserver -->
<?php
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

include 'config/db.php';
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM outage ORDER BY date DESC";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<!-- CSS FOR STYLING THE PAGE -->


<!-- Scroll to top -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<! --body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
} -->

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

</style>
<!-- Scroll to top end -->

<style>
.myTable { 
  width: 100%;
  text-align: left;
  background-color: lemonchiffon;
  border-collapse: collapse; 
  }
.myTable th { 
  background-color: goldenrod;
  color: white; 
  }
.myTable td, 
.myTable th { 
  padding: 10px;
  border: 1px solid goldenrod;
  }

h1 {
            text-align: center;
            color: #000000;
            font-size: xx-large;
	}

th, td {
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
}


</style>

<style>
.collapsible {
  background-color: goldenrod;
  color: white;
  cursor: pointer;
  padding: 10px;
  width: 45%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 11px;
}

.active, .collapsible:hover {
  background-color: #C78023;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 8px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: lemonchiffon;
}

</style>



</head>

<body>

<!--Scroll -->
<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
<div style="background-color:white;padding:30px 30px 2500px"</div>
<!--Search top -->

	<section>


		<h1> COMMAND CENTER - Incidents History</h1>

		<!-- TABLE CONSTRUCTION -->
		<table class="myTable">
			<tr>
				<th align="center">INCIDENT DATE</th>
				<th align="center">INCIDENT TICKET</th>
				<th align="center">PROBLEM TICKET</th>
				<th align="center">STATUS</th>
				<th align="center">TEAM</th>
				<th align="center">MTTD</th>
				<th align="center">MTTR</th>
				<th align="center">CATEGORY</th>
				<th align="center">DESCRIPTION</th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
				?>

			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
			        <td align="center"><?php echo $rows['date'];?></td>
				
				<td align="center"><a href=<?php echo $rows['inc_url'];?>><?php echo $rows['incident'];?></a></td>
				<td align="center"><a href=<?php echo $rows['prb_url'];?>><?php echo $rows['problem'];?></a></td>
				
				<td align="center"><?php echo $rows['status'];?> </td>
				<td align="center"><?php echo $rows['team'];?></td>
				<td align="center"><?php echo $rows['mttd'];?></td>

				<td><button class="collapsible"> <?php echo $rows['mttr'];?></button>
                                 <div class="content">
                                 <p>
                                 MTIS:<?php echo $rows['mtis'];?>
                                 MTJC:<?php echo $rows['mtjc'];?>
                                 MTII:<?php echo $rows['mtii'];?>
                                 MTFI:<?php echo $rows['mtfi'];?></p>
                                </div></td>

				<td align="center"><?php echo $rows['category'];?></td>
				<td><button class="collapsible">DETAILS</button>
       				 <div class="content">
       				 <p> <?php echo $rows['description'];?> </p>
        			</div></td>

			</tr>
			<?php
				}
			?>
		
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
</script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</table>
</section>
</body>

</html>

