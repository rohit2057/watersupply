<?php
//session_start();

class DashboardController
{


   public function checkOut()
   {
      echo "<script> alert('ordered successfully') </script>";
       
      header('location: Home');
   

      
   }

  

   private $dbModelObj;
   function __construct()
   {
      require_once 'model/DashboardModel.php';
      $this->dbModelObj = new DashboardModel();
   }
   function Home()
   {
      $result = $this->dbModelObj->selectproduct();
      require_once "views/Dashboard/userdashboard.php";
      // echo "<script>location.href='dashbaord/home'</script>";
   }

   function aboutUs()
   {
      require_once 'views/Dashboard/aboutus.php';
   }

   function userAbout()
   {
      require_once 'views/Dashboard/useraboutus.php';
   }

   

  

   function Cart()
   {
      $result = $this->dbModelObj->selectCart();
      if($result == false){
         echo '

         <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
         <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover" >
                <thead style = " width:800px;">
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    
                   
       <tr style = "height: 400px;" > 
       <td></td>
       <td></td>
       <td></td>
       </tr>
                    
                   
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>$0.00</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>$0.00</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$0.00</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
         ';
      }else{
      require_once 'views/Dashboard/cart.php';
      }
     
      
   }

   function userCart()
   {
      $result = $this->dbModelObj->selectCart();
      if($result == false){
         echo '

         <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
         <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover" >
                <thead style = " width:800px;">
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    
                   
       <tr style = "height: 400px;" > 
       <td></td>
       <td></td>
       <td></td>
       </tr>
                    
                   
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>$0.00</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>$0.00</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$0.00</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
         ';
      }else{
      require_once 'views/Dashboard/cart.php';
      }
     
      
   }


   function addCart()
   {
     
      $pid = $_GET['pid'];
      $this->dbModelObj->addCart($pid);
      header('location: Home');
   }

   function OrderDetails()
   {
      require_once 'views/Dashboard/product.php';
   }
   function Register()
   {
      require_once "views/Dashboard/register.php";
   }
   function Userlogin()
   {
      require_once 'views/Dashboard/userlogin.php';
   }

   function deleteCart(){
      $bottle = $_GET['bid'];
      $this->dbModelObj->delCart($bottle);
      header('location: cart');
     


   }


   function LoginCheck()
   {
      $usertype = $_POST['userType'];
      $this->dbModelObj->loginType = $usertype;
      $this->dbModelObj->loginEmail = $_POST['email'];
      $this->dbModelObj->loginPassword = $_POST['password'];
      $result= $this->dbModelObj->validateloginData();
      if ( $result && $usertype == 0 ) { 
                    // echo 'admin';
                    header ('location: ../Admin/Dashboard');              
      } elseif ( $result && $usertype == 1){
         //echo 'customer'; 
         header('location:../Dashboard/Home1');

      }     else {
         header('location:../Dashboard/Home'); 

      }
   }

   function Home1()
   {
      //receive wid her
      //send data to model
      //$this->dbModelObj->wid =$wid;
      //calling update function
      $result = $this->dbModelObj->selectproduct();
      require_once "views/Dashboard/usersign.php";

   }

   function UserRegistration()
   {
      
       $this->dbModelObj->uname = $_POST['uname'];
       $this->dbModelObj->uemail = $_POST['uemail'];
       $this->dbModelObj->uphone = $_POST['uphone'];
       $this->dbModelObj->upassword = $_POST['upassword'];
       $this->dbModelObj->uaddress = $_POST['uaddress'];
       
       
      


       $result = $this->dbModelObj->UserRegistraionCheck();
       $result = $this->dbModelObj->userReg();
       
       if ($result == TRUE) {
           echo "<script> alert ('register Successfully.'); 
           history.go(-1)
          </script>";
       } else {
           echo "<script> alert ('Failed to register!'); 
           history.go(-1)
          </script>";
       }
   }
}
