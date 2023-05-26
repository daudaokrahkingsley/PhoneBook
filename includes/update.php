<!-- Footer -->
<?php include "../header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM mofcee WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $Fullname = $row['Fullname'];
          $phone1 = $row['phone1'];
	  $phone2 = $row['phone2'];
          $email = $row['email'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $Fullname = $_POST['Fullname'];
      $phone1 = $_POST['phone1'];
      $phone2 = $_POST['phone2'];
      $email = $_POST['email'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE mofcee SET Fullname = '{$Fullname}' , phone1 = '{$phone1}' , phone2 = '{$phone2}', email = '{$email}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update User Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="user" >Name</label>
        <input type="text" name="Fullname" class="form-control" value="<?php echo $Fullname  ?>">
      </div>

       
      <div class="form-group">
        <label for="pass" >Phone 1</label>
        <input type="text" name="phone1"  class="form-control" value="<?php echo $phone1  ?>">
      </div>  


      
      <div class="form-group">
        <label for="pass" >Phone 2</label>
        <input type="text" name="phone2"  class="form-control" value="<?php echo $phone2  ?>">
      </div>  

 	
	 <div class="form-group">
        <label for="pass" >Email</label>
        <input type="text" name="email"  class="form-control" value="<?php echo $email  ?>">
      </div>  

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>