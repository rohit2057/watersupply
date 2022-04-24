<?php
require 'views/dashboard/shared/usermenu.php';
?>

<section id="main" class="mx-lg-5 mx-md-2 mx-sm-2">
    <div class="d-flex flex-row justify-content-between">
        <h2 class="my-3">All Products</h2>
        <a class="btn btn-secondary align-self-center d-block" href="#">Add New Product</a>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Category</th>
                <th scope="col">Product Quantity</th>
                <th scope="col" class="d-none d-md-table-cell">Post Tags</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th>2</th>
                <td>Mountain Valley Sparkling Water</td>
                <td>sparkling water</td>
                <td>3</td>
                <td class="d-none d-md-table-cell">abcd</td>
                </td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>

</section>

</div>

<script type="text/javascript" src="/watersupply/libraries/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/watersupply/libraries/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>