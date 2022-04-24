<?php  
	class AdminController {
     
		private $adminobj;
		public $admin;
         function __construct(){
         
			include 'model/Admin.php';
			$this->adminobj = new Admin();
		 }
     

		function dashboard() {
			require_once 'views/Admin/dashboard.php';
		}
		

		function order() {
			require_once 'views/Admin/neworder.php';
		}

		function totalorder() {
			$result = $this->adminobj->getTotalOrder();
			require_once 'views/Admin/totalorder.php';

		}

		function neworder() {
			require_once 'views/Admin/neworder.php';
		}

		function deliveredOrder() {
			require_once 'views/Admin/deliveredorder.php';
		}

		function product() {
			require_once 'views/Admin/products.php';
		}
		function addcomp()
		{
			
			require 'views/Admin/addcompany.php';
		}

		
         
		function addbottle()
		{
			require 'views/Admin/addbottle.php';
		}

		function totalRegUser()
		{
			$result = $this->adminobj->selectAllUser();
			include 'views/Admin/reguser.php';
		}
		 
		


		

		function updatebottle()
		{
			//receive wid here
			$wid = $_GET["wid"] ?? "";
			//send data to model
			$this->adminobj->wid =$wid;
			//calling update function
			$result =$this->adminobj->selectAllRecords();

			include "views/Admin/bottle.php";
		}

		function updatecompany()
		{
			//receive wid here
			$cid = $_GET["cid"] ?? "";
			//send data to model
			$this->adminobj->cid =$cid;
			//calling update function
			$result =$this->adminobj->selectRecords();

			include "views/Admin/company.php";
		}

		function result() {
			require_once 'views/Admin/report_result.php';
		}

		function companyaddition()
			       {
			        $this->adminobj->cname = $_POST['cname'];
					


			        
			        $result = $this->adminobj->addCompany();
			        if ($result == TRUE) {
			            echo "<script> alert ('Inserted Successfully!'); 
			            history.go(-1)
			           </script>";
			        } else {
			            echo "<script> alert ('Failed to Insert!'); 
			            history.go(-1)
			           </script>";
			        }
			    }

				function bottleaddition()
			       {
			        $this->adminobj->name = $_POST['aname'];
					$this->adminobj->qty = $_POST['qty'];
					$this->adminobj->price = $_POST['price'];
					$this->adminobj->wimage = $_POST['aimage'];
			       



			        
			        $result = $this->adminobj->addbottle();
			        if ($result == TRUE) {
			            echo "<script> alert ('Inserted Successfully!'); 
			            history.go(-1)
			           </script>";
			        } else {
			            echo "<script> alert ('Failed to Insert!'); 
			            history.go(-1)
			           </script>";
			        }
			    }
                
				public function UpdateData()
    {

        //send data to model */
        $this->adminobj->wid =  $_GET["wId"];
        $this->adminobj->comp_name = $_POST["name"];
        $this->adminobj->qty = $_POST["qty"];
        $this->adminobj->price = $_POST["price"];
		$this->adminobj->wimage = $_POST["image"];


        //calling insert function
        $result = $this->adminobj->updatebottle();
        if ($result == TRUE) {
            echo "<script> alert ('Updated Successfully!'); 
                   history.go(-1)
                   </script>";
        } else {
            echo "<script> alert ('Failed to Update!'); 
                
                     </script>";
        }
    }

	public function Updatecom()
    {

        //send data to model */
        $this->adminobj->cid =  $_GET["cId"];
        $this->adminobj->cname = $_POST["cname"];
       

        //calling insert function
        $result = $this->adminobj->updatecompany();
        if ($result == TRUE) {
            echo "<script> alert ('Updated Successfully!'); 
                   history.go(-1)
                   </script>";
        } else {
            echo "<script> alert ('Failed to Update!'); 
                
                     </script>";
        }
    }

	public function Delete()
    {
        //receive cid here
        $cid = $_GET["cid"];
        //send data to model
        $this->adminobj->cid = $cid;

        //calling delete function 
        $result = $this->adminobj->deleteRecord();
        if ($result == TRUE) {
            echo "<script> alert ('Deleted Successfully!'); 
            history.go(-1)
            </script>";
        } else {
            echo "<script> alert ('Failed to Delete!'); 
            history.go(-1)
            </script>";
        }
    }

	public function Deleteproduct()
    {
        //receive cid here
        $wid = $_GET["wid"];
        //send data to model
        $this->adminobj->wid = $wid;

        //calling delete function 
        $result = $this->adminobj->deleteBottle();
        if ($result == TRUE) {
            echo "<script> alert ('Deleted Successfully!'); 
            history.go(-1)
            </script>";
        } else {
            echo "<script> alert ('Failed to Delete!'); 
            history.go(-1)
            </script>";
        }
    }
				
}
?>