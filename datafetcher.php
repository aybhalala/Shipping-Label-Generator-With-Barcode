<?php  
 $connect = mysqli_connect("Host Address", "Username", "Password", "Database");  
 $output = '';    
 $date = $_POST["date"];
      $sql = "SELECT * FROM new_cust WHERE date1 ='".$date."'";  
      $result = mysqli_query($connect, $sql);  
      if(mysqli_num_rows($result) > 0)  
      {  
           $output .= '  
                <table class="table" border="1">  
                	<b><tr>
                		<th>COMPANY NAME</th>
                		<th></th>
                	</tr>

                     <tr>  
                          <th>Date</th>  
                          <th>Name</th>  
                          <th>Address1</th>  
                          <th>Address2</th>  
                          <th>Email</th>  
                          <th>Mobile</th> 
                          <th>City</th>  
                          <th>PINcode</th>  
                          <th>BarcodeNumber</th> 
                          <th>ArticleType</th>  
                          <th>TarrifCategory</th>  
                          <th>Weight</th> 
                          <th>CODValue</th>  
                          <th>RefID</th>  
                          <th>MobileNo</th> 
                     </tr> </b> 
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'.$row["date1"].'</td>  
                          <td>'.$row["name"].'</td>  
                          <td>'.$row["address"].'</td>
                          <td>'.$row["state"].'</td>  
                          <td>'.$row["email"].'</td>  
                          <td>'.$row["mobile"].'</td>
                          <td>'.$row["city"].'</td>  
                          <td>'.$row["pincode"].'</td>  
                          <td>'.$row["barcode"].'</td>
                          <td>'.$row["article_type"].'</td>  
                          <td>'.$row["tarrif_category"].'</td>  
                          <td>'.$row["weight"].'</td>
                          <td>'.$row["codval"].'</td>  
                          <td>'.$row["refid"].'</td>  
                          <td>'.$row["mobile_seller"].'</td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
           header("Content-Type: application/xls");   
           header("Content-Disposition: attachment; filename=".$date.".xls");  
           echo $output;  
      }  
 
 ?>  