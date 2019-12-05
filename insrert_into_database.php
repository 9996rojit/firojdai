<?php

$mysqli=new mysqli('localhost','root','','kist_fair');
if($mysqli->connect_error){
	printf("cannot connect to database now %s\n",$mysqli->connect_error);
	exit();
}
	if(isset($_POST['submit'])){
	$U_name=$_POST['U_name'];
	$intro=$_POST['intro'];
	$c_name =$_POST['c_name'];
	$c_obje=$_POST['c_obje'];
	$c_scope=$_POST['c_scope'];
	$requirement=$_POST['Requirment'];
    $syllabus = $_POST['syllabus'];
	$c_intro=mysqli_real_escape_string($mysqli,$_POST['c_intro']);
	
	$target_dir="uploads/";
	$target_file=$target_dir.basename($_FILES["images"]["name"]);
	$temp_file=$_FILES["images"]["name"];
	move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);


	$query="INSERT INTO add_property (name,monthly,address,access,floor,utility,description,images) VALUES ('$name','$monthly','$address','$access','$floor','$utility','$description','$temp_file') ";
	$insert=$mysqli->query($query);

  $last_id=$mysqli->insert_id;
  $c=count($_FILES['img']['name']);
  if ($insert) {

   if ($c<10) {

    for ($i=0; $i < $c ; $i++) { 
      $img_name=$_FILES['img']['name'][$i];
      move_uploaded_file($_FILES['img']['tmp_name'][$i], "uploads/".$img_name);
      $query_multi="INSERT INTO details (images,proid) VALUES ('$img_name','$last_id')";
      $ins=$mysqli->query($query_multi);

    }   /*else{
      echo "MAX LIMIT EXCEEDED";
    }*/
    
   }

  }
	
}

?>
<div class="container">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Add Property <hr></legend>

    <div class="form-group row">
      <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Name Of Property</label>
      <div class="col-sm-10">
      	<input type="text" name="name" class="form-control" placeholder="Name Of Property">
      	<small id="emailHelp" class="form-text text-muted">Please enter a valid name of property</small>
      </div>
      
    </div>


    <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-10">
      <input type="text" name="monthly" class="form-control" placeholder="Price">
      </div>
    </div>

    <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
      <input type="text" name="address" class="form-control" placeholder="Address">
      </div>
    </div>

   <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Access</label>
      <div class="col-sm-10">
      <input type="text" name="access" class="form-control" placeholder="Access">
      </div>
    </div>

    <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Floor Space</label>
      <div class="col-sm-10">
      <input type="text" name="floor" class="form-control" placeholder="Floor Space">
      </div>
    </div>

    <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Utility</label>
      <div class="col-sm-10">
      <input type="text" name="utility" class="form-control" placeholder="Utility">
      </div>
    </div>

    <div class="form-group row">
      <label for="exampleTextarea" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
      	<textarea class="form-control" name="description" id="exampleTextarea" rows="3"></textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="exampleTextarea" class="col-sm-2 col-form-label">Featured Image</label>
      <div class="col-sm-10">
        <input type="file" name="images">
      </div>
    </div>    
 


    <div class="form-group row">
      <label for="exampleTextarea" class="col-sm-2 col-form-label">Rooms Images</label>
      <div class="col-sm-10">
      	<input type="file" name="img[]" multiple>
      </div>
    </div>

    <button type="reset" class="btn btn-danger">Cancel</button>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  

  </fieldset>
</form>
</div>