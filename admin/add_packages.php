<?php 
include "session.php";
include "header.php"
?>
<div class="content">
<div class="container">
<h1 class="display-4" >Add Package</h1>
    <form action="save_packages.php" method ="post" enctype="multipart/form-data" >
  <div class="form-group ">
    <label for="exampleFormControlInput1"> Name</label>
    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" require>
  </div>

   <div class="form-group ">
    <label for="exampleFormControlInput1">Price</label>
    <input name="price" type="number" class="form-control" id="exampleFormControlInput1" require>
  </div>

<div class="form-group">
  <label for="details">Details:</label>
  <textarea class="form-control" rows="5" id="details" name="details"></textarea>
</div>
   <div class="form-group ">
    <label for="exampleFormControlInput1">Location</label>
    <input name="location" type="text" class="form-control" id="exampleFormControlInput1" require>
  </div>
  <div class="form-group ">
    <label for="exampleFormControlInput1">Days</label>
    <input name="days" type="text" class="form-control" id="exampleFormControlInput1" require>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Picture</label>
    <input name="fileToUpload" type="file" class="form-control-file" id="exampleFormControlFile1" >
  </div>
   <input  name="submit" type="submit" class="btn btn-primary mb-2" value="add"/>
  </div>
</form>
</div>
</div>
 <?php include "footer.php" ?>