require 'core/config.php';
  error_reporting(0);
<!-- // include_once('server.php'); -->

<footer class="container-fluid bg-dark text-center p-2">
	<small class="text-white">Copyright &copy; 2022 Designed by Travel Tours || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin Login</a></small>
</footer>



<!-- Modal -->
<div class="modal fade" id="userRegModalCenter" tabindex="-1" aria-labelledby="userRegModalCenterLabel" aria-hidden="true">
  <div class=" modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userRegModalCenterLabel">User Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
  <div class="mb-3">
  	<div class="form-group">
  		<i class="fas fa-user"></i><label for="username" class="pl-2 font-weight-bold">Name</label><input type="text" class="form-control" placeholder="Name" name="username" id="username">
  		</div>
  		<div class="form-group">
  		<i class="fas fa-envelope"></i><label for="usermail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="usermail" id="usermail"> <small class="form-text">We'll never share your email with anyone else</small>
  		</div>
  		<div class="form-group">
  		<i class="fas fa-key"></i><label for="userpass" class="pl-2 font-weight-bold">New Password</label><input type="password" class="form-control" placeholder="Password" name="userpass" id="userpass">
  		</div>
    
  </div>
 
</form>
      </div>
      <div class="modal-footer">
<span id="successMsg></span>
        <button type="button" id="demo" class="btn-btn-primary" onclick="addStu()"> Sign up </button>  -->
   

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
  	</div>
      
        

      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="userLoginModalCenter" tabindex="-1" aria-labelledby="userLoginModalCenterLabel" aria-hidden="true">
  <div class=" modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userLoginModalCenterLabel">User Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
  <div class="mb-3">

  	
  		<form id="userLoginForm"></form>
  		<div class="form-group">
  		<i class="fas fa-envelope"></i><label for="userLogemail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="userLogemail" id="userLogemail"> 
  		</div>
  		<div class="form-group">
  		<i class="fas fa-key"></i><label for="userLogpass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="userLogpass" id="userLogpass">
  		</div>
    
  </div>
 
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="userLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class=" modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
  <div class="mb-3">

  	
  		<form id="adminLoginForm"></form>
  		<div class="form-group">
  		<i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail"> 
  		</div>
  		<div class="form-group">
  		<i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
  		</div>
    
  </div>
 
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>


<!-- //Student call received using ajax
  <script type="text/javascript" src="js/ajaxrequest.js"> </script> -->

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/all.min.js"></script>
</body>
</html>