

 <?php




$mysqli=new mysqli('localhost','root','','university_detail');
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

//echo $U_name;
//    echo $intro;
//echo $c_name;
//echo $c_obje;
//echo $c_scope;
//echo $requirement;
//echo $syllabus;
//echo $c_intro;





	$query="INSERT INTO add_university(name,intro,images) VALUES ('$U_name','$intro','$temp_file') ";
	$insert=$mysqli->query($query);
 

  // $last_id = $mysqli->insert_id;
  // $c=count($_FILES['img']['name']);
  // if ($insert) {

  //  if ($c<10) {

  //   for ($i=0; $i < $c ; $i++) { 
  //     $img_name=$_FILES['img']['name'][$i];
  //     move_uploaded_file($_FILES['img']['tmp_name'][$i], "uploads/".$img_name);
  //       $query_multi= "INSERT INTO course(images,c_id,c_name,c_intro,c_obje,c_scope,requirement,syllabus) VALUES ('$img_name','$last_id','$c_name','$c_intro','$c_obje','$c_scope','$requirement','$syllabus')";
  //     $ins=$mysqli->query($query_multi);

  //   }  
    
  //  }

  }
	

?>
       



<div class="container">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Add University<hr></legend>

    <div class="form-group row">
      <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Name Of University</label>
      <div class="col-sm-10">
      	<input type="text" name="U_name" class="form-control" placeholder="Name Of Property">
      	<small id="emailHelp" class="form-text text-muted">Please enter a valid name of property</small>
      </div>
      
    </div>


    <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Introduction</label>
      <div class="col-sm-10">
      <input type="text" name="intro" class="form-control" placeholder="Introduction of University">
      </div>
    </div>

    <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Course Name</label>
      <div class="col-sm-10">
      <input type="text" name="c_name" class="form-control" placeholder="Course Name">
      </div>
    </div>

   <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">c_Introduction</label>
      <div class="col-sm-10">
      <input type="text" name="c_intro" class="form-control" placeholder="Course Introduction">
      </div>
    </div>

     <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Objective</label>
      <div class="col-sm-10">
      <input type="text" name="c_obje" class="form-control" placeholder="Course Objective">
      </div>
    </div>

    <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">c_scope </label>
      <div class="col-sm-10">
      <input type="text" name="c_scope" class="form-control" placeholder="Course Scope">
      </div>
    </div>

    <div class="form-group row">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Admission Requirment</label>
      <div class="col-sm-10">
      <input type="text" name="Requirment" class="form-control" placeholder="Requirement For Admission">
      </div>
    </div>

    <div class="form-group row">
      <label for="exampleTextarea" class="col-sm-2 col-form-label">Syllabus</label>
      <div class="col-sm-10">
      	<textarea class="form-control" name="syllabus" id="exampleTextarea" rows="3"></textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="exampleTextarea" class="col-sm-2 col-form-label">University Image</label>
      <div class="col-sm-10">
        <input type="file" name="images">
      </div>
    </div>    
 
    <div class="form-group row">
      <label for="exampleTextarea" class="col-sm-2 col-form-label">Course Images</label>
      <div class="col-sm-10">
      	<input type="file" name="img[]" multiple>
      </div>
    </div>

    <button type="reset" class="btn btn-danger">Cancel</button>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  

  </fieldset>
</form>
</div>


<?php
include 'fixed_content/footer.php ';
?>