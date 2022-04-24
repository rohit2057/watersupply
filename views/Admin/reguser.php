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

	<section id="main" class="mx-lg-5 mx-md-2 mx-sm-2">
        <div class="d-flex flex-row justify-content-between">
            <h2 class="my-3">All Users</h2>
       </div>
        
		<base href="//">
<div class="content">
    <div class="container">
       <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">Total registered user:</div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">sn</th>
                                        <th scope="col">username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
										<th scope="col">address</th>
                                   </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    $sn = 1;
                                    $numRows = mysqli_num_rows($result);
                                    $mydetails = $result->fetch_assoc();
                                    foreach ($result as $row) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo $sn; ?></td>
                                            <td class="text-center"><?php echo $row['uname']; ?></td>
                                            <td class="text-center"><?php echo $row['uemail']; ?></td>
                                            <td class="text-center"><?php echo $row['uphone']; ?></td>
											<td class="text-center"><?php echo $row['uaddress']; ?></td>
										                                       
                                          
                        </div>
                    </div>
                </div>
                </td>
                </tr>

            <?php $sn++;
                                    }
            ?>
            </tbody>
            </table>
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