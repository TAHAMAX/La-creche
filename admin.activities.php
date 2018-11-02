 
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
		<a class="btn btn-primary btn-lg btn-block font-weight-bold bg-success alert-primary" data-toggle="modal" data-target="#Create">Create new activities</a>	 
	</div>
</div>

<main style="margin-top: 5px">
	<div class="list-group  ">
 		<div class="row " style="margin-top: 5px">
 			<i class="col list-group-item   btn-primary active text-center font-weight-bold">Name</i>
			<i class="col list-group-item   btn-primary active text-center font-weight-bold">Type</i>
			<i class="col list-group-item   btn-primary active text-center font-weight-bold">Numbe</i>
		   	<i class="col  col-lg-1 fa fa-edit list-group-item   bg-success  active text-center font-weight-bold	alert-primary"></i>
		    <i class="col  col-lg-1 fa fa-trash list-group-item   bg-danger active  text-center font-weight-bold	alert-primary"></i>    
		</div>
		<?php 
			    require_once 'include/connectsql.php';
		        $data = $conn->query('SELECT * FROM  activity');
		        while ($key = $data->fetch())
		        {
		           echo '
<div class="row ">
		<i class="col list-group-item text-center font-weight-bold ">'.$key["activity_name"].'</i>
	<i class="col list-group-item text-center font-weight-bold">'.$key["activity_type"].'</i>
	<i class="col list-group-item text-center font-weight-bold">'.$key["activity_number_max_child"].'</i>

 <form  class="col col-lg-1 btn btn-success">
<a id='.$key["activity_id"].'   value='.$key["activity_id"].' data-toggle="modal" data-target="#exampleModal">
 	<i class="  fa fa-edit   "></i> 
 </a>
 </form>

 <form action="include/delet.php" method="POST" class="col col-lg-1 btn btn-danger">
<button id='.$key["activity_id"].'  name="DeleteActivities" type="DeleteActivities" value='.$key["activity_id"].'>
	<i class="  fa fa-trash   "></i> 
</button>
</form>
</div>
		           ';
		        } 
		        $data->closeCursor();
		 ?>	
		  
	</div>
</main >
 <!-- End main -->

<!-- Modal insert-->
<form action="include/insert.php" method="POST">
<div class="modal fade" id="Create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create new	activitie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		 
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >Name :</span>
						</div>
						<input type="text" class="form-control"   name="ActivitieName"  >
 					</div>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >Type :</span>
						</div>
						<input type="text" class="form-control"   name="ActivitieType"  >
					</div>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >Number of children allowed :</span>
						</div>
						<input type="text" class="form-control"   name="NChildrenAllowed"  >
					</div>  
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<span class="input-group-text"  >fk_children :</span>
						</div>
						<input type="text" class="form-control"   name="fk_children"  >
					</div>      
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  type="SaveActivitie" name="SaveActivitie" class="btn btn-primary">Save  </button>
      </div>
    </div>
  </div>
</div>
</form>
	
<!-- Modal Edite-->

<?php 
 	require_once 'include/footer.php';
 ?>


 

