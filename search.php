<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "diary";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn)
  {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM employee WHERE empid='$_POST[empid]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0)
  {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
    {
      $empid = $row["empid"];
      $empname = $row["empname"];
      $qualification = $row["qualification"];
      $position = $row["position"];
      $dob = $row["dob"];
      $department = $row["department"];
    }

    echo "ID: $empid <br>Name: $empname <br>qualification: $qualification<br>position: $position<br>dob: $dob<br>department: $department <br><a href='./index.php'><button>Back</button></a>";
  }
  else
  {
    // echo "0 results";
  }

  mysqli_close($conn);
?>
