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



<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <form method="POST" action="Admin/companyaddition" enctype="multipart/form-data">
                <div class="modal-body border-none">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="company name">Company Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="company name" required=""
                                        id="name" name="cname" />
                                </div>
                            </div>
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