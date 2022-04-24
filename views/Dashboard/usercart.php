
<?php
require 'views/dashboard/shared/realuser.php';
?>

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
      while($row = $result->fetch_assoc()){
    ?> 
       <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/Watersupply/images/<?=$row['wimage']?>" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"> <?=$row['comp_name']?></a></h4>
                               <?php 
                                $stock=$row['qty'];
                                if ($stock>0)
                                {

                                
                                ?>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                                <?php } else{ 
                                    
                                    ?>
                                    <span>Status: </span><span class="text-primary"><strong>Out of Stock</strong></span>

                                    <?php } ?>
                            </div>
                        </div></td>
                        
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="<?=$row['quantity']?>">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?=$row['price']?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php
                           $res = $row['quantity'] * $row['price'] ;
                           echo $res;
                        ?></strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                        <a  href="../Dashboard/deleteCart?bid=<?php echo $row['cart_id'] ?>"> Delete </a>
                        </button></td>
                        </tr>
                        <?php } ?>
                    
                 
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$31.53</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart" ></span> <a href= "/watersupply/Dashboard/Home1"> Continue Shopping</a>
                        </button>
                       
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
require_once "./views/dashboard/shared/footer.php";
?>