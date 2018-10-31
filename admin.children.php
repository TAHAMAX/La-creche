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
		     
		      <th class="  active" scope="col">First</th>
		      <th class=" active" scope="col">Last</th>
		      
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
							<span class="input-group-text"  >First name :</span>
						</div>
						<input type="text" class="form-control" placeholder="First name" name="" id="">

						<div class="input-group-prepend">
							<span class="input-group-text"  >Last name :</span>
						</div>
						<input type="text" class="form-control" placeholder="Last name" name="" id="">
					</div>

			 		<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >Birth date :</span>
						</div>
						<input type="text" class="form-control" placeholder="Birth date" name="" id="">

						<div class="input-group-prepend">
							<span class="input-group-text"  >Address :</span>
						</div>
						<input type="text" class="form-control" placeholder="Address" name="" id="">
					</div>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >Contact Mother :</span>
						</div>
						<input type="text" class="form-control" placeholder="Contact Mother" name="" id="">

						<div class="input-group-prepend">
							<span class="input-group-text"  >Contact Father :</span>
						</div>
						<input type="text" class="form-control" placeholder="Contact Father " name="" id="">
					</div>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >N ° of room :</span>
						</div>
						<input type="text" class="form-control" placeholder="N ° of Room " name="" id="">

						<div class="input-group-prepend">
							<span class="input-group-text"  > N ° of bed :</span>
						</div>
						<input type="text" class="form-control" placeholder=" N ° of Bed " name="" id="">
					</div>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >Date of reception :</span>
						</div>
						<input type="text" class="form-control" placeholder="Date of reception" name="" id="">

						<div class="input-group-prepend">
							<span class="input-group-text"  >Next date of reception :</span>
						</div>
						<input type="text" class="form-control" placeholder="Next date of reception" name="" id="">
					</div>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >Note</span>
						</div>
						<input type="text" class="form-control" placeholder="Note" name="" id="">
					</div>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >History of the activities</span>
						</div>
						<input type="text" class="form-control" placeholder="History of the activities" name="" id="">
					</div>
		      </td>
		    </tr>
		     
		  </tbody>
		</table>
			<div class="input-group mb-3">
				<button   type="button" class="form-control btn btn-danger btn-lg btn-block" >Create new file</button>
				<button   type="button" class="form-control btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#Modify">Modify the file</button>
				<button   type="button" class="form-control btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#Delete">Delete the file</button>
			</div>	
	</main>
</div>
<!-- Button trigger modal -->
 

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


