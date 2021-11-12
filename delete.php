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
  $stmt = "DELETE FROM employee WHERE empid = '$_POST[empid]';";
  mysqli_query($conn, $stmt);
  echo "deleted";

  mysqli_close($conn);
?>


<script>
        setTimeout(function () {
            window.location.href = "./index.php";
            window.clearTimeout(tID);		// clear time out.
        }, 2500);
</script>
