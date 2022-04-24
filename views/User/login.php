 <link rel="stylesheet" type="text/css" href="/watersupply/libraries/bootstrap/css/bootstrap.min.css">
   <script type="text/javascript" src="/watersupply/libraries/boostrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="/watersupply/libraries/boostrap/js/bootstrap.min.js"></script>

<body class="bg-primary shadow">
      <div class="container-fluid bg-primary shadow" style="margin-top: 10%;">
         <div class="container">
                <div class="form-container bg-light" style=" border: 2px solid black;padding: 40px; margin-left:30%; margin-right:30%;">
                  <form method="POST" action="User/LoginCheck">
                    <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                     </div>
                     <div class="form-group">
                     <label>Password</label>
                     <input type="password"name="password"  class="form-control" placeholder="Password" required>
                     </div>
                     <div class="col-xs-4">
                     <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                   </div> 
                     
          			</form>
                  </div>
            </div>
        
      </div>
     
   </body>