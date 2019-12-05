  <?php
$mysqli=new mysqli('localhost','root','','university_detail');
if($mysqli->connect_error){
	printf("cannot connect to database now %s\n",$mysqli->connect_error);
	exit();
}

$query="SELECT * FROM add_university";
$read=$mysqli->query($query);
?>
   
   
   
   <section class="gallery">
    <div class="container" >
       <div class="row">
        
        
        
        <!--cards below-->
         
            
               
           <?php
           
         $sql=mysqli_query($mysqli,"SELECT * FROM add_university");
           
        $row=mysqli_num_rows($read);

        while($row=mysqli_fetch_array($read)){  ?>
             
              <div class="span3">
                <div class="box aligncenter">
                  <div class="icon">
             
                 <img src="uploads/<?php echo $row['images']; ?>" alt="image" height="232px">
                  </div>
                  <div class="text">
                    <h4><strong><?php echo $row['name']?></strong></h4>
                    <p>
                     <?php echo $row['intro'];?>
                    </p>
                    <a href="university.php?id=<?php echo $row['id']?>    "><button class="btn btn-success">Learn More</button></a>
                  </div>
                </div>
              </div>
          <?php }  ?>
      
    </div>
      </div>
    
   
  </section>