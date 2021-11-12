<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diary";

try
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE employee SET qualification='$_POST[qualification]' WHERE empid='$_POST[empid]'";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "qualification Updated successfully";
}
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

<script>
        setTimeout(function () {
            window.location.href = "./index.php";
            window.clearTimeout(tID);		// clear time out.
        }, 2500);
</script>
