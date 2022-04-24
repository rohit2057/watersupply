 <link rel="stylesheet" type="text/css" href="/watersupply/libraries/bootstrap/css/bootstrap.min.css">
 <script type="text/javascript" src="/watersupply/libraries/boostrap/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="/watersupply/libraries/boostrap/js/bootstrap.min.js"></script>

 <?php
  require 'views/dashboard/shared/usermenu.php';
  ?>

 <body>
   <div class="container-fluid my-5">
     <div class="form-container container-fluid w-75 py-2 border ">
       <form method="post" action="LoginCheck">
         <div class="form-group text-center">
           <div class="custom-control custom-radio custom-control-inline">
             <input type="radio" id="customRadioInline1" name="userType" class="custom-control-input" value="0">
             <label class="custom-control-label" for="customRadioInline1">Admin</label>
           </div>
           <div class="custom-control custom-radio custom-control-inline">
             <input type="radio" id="customRadioInline2" name="userType" class="custom-control-input" value="1" checked>
             <label class="custom-control-label" for="customRadioInline2">User</label>
           </div>
         </div>
         <div class="form-group">
           <label>Email</label>
           <input type="email" name="email" class="form-control" placeholder="Email" required>
         </div>
         <div class="form-group">
           <label>Password</label>
           <input type="password" name="password" class="form-control" placeholder="Password" required>
         </div>
         <div class="col-xs-4">
           <center> <button type="submit" class="btn btn-primary btn-block btn-flat w-50 my-4">Sign In</button></center>
           <label>
             <a style="cursor: pointer;" href="register">
               <p> Create Your Account</p>
             </a>
           </label>
         </div>
       </form>
     </div>
   </div>
 </body>
 <?php
require_once "./views/dashboard/shared/footer.php";
?>