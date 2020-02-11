<?php
include "session.php";
include "header.php" ?>
<div class="content">
<div class="container">
<h1 class="display-4" >Add Hotel</h1>
    <form action="save_add_hotel.php" method ="post" enctype="multipart/form-data">
  <div class="form-group ">
    <label for="exampleFormControlInput1">Hote Name</label>
    <input name="hotelname" type="text" class="form-control" id="exampleFormControlInput1" require>
  </div>

   <div class="form-group ">
    <label for="exampleFormControlInput1">Rooms</label>
    <input name="rooms" type="number" class="form-control" id="exampleFormControlInput1" require>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Rating</label>
    <select name="rating" class="form-control" id="exampleFormControlSelect1" require>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Picture</label>
    <input name="fileToUpload" type="file" class="form-control-file" id="exampleFormControlFile1" >
  </div>
   <button name="submit" type="submit" class="btn btn-primary mb-2">Submit</button>
  </div>
</form>
</div>
</div>
<?php include "footer.php" ?>