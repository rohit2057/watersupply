<!-- You should use these code for every page bacuse every page has different title -->
<!DOCTYPE html>
<html>
<head>
	<title>Order Page</title>
	<base href="/watersupply/">
	<!-- Links -->
	<?php 
		require_once 'shared/linkstop.php';
	?>
</head>
<body>


	<!-- Reusable sidebar and Navbar -->
	<?php 
		// sidebar
		require_once 'shared/sidebar.php';

		// navbar
		require_once 'shared/navbar.php';

	?>
	<!-- Code for every page ends here -->

	<!-- This is the place where you write your custom page -->
	<!-- ***************************************************************************************Startttttttttttttttttt*********************************************************************** -->


	<div class="container">

<main>
    <div class="container-fluid">
        <div class="container-fluid">

            <form class="mt-3" method="POST" action="Admin/bottleaddition">

                <h3 align="center">add bottle</h3>

                
                <div class="row">
                            <div class="col">
                                <label for="photo"> bottle Image:</label><br>
                                <img class="img w-25 mb-2 rounded" src="../images/" alt="">
                                <input type="file" class="form-control-file is-valid" id="image" name="aimage" accept=".png , .jpeg , .jpg" />
                            </div>
                 </div>
               
                <br>
                <br>


                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="companyname">company Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="aname" placeholder="product company" required=""
                                id="name" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="qty">quantity<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="qty" placeholder="quantaty" required=""
                                id="name" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="price">price<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="price" placeholder="product price" required=""
                                id="fullname" />
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col">
                        <input type="submit" name="insert" value="add" class="btn btn-primary" />
                       
                    </div>

                </div>
            </form>
        </div>
    </div>
</main>

</div>



	<!-- ********************Endddddddddddddddddd*************************************************************************************** -->
	<!-- From here custom code ends here i mean everything should write between start and end -->

	<!-- closing div of wrapper of sidebar -->
		</div>
	</div>

	<!-- JS Linking -->
	<?php 
		require_once 'shared/linksbottom.php';
	?>
</body>
</html>