 <h2>Your Search Result</h2>
                  <table border="1">
				  <th>Name</th><th>email</th><th>Number</th><th>Postcode</th><th>Suburb</th><th>Coordinator</th>
<?php
session_start();
include ("dbconnection.php");

if(isset($_POST ["search"]) && !empty ($_POST ["search"])){
$postcode = $_POST ['postcode'];
$sql = "SELECT * from educators where postcode ='$postcode'";

                $result = mysqli_query ($connection, $sql);
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc ($result)) {
					  
					  ?>
					 
					<tr>
					<td><?php echo $row["firstname"]." ".$row["lastname"]; ?></td>
					<td><?php echo $row["email"]; ?></td><td><?php echo $row["number"] ;?></td><td><?php echo $row["postcode"] ;?></td><td><?php echo $row["suburb"]; ?></td><td><?php echo $row["coordinator"]; ?></td>
					</tr>
                  
                  
                <?php
				  }
                mysqli_free_result ($result);
                mysqli_close ($connection);
				}
                else 
                  die(header("location:index.php?searchFailed=true&reason=postcode"));
}

?>
</table>