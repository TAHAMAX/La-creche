 <?php 
 	require_once 'include/header.php';
 ?>
 

	 <!-- main -->
	<main style="margin-top: 120px">
		<table class="table table-bordered   bodytop">
		  <thead>
		    <tr>
		     
		      <th class="  active text-center" scope="col">The list of children</th>
		      <th class=" active text-center" scope="col">Profile</th>
		      
		    </tr>
		  </thead>
		  <tbody>
     <tr> 
      <td>
        <form action="home.php" method="POST">
      		<ul class="list-group  " role="tablist">
			       <li class="list-group-item btn-primary active text-center font-weight-bold">name</li>	
					<?php 
					require_once 'include/connectsql.php';
					$data = $conn->query('SELECT * FROM  children');
					while ($key = $data->fetch())
					{
					echo '
<button  id='.$key["children_id"].'  class="list-group-item text-center font-weight-bold" value='.$key["children_id"].' name="editt" type="editt">'.$key["children_firstname"]. '</button>';
					} 
					$data->closeCursor();
					?>
			</ul>
		</form>
      </td>
      <td>
	<?php 
			require_once 'include/connectsql.php';
			$id=$_POST['editt'];
			$data = $conn->query('SELECT * FROM children WHERE children_id= '.$id);
			$show = $data->fetch();
             echo '
<div class="input-group mb-2">
<div class="input-group-prepend">
<span class="input-group-text"  >firstname :</span>
</div>
<div class="alert alert-success form-control" role="alert"  >'.$show["children_firstname"].'</div>
</div>
<div class="input-group mb-2">
<div class="input-group-prepend">
<span class="input-group-text"  >lastname :</span>
</div>
<div class="alert alert-success form-control" role="alert"  >'.$show["children_lastname"].'</div>
</div>
<div class="input-group mb-2">
<div class="input-group-prepend">
<span class="input-group-text"  >birthday :</span>
</div>
<div class="alert alert-success form-control" role="alert"  >'.$show["children_birthday"].'</div>
</div> 
<div class="input-group mb-2">
<div class="input-group-prepend">
<span class="input-group-text"  >Parents contact :</span></div>
<div class="alert alert-success form-control" role="alert" >'.$show["children_adress"].'</div>
</div>  
<div class="input-group mb-2">
<div class="input-group-prepend">
<span class="input-group-text"  >Remarks :</span></div>
<div class="alert alert-success form-control" role="alert" >'.$show["children_remarks"].'</div>
</div>  
			';$data->closeCursor();
	      ?>		 	 	 	 			
		      </td>
		    </tr>		   
		  </tbody>
		</table>	
	</main>
  <?php 
 	require_once 'include/footer.php';
 ?>