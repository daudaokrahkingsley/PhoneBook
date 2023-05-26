<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $Fullname = $_POST['Fullname'];
        $address = $_POST['address'];
        $phone1 = $_POST['phone1'];
	$phone2 = $_POST['phone2'];
	 $email = $_POST['email'];
        
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO hospital_tb(Fullname, phone1, phone2,email) VALUES('{$Fullname}','{$phone1}','{$phone2}', '{$email}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Client added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Client Details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="user" class="form-label">Name: </label>
        <input type="text" name="Fullname"  class="form-control">
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Phone 1: </label>
        <input type="text" name="phone1"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="pass" class="form-label">Phone 2: </label>
        <input type="text" name="phone2"  class="form-control">
      </div>
     
     <div class="form-group">
        <label for="pass" class="form-label">Email: </label>
        <input type="text" name="email"  class="form-control">
      </div>

      
    

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>