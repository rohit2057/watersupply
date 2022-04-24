<!-- You should use these code for every page bacuse every page has different title -->
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<base href="/watersupply/">
	<!-- Links -->
	<?php 
		require_once 'shared/linkstop.php';
	?>
    <style type="text/css">
        body {
            height: 100vh;
        }

 

#card-container {
    height: 75vh;
    padding-left: 8px;
    justify-content: center;
    align-items: center; 
} 

 

#card-container > div {
    height: 10em;
}

 

.box {
    border-radius: 4% !important;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transition: all 0.3s ease-in-out;
}
.box:hover {

    background: #CD38E3!important;
    color: white;
}
    </style>
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
	
    <!-- Status box for dashboard -->
    <div id="status-box-container"class="container shadow p-3 rounded">
        <div id="card-container" class="row">
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="w-75 h-100 bg-primary shadow text-center box">
                    <h1></h1>
                    <h5 class="font-weight-bold text-uppercase"> <a href="./Admin/totalorder">Total Order </a></h5>
                 
                </div>
            </div>
           
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="w-75 h-100 bg-primary shadow text-center box">
                    <h1></h1>
                    <h5 class="font-weight-bold text-uppercase">Total accept order</h5>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="w-75 h-100 bg-primary shadow text-center box">
                    <h1></h1>
                    <h5 class="font-weight-bold text-uppercase">Total delivered order</h5>
                    
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="w-75 h-100 bg-primary shadow text-center box">
                    <h1></h1>
                    <h5 class="font-weight-bold text-uppercase">Total cancel order</h5>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="w-75 h-100 bg-primary shadow text-center box">
                    <h1></h1>
                    <h5 class="font-weight-bold text-uppercase"> <a href="./Admin/updatecompany">Total company </a></h5>
                    <?php //echo $this->adminobj->TotalCompanyCount()['number']; ?></h5> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>







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