<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Bangalore Diary</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css" crossorigin="anonymous">

</head>

<body background="pink">
  <div class="container-fluid">
  <div class="table">
    <div class="row">


      <div class="col-lg-3">
        <h3>Insert</h3>
        <form action="insert.php" method="post">
	  			<div class="field">
            <input type="number" name="empid" required placeholder="empid">
          </div>

          <div class="field space">
          	<input type="text" name="empname" required placeholder="employee name">
          </div>

          <div class="field space">
          	<input type="text" name="qualification" required placeholder="qualification">
          </div>

	 			  <div class="field space">
            <input type="text" name="position" required placeholder="position">
          </div>

          <div class="field space">
            <input type="number" name="dob" required placeholder="dob">
          </div>

          <div class="field space">
            <input type="text" name="department" required placeholder="department">
          </div>

          <div class="field">
          	<input type="submit" value="Insert">
          </div>
        </form>
      </div>



      <div class="col-lg-3">
        <h3>Update</h3>

        <form action="updateName.php" method="post">
          <div class="field">
            <input type="number" name="empid" placeholder="empid">
            <input type="text" name="name" placeholder="empname">
            <input type="submit" value="Update Name">
          </div>
        </form>

        <hr>

        <form action="updateAge.php" method="post">
          <div class="field">
            <input type="number" name="empid" placeholder="empid">
            <input type="number" name="dob" placeholder="dob">
            <input type="submit" value="Update dob">
          </div>
        </form>

        <hr>

        <form action="updateGender.php" method="post">
          <div class="field">
            <input type="number" name="empid" placeholder=" empid">
            <input type="text" name="position" placeholder="position">
            <input type="submit" value="Update position">
          </div>
        </form>

        <hr>

        <form action="updateCourse.php" method="post">
          <div class="field">
            <input type="number" name="empid" placeholder="empid">
            <input type="text" name="qualification" placeholder="qualification">
            <input type="submit" value="Update qualification">
          </div>
        </form>

        <hr>

        <form action="updateAddress.php" method="post">
          <div class="field">
            <input type="number" name="empid" placeholder="empid">
            <input type="text" name="department" placeholder="department">
            <input type="submit" value="Update department">
          </div>
        </form>
      </div>



      <div class="col-lg-3">
        <h3>Delete</h3>
        <form action="delete.php" method="post">
          <div class="field">
            <input type="number" name="empid" placeholder="employee id">
            <input type="submit" value="Delete employee">
          </div>
        </form>
      </div>



      <div class="col-lg-3">
        <h3>Search</h3>
        <form action="search.php" method="post">
          <div class="field">
            <input type="number" name="empid" placeholder="employee id">
            <input type="submit" value="Search employee">
          </div>
        </form>
      </div>


    </div>
  </div>

  <div>
    <form action="showall.php" method="post">
      <div class="field">
        <input type="submit" value="Show SALES DEPARTMENT">
      </div>
    </form>
  </div>
  </div>
</body>
