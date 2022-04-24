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

    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        

                        <h1 class="mt-4">order reports:</h1>
                        <div class="card mb-4">
                     <form method="post" name="report" action="admin/result" >
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                    <th>From Date</th>
                                       <td><input class="form-control" id="fromdate" name="fromdate" type="date" value="" required /></td>
                                   </tr>
                                   <tr>
                                       <th>To Date</th>
                                       <td><input class="form-control" id="todate" name="todate" type="date" value=""  required /></td>
                                   </tr>
                                      
                  
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>


                    </div>
                </main>
     


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