<?php include "header.php"

?>
<div class="content">
<div class="container">
<h1 class="display-4" >Update Package</h1>
    <form action="save_update_packages.php" method ="post" enctype="multipart/form-data" >
    <?php
    include "config.php";
    $sql = "SELECT * FROM packages WHERE package_id ={$_GET['id']}";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
    
    ?>
    <input type="hidden" name="id" value ="<?php echo $row['package_id'];?>">
  <div class="form-group ">
    <label for="exampleFormControlInput1"> Name</label>
    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['package_name'];?>"  require>
  </div>

   <div class="form-group ">
    <label for="exampleFormControlInput1">Price</label>
    <input name="price" type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['package_price'];?>" require>
  </div>

<div class="form-group">
  <label for="details">Details:</label>
  <textarea class="form-control" rows="5" id="details" name="details" value="<?php echo $row['package_details'];?>"></textarea>
</div>
   <div class="form-group ">
    <label for="exampleFormControlInput1">Location</label>
    <input name="location" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['package_location'];?>" require>
  </div>

  
  <div class="form-group">
                <input type="file" name="new_image">
                <img  src="./upload/<?php echo $row['package_image'];?>" height="150px">
                <input type="hidden" name="old_image" value="<?php echo $row['package_image'];?>">
            </div>
   <input  name="submit" type="submit" class="btn btn-primary mb-2" value="update"/>
  </div>
        <?php }} ?>
</form>
</div>
</div>
 <?php include "footer.php" ?>