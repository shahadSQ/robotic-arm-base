<?php     
  $conn =new mysqli("localhost", "root", "", "degrees");
  $update ="UPDATE tbl_base SET backward='nothing',leftt='nothing', forward='nothing', stopp='stop', rightt='nothing'";
   
  if ($conn->query($update) === TRUE) {}
     else {
    echo "Error: " . $update . "<br>" . $conn->error;
     }

  $printData="SELECT stopp FROM tbl_base";
  $result = $conn->query($printData);
  
  
  if ($result->num_rows >= 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<table>";
      echo "<tr><th>direction: </th><td>" . $row["stopp"]. "</td></tr>";
      echo "</table>";
    }
  } else {
    echo "0 results";
  }
  
  $conn->close();
  ?>