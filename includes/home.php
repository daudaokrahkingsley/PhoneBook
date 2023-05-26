<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Phone Book</h1>
      
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Name</th>
              <th  scope="col">Phone 1</th>
              <th  scope="col">Phone 2</th>
	      <th  scope="col">Email</th>
	      
              <th  scope="col" colspan="3" class="text-center">Action</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM mofcee";               
            $view_users= mysqli_query($conn,$query);     

            
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $Fullname = $row['Fullname'];        
              $phone1 = $row['phone1'];         
              $phone2 = $row['phone2'];  
              $email = $row['email'];        

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$Fullname}</td>";
              echo " <td > {$phone1}</td>";
              echo " <td > {$phone2} </td>";
 	      echo " <td > {$email} </td>";


              

              echo " <td class='text-center' > <a href='update.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="../index1.php" class="btn btn-warning mt-5"> Back </a>
    <div>

 
 