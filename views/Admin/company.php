<!-- You should use these code for every page bacuse every page has different title -->
<!DOCTYPE html>
<html>

<head>
    <title>Company</title>
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
            <h2 class="my-3">All company</h2>
            <a class="btn btn-secondary align-self-center d-block" href="admin/addcomp">Add New company</a>
        </div>

        <base href="//">
        <div class="content">
            <div class="container">
                <div class="page-title">
                    <h3>Manage company</h3>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">Update company:</div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">sn</th>
                                                <th scope="col">company name</th>


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
                                                    <td class="text-center"><?php echo $row['cname']; ?></td>

                                                    <td>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target="#company<?php echo $row['cid'] ?>"> Update </a>
                                                        <a class="btn btn-danger" href="Admin/Delete?cid=<?php echo $row['cid'] ?>" onClick="return confirm('Do you want to Delete? Y/N')"> Delete </a>
                                                    </td>




                                                    <div class="modal fade" id="company<?php echo $row['cid']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <!-- form -->
                                                                <form action="Admin/Updatecom?cId=<?php echo $row['cid'] ?>" method="POST">
                                                                    >
                                                                    <div class="modal-body">
                                                                        <!-- input -->
                                                                        <div class="modal-body border-none">
                                                                            <div class="card-body p-0">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="form-group">
                                                                                            <label for="company name">company Name: </label>
                                                                                            <input type="text" class="form-control" placeholder="name" required="" id="name" name="cname" maxlength="30" value="<?php echo $row['cname'] ?>" />

                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- input -->
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <input type="submit" name="updatecom" value="updatecom" class="btn btn-success">
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