<?php
class Admin{

 private $conn;
    public function __construct(){
		require_once "services/config.php";
		$this->conn=Config::getConnection();
	}

   
        public function selectAllUser(){
            $sql="SELECT * FROM user ORDER BY id";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                return $result;
            }
        }

    public function addCompany()
    {   
         


        $sql = "INSERT INTO company(cname)
        VALUES('$this->cname')";
        $result = $this->conn->query($sql);
        return $result;
    }
   
    public function deleteRecord()
    {
        
        $sql = "DELETE FROM company WHERE cid='$this->cid'";
        $result = $this->conn->query($sql);
        return $result;
    }
 
    public function addbottle()
    {   
        
        $sql = "INSERT INTO waterbottle(comp_name,qty,price,wimage)
        VALUES('$this->name','$this->qty','$this->price','$this->wimage')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function deleteBottle()
    {
        
        $sql = "DELETE FROM waterbottle WHERE wid='$this->wid'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function selectAllRecords(){
        $sql="SELECT * FROM waterbottle  ORDER BY wid DESC";
        $result = $this->conn->query($sql);
        return $result;
    }


    public function selectRecords(){
        $sql="SELECT * FROM company  ORDER BY cid DESC";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function updatecompany()
    {
        $sql = "UPDATE company SET cname='$this->cname' WHERE cid='$this->cid'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function TotalCompanyCount()
    {
        $myQuery = $this->conn->query("SELECT COUNT(*) AS number FROM company");
        if ($myQuery) {
            return $myQuery->fetch_assoc();
        } else {
            return "Error";
        }
    }

    public function TotalOrderCount()
    {
        $myQuery = $this->conn->query("SELECT COUNT(*) AS number FROM order");
        if ($myQuery) {
            return $myQuery->fetch_assoc();
        } else {
            return "Error";
        }
    }

    public function getTotalOrder(){
        $myQuery = $this->conn->query("SELECT * FROM order");
        if ($myQuery) {
            return $myQuery->fetch_assoc();
        } else {
            return "error";
        }
    }



    public function updatebottle()
    {
        $sql = "UPDATE waterbottle SET comp_name='$this->comp_name',qty='$this->qty',price='$this->price',wimage='$this->wimage' WHERE wid='$this->wid'";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function companyCheck()
				{   
					$nameCheck = false;

					if (!empty($this->name)) {
						$nameCheck = true;
					}
					if ($nameCheck ) {
						return true;
					} else {
						return false;
					}
				}
              
            }

        