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
            <h2 class="my-3">All Products</h2>
            <a class="btn btn-secondary align-self-center d-block" href="admin/addbottle">Add New Product</a>
        </div>
        
		<base href="//">
<div class="content">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">Update product:</div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">sn</th>
                                        <th scope="col">company name</th>
                                        <th scope="col">qty</th>
                                        <th scope="col">price</th>
										<th scope="col">image</th>
                                        <th scope="col">Action</th>
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
                                            <td class="text-center"><?php echo $row['comp_name']; ?></td>
                                            <td class="text-center"><?php echo $row['qty']; ?></td>
                                            <td class="text-center"><?php echo $row['price']; ?></td>
											<td class="text-center"><?php echo $row['wimage']; ?></td>
                                            <td>
                                                <a class="btn btn-primary" data-toggle="modal" data-target="#waterbottle<?php echo $row['wid'] ?>"> Update </a>
                                                <a class="btn btn-danger" href="Admin/Deleteproduct?wid=<?php echo $row['wid'] ?>" onClick="return confirm('Do you want to Delete? Y/N')"> Delete </a>
                                            </td>




                                            <div class="modal fade" id="waterbottle<?php echo $row['wid']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <!-- form -->
                                                        <form action="Admin/UpdateData?wId=<?php echo $row['wid'] ?>" method="POST">
                                                            >
                                                            <div class="modal-body">
                                                                <!-- input -->
                                                                <div class="modal-body border-none">
                                                                    <div class="card-body p-0">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label for="company name">company Name: </label>
                                                                                    <input type="text" class="form-control" placeholder="name" required="" id="name" name="name" maxlength="30" value="<?php echo $row['comp_name'] ?>" />
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label for="quantaty">quantaty </label>
                                                                                    <input type="number" class="form-control" id="qty" name="qty" required="" placeholder="" value="<?php echo $row['qty'] ?>" />

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label for="price">price
                                                                                    </label>
                                                                                    <input type="number" class="form-control" name="price" id="price" placeholder="" required="" maxlength="1000" value="<?php echo $row['price'] ?>" />
        
                                                                                </div>
                                                                            </div>
                                                                        </div>
																		<div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label for="price">price
                                                                                    </label>
                                                                                    <input type="text" class="form-control" name="image" id="image" placeholder="" required="" maxlength="1000" value="<?php echo $row['wimage'] ?>" />
        
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                                <!-- input -->
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <input type="submit" name="updatedata" value="updatedata" class="btn btn-success">
                                                            </div>
                                                        </form>
                                                        <!-- form -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal for update -->

                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button> 
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>-->
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