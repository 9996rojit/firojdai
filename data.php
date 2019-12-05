   <?php
require ('connect.php');

$query="SELECT * FROM add_university";
$read=$conn->query($query);
?>
   
   
   
   <section class="gallery">
    <div class="container" >
       <div class="row">
        
        
        
        <!--cards below-->
         
            
               
           <?php


        while($row=$read->fetch_assoc()){ ?>
             
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
                    <a href="university.php?id=<?php echo $row['id']?>"><button class="btn btn-success">Learn More</button></a>
                  </div>
                </div>
              </div>
          <?php }  ?>
      
    </div>
      </div>
    
   
  </section>
   

   
   
    
   
     
  
    
    
   
     