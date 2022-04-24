<link rel="stylesheet" type="text/css" href="/watersupply/libraries/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="/watersupply/libraries/jquery/jquery.min.js">
</script>
<script type="text/javascript" src="/watersupply/libraries/bootstrap/js/bootstrap.min.js"></script>

<?php
require 'views/dashboard/shared/usermenu.php';
?>


<div class="container">
    <div class="page-title">
        <h3>New Registration</h3>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">New Registration:</div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th scope="col">sn</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Order Status</th>
                                    <th scope="col"> View Details</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once "./views/dashboard/shared/footer.php";
?>