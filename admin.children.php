<?php 
 	require_once 'include/header.php';
 ?>
<div class="row " style="margin-top: 120px">
	<div class="col">
		<a href="http://localhost/Natif_la_Creche/admin.children.php" type="button" class="btn btn-primary btn-lg btn-block font-weight-bold">List of the childrens	</a>    
	</div>
	<div class="col">
		<a href="http://localhost/Natif_la_Creche/admin.activities.php" type="button" class="btn btn-primary btn-lg btn-block font-weight-bold">List of the activities</a>    
	</div>
</div>
<div class="row" style="margin-top: 5px">
	<div class="col-sm">
		<a class="btn btn-primary btn-lg btn-block font-weight-bold bg-success alert-primary" data-toggle="modal" data-target="#Create">Create new children file</a>	 
	</div>
</div>
<!-- main -->

<main style="margin-top: 5px">
	<div class="list-group  ">
 		<div class="row " style="margin-top: 5px">
 			<i class="col list-group-item   btn-primary active  font-weight-bold">FirstNam</i>
			<i class="col list-group-item   btn-primary active  font-weight-bold">LastName</i>
		   	<i class="col  col-lg-1 fa fa-edit list-group-item   bg-success  active text-center font-weight-bold	alert-primary"></i>
		    <i class="col  col-lg-1 fa fa-trash list-group-item   bg-danger active  text-center font-weight-bold	alert-primary"></i>    
		</div>
		<form action="include/delet.php" method="POST">
		<?php 
		require_once 'include/connectsql.php';
		$data = $conn->query('SELECT * FROM  children');
		asort($data);
		while ($key = $data->fetch())
		{
		echo '
<div class="row ">
<i class="col list-group-item  font-weight-bold ">'.$key["children_firstname"].'</i>
<i class="col list-group-item  font-weight-bold">'.$key["children_lastname"].'</i>

<button class="col  col-lg-1 fa fa-edit list-group-item btn bg-success " data-toggle="modal" data-target="#Modify"></button>

<button id='.$key["children_id"].' class="col  col-lg-1 fa fa-edit list-group-item btn bg-danger "name="Deletechildren" type="Deletechildren" value='.$key["children_id"].' ></button>
</div>
		';
		} 
		$data->closeCursor();
		?>			  
	    </form>

	</div>
</main >
  
<!-- Modal Create-->
<form action="include/insert.php" method="POST">
   <div class="modal fade" id="Create"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Create new file</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
						<!-- childcare  table -->

	                <div class="modal-body">
	                    <div class="input-group mb-2">
						     <div class="input-group-prepend">
								<span class="input-group-text"  >First name :</span>
							</div>
							<input type="text" class="form-control" name="FirstNam"  >

							<div class="input-group-prepend">
								<span class="input-group-text"  >Last name :</span>
							</div>
							<input type="text" class="form-control" name="LastName"  >
						</div>

				 		<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span  class="input-group-text"  >Birth date :</span>
							</div>
							<input type="date" class="form-control" name="BirthDate"  >

							<div class="input-group-prepend">
								<span class="input-group-text"  >Address :</span>
							</div>
							<input type="text" class="form-control" name="Address" >
						</div>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text"  >Children parents contact :</span>
							</div>
							<input type="text" class="form-control" name="children_parents_contact" >
						</div>
							<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text"  >Children remarks</span>
							</div>
							<input type="text" class="form-control"   name="children_remarks" >
						</div>
						<!-- childcare_history table -->
				<!--  -->      
	                </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button  class="btn btn-primary" type="SaveChildren" name="SaveChildren">Save</button>
	      </div>
	    </div>
	  </div>
	</div>
</form>
<!-- Model Modify -->


  <?php 
 	require_once 'include/footer.php';
 ?>
	
 