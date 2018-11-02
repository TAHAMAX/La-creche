
<?php 
require_once 'include/header.php';
?>
<!-- main -->
<main style="margin-top: 120px">
<table class="table table-bordered   bodytop">
  <thead>
    <tr>
      <th class="  active text-center" scope="col">The list of activitie</th>
      <th class=" active text-center" scope="col">Profile</th>
    </tr>
  </thead>
  <tbody>
    <tr> 
      <td>
        <form action="activities.php" method="POST">
      		<ul class="list-group  " role="tablist">
			       <li class="list-group-item btn-primary active text-center font-weight-bold">name</li>	
					<?php 
					require_once 'include/connectsql.php';
					$data = $conn->query('SELECT * FROM  activity');
					while ($key = $data->fetch())
					{
					echo '
<button class="list-group-item text-center font-weight-bold" value='.$key["activity_id"].' name="edit" type="edit">'.$key["activity_name"]. '</button>	
							';
					} 
					$data->closeCursor();
					?>
			</ul>
		</form>
      </td>
      <td>
	<?php 
			require_once 'include/connectsql.php';
			$id=$_POST['edit'];
			$data = $conn->query('SELECT * FROM activity WHERE activity_id= ' .  $id);
			$show = $data->fetch();
             echo '
			<div class="input-group mb-2">
				<div class="input-group-prepend">
				<span class="input-group-text"  >Name :</span>
				</div>
				<div class="alert alert-success form-control" role="alert"  >'.$show["activity_name"].'</div>
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
				<span class="input-group-text"  >Type :</span>
				</div>
				<div class="alert alert-success form-control" role="alert"  >'.$show["activity_type"].'</div>
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
				<span class="input-group-text"  >Number of children allowed :</span>
				</div>
				<div class="alert alert-success form-control" role="alert"  >'.$show["activity_number_max_child"].'</div>
			</div>  '; $data->closeCursor();
	      ?>
	 </td>
    </tr>
  </tbody>
</table>	
</main>
</div>



<?php 
require_once 'include/footer.php';
?>