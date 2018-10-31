 <!DOCTYPE html>
<html>
<head>
	<title>La creche</title>
    <html lang="en">
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="include/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="include/style/style.css">
   </head>
<body class=" ">


    
<div class="container">
    <!-- Navigation -->
	<div>
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	      <div class="container">
	        <!--<a class="navbar-brand" href="#">logo</a>--> 	
	        <a href="http://localhost/Natif_la_Creche/index.php">
	        <img   src="include/style/logo.png" class="img-fluid" alt="Responsive image" width="100px">
	        </a>	        <div class="collapse navbar-collapse" id="navbarResponsive">
	          <ul class="navbar-nav ml-auto">
	            <li class="nav-item">
	              <div class="btn-group-vertical">
	                	<a href="#" class="btn btn-danger btn-lg" role="button"  >Sign out</a>  
	              </div>
	          </ul>
	        </div>

	      </div>
	    </nav>
	</div>
		<div class="bodytop">
			<div class="input-group mb-2">
				<a href="http://localhost/Natif_la_Creche/admin.children.php" type="button" class="form-control btn btn-danger btn-lg">The list of children</a>
				<a href="http://localhost/Natif_la_Creche/admin.activities.php" type="button" class="form-control btn btn-primary btn-lg btn-block">All the activities</a>

			</div>
		</div>
	 <!-- main -->
	<main>
		<table class="table table-bordered    ">
		  <thead>
		    <tr>
		     
		      <th class="  active" scope="col">All the activities</th>
		      <th class=" active" scope="col">The details</th>
		      
		    </tr>
		  </thead>
		  <tbody>
		    <tr> 
		      <td>
		      		<ul class="list-group  " role="tablist">
					  <li class="list-group-item list-group-item-action">name</li>
					  <li class="list-group-item list-group-item-action">Dname</li>
					  <li class="list-group-item list-group-item-action">name</li>
					  <li class="list-group-item list-group-item-action">name</li>
					  <li class="list-group-item list-group-item-action">name</li>
					</ul>
		      </td>
		      <td>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >Name :</span>
						</div>
						<input type="text" class="form-control" placeholder="Name" name="" id="">
 					</div>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >Type :</span>
						</div>
						<input type="text" class="form-control" placeholder="Type" name="" id="">
					</div>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >Number of children allowed :</span>
						</div>
						<input type="text" class="form-control" placeholder="Number of children allowed	" name="" id="">
					</div>
 
     
     
		      </td>
		    </tr>
		     
		  </tbody>
		</table>
		<div class="input-group mb-3">
            <a   type=" " class="form-control btn btn-danger btn-lg btn-block">Create new file</a>
			<a   type=" " class="form-control btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#Modify"">Modify the file</a>
			<a   type=" " class="form-control btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#Delete"">Delete the file</a>
		</div>
 	</main>
</div>


<!-- Modal -->
<div class="modal fade" id="Modify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modify</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        are u sure do you want to Modify
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        are u sure do you want to Delete
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


 <!-- Footer -->
<footer class="py-5 bg-dark">
  <div class=" ">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
  </div> -->
  <!-- /.container -->
</footer> 

	<script type="text/javascript" src="include/jquery.min.js"></script>
	<script type="text/javascript" src="include/bootstrap.min.js"></script>
	<script type="text/javascript" src="include/js/app.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"  ></script>
 </body>
</html>


