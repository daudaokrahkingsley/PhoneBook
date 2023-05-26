<?php  include '../db.php'?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"
    />

    <title>Document</title>
  </head>

  <style>
    body {
      background-color: #f9f9fa;
    }

    .flex {
      -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
    }

    @media (max-width: 991.98px) {
      .padding {
        padding: 1.5rem;
      }
    }

    @media (max-width: 767.98px) {
      .padding {
        padding: 1rem;
      }
    }

    .padding {
      padding: 5rem;
    }

    .card {
      box-shadow: none;
      -webkit-box-shadow: none;
      -moz-box-shadow: none;
      -ms-box-shadow: none;
    }

    .pl-3,
    .px-3 {
      padding-left: 1rem !important;
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid #d2d2dc;
      border-radius: 0;
    }

    .card .card-title {
      color: #000000;
      margin-bottom: 0.625rem;
      text-transform: capitalize;
      font-size: 0.875rem;
      font-weight: 500;
    }

    .card .card-description {
      margin-bottom: 0.875rem;
      font-weight: 400;
      color: #76838f;
    }

    p {
      font-size: 0.875rem;
      margin-bottom: 0.5rem;
      line-height: 1.5rem;
    }

    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table,
    .jsgrid .jsgrid-table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 1rem;
      background-color: transparent;
    }

    .table thead th,
    .jsgrid .jsgrid-table thead th {
      border-top: 0;
      border-bottom-width: 1px;
      font-weight: 500;
      font-size: 0.875rem;
      text-transform: uppercase;
    }

    .table td,
    .jsgrid .jsgrid-table td {
      font-size: 0.875rem;
      padding: 0.875rem 0.9375rem;
    }

    .badge {
      border-radius: 0;
      font-size: 12px;
      line-height: 1;
      padding: 0.375rem 0.5625rem;
      font-weight: normal;
    }

   #viewbtn {
    	border: 0px;
	padding: 5px 20px;
	border-radius: 5px;
	background-color: #6495ed;
	color: white;
	
    }
	
   a #viewbtn:hover {
	backroung-color: #4169e1;

   
  </style>

  <body>
    <div class="page-content page-container" id="page-content">
      <div class="padding">
        <div class="row container d-flex justify-content-center">
          <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"> Individual Service Aspert </h4>
                <p class="card-description"> 
 </p>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone 1</th>
                        <th>Phone 2</th>
			 <th>Email</th>
                 
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                         <?php
              
              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM mofcee WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                      $id = $row['id'];
                      $Fullname = $row['Fullname'];
                      $phone1 = $row['phone1'];
		      $phone2 = $row['phone2'];
                      $email = $row['email'];




                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$Fullname}</td>";
                        echo " <td > {$phone1}</td>";
                        echo " <td >{$phone2} </td>"; 
 			echo " <td >{$email} </td>";
			echo " </tr> ";
                  }
                }
            ?>
                      



                        </td>
                      </tr>
                    </tbody>
                  </table>
 
 
               </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        
</div>

   <!-- a BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
