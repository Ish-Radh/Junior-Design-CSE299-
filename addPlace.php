<?php
include('./admininclude/header.php');
?>

<div class="col-sm-8 mt-5 mx-3 jumbotron">
 <h3 class="text-center">Add New Place</h3>
 <form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
  	<br>
 <label for="place_name">Place Name</label>
 <input type="text" class="form-control" id="place_name"
    name="place_name">
</div>
<br>
<div class="form-group">
<label for="place_desc">Place Description</label>
<input type="text" Class="form-control" id="place_desc" name="place_desc" row=2>
</div>
<br>
<div class="form-group">
<label for="avl_hotels">Available Hotels</label>
<input type="text" class="form-control" id="avl_hotels" name="avl_hotels">
</div>
<br>
<div class="form-group">
<label for="tour_spt">Tourist Spots</label>
<input type="text" class="form-control" id="tour_spt" name="tour_spt">
</div>
<br>
<div class="form-group">
<label for="am_t">Amount</label>
<input type="text" class="form-control"
id="am_t" name= "am_t">
</div>
<br>
<div class="form-group">
<label for="dis_price">Discount Price</label> <input type="text" class="form-control" id="dis_price" name="dis_price">
</div>
<br>
<div class="form-group">
	<label for="place_img">Place Image</label>
	<input type="file" class="form-control-file" id="place_img" name="place_img">
</div>
<div class="text-center">
	<button type="submit" class="btn btn-danger"
	id="placeSubmitBtn" name="placeSubmitBtn">Submit</button>
	<a href="places.php" class="btn btn-secondary">Close</a>

</div>
</form>
</div>
</div>
</div>

<?php
include('./admininclude/footer.php');
?>