<?php 
include 'koneksi.php';
	session_start();

		$que = "SELECT * FROM mhsw"; 
		$qry = mysqli_query($conn,$que);
		$row = mysqli_fetch_array($qry);

			echo "<table border='1'>
					<tr>
						<th>Nama</th>
						<th>NIM</th>
						
					</tr>";

					foreach ($qry as $row){

				echo	"<tr>
						<td>".$row['Nama']."</td>
						<td>".$row['NIM']."</td>
					</tr>";
				
			}
		
			//echo "<table>
				//	<tr>

					//</tr>
				//</table>";

 ?>