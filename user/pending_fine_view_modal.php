<?php  
 if(isset($_POST["did"]))  
 {  
	
      $output = '';  
      include "../connection.php";
    //   $query = "SELECT * FROM issued_fines WHERE ref_no = '".$_POST["did"]."'"; 

		$query = "CALL GetFineDetails('".$_POST["did"]."')";
      $result = mysqli_query($conn, $query);  
      $output .= '  
        
           <table class="table table-borderless"> <tbody> ';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '
				<tr class="content">
					<td>Reference No</td>
					<td>'.$row["ref_no"].'</td>
				</tr>
				
				<tr class="content">
					<td>Police ID</td>
					<td>'.$row["police_id"].'</td>
				</tr>
                
				<tr class="content">
					<td>License ID</td>
					<td>'.$row["license_id"].'</td>
				</tr>
				
				<tr class="content">
					<td>Vehicle No</td>
					<td>'.$row["vehicle_no"].'</td>
				</tr>
               
			    <tr class="content">
					<td>Class of Vehicle</td>
					<td>'.$row["class_of_vehicle"].'</td>
				</tr>
				<tr class="content">
					<td>Place</td>
					<td>'.$row["place"].'</td>
				</tr>
				
				<tr class="content">
					<td>Issued Date</td>
					<td>'.$row["issued_date"].'</td>
				</tr>
				
				<tr class="content">
					<td>Issued Time</td>
					<td>'.$row["issued_time"].'</td>
				</tr>
				
				<tr class="content">
					<td>Expire Date</td>
					<td>'.$row["expire_date"].'</td>
				</tr>
				
				<tr class="content">
					<td>Court</td>
					<td>'.$row["court"].'</td>
				</tr>
				
				<tr class="content">
					<td>Court Date</td>
					<td>'.$row["court_date"].'</td>
				</tr>
				
				
				
				<tr class="content">
					<td>Total Amount</td>
					<td>'.$row["total_amount"].'</td>
				</tr>

				<tr class="content">
					<td>Fine Reason</td>
					<td>'.$row["provision"].'</td>
				</tr>
				
				<tr class="content">
					<td>Status</td>
					<td style="word-break: break-all;">'.$row["status"].'</td>
				</tr>
				
           ';  
      }  
      $output .= '  
           </tbody></table>  
      
      ';  
      echo $output;  
 }  
?>
