<?php
session_start();
class DashboardModel
{
    public $loginEmail;
    public $loginPassword;
    public $loginType;

    private $conn;

    public function __construct()
    {
        require "services/config.php";
        $this->conn = Config::getConnection();
    }

    

    function selectCart()
    {
        $sql = "SELECT * from cart inner join waterbottle where cart.wid = waterbottle.wid";
        $res = $this->conn->query($sql);
        if($res->num_rows > 0)
        {
            return $res;
        }
        else
        {
            return false;
        }
    }

    public function validateloginData()
    {
        if ($this->loginType == 0) {
            $sql = "SELECT * FROM admin WHERE aemail='$this->loginEmail' AND apassword='$this->loginPassword'";
            $result = $this->conn->query($sql);
            // print_r($result);
            if ($result->num_rows == 1) {
                while ($row = $result->fetch_assoc()){
                    $_SESSION['aid'] = $row['id'];
                    return true;
                }
                
                
            } else {
                return false;
            }
        } else {

            $sql = "SELECT * FROM user WHERE uemail='$this->loginEmail' AND upassword='$this->loginPassword'";
            $result = $this->conn->query($sql);
            // print_r($result);
            if ($result->num_rows == 1) {
                while ($row = $result->fetch_assoc()){
                    $_SESSION['uid'] = $row['id'];
                    return true;
                }
                
                
            } else {
                return false;
            }
        }

    }

    public function delCart($bottle){
        $sql=" DELETE FROM `cart` WHERE `cart_id`= $bottle";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function selectproduct(){
        $sql="SELECT * FROM waterbottle ORDER BY wid";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
        }
    }

    public function allproduct(){
        $sql="SELECT * FROM waterbottle ORDER BY wid";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
        }
    }

    function addCart($pid)
    {
        $sql = "Insert into cart(wid,uid,quantity) values ('{$pid}','{$_SESSION['uid']}','1')";
        $res= $this->conn->query($sql);
        
    }

    

    public function checkOut($order_no,$id,$oddate)
    {   
         

        $sql = "INSERT INTO order (order_no,id,oddate) VALUES ('{$order_no}','{$id}','{$oddate}')";
        $result = $this->conn->query($sql);
        if($result){
           return true ; 
       }else
       {
        return false;
       }
       
    }

    public function userReg()
    {
 

        $sql = "INSERT INTO user(uname,uemail,uphone,upassword,uaddress)
        VALUES('$this->uname','$this->uemail','$this->uphone','$this->upassword','$this->uaddress')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function insertOrder()
    {
 


        $sql = "INSERT INTO order(oddate)
        VALUES('$this->oddate')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function UserRegistraionCheck()
    {   
        $unameCheck = false;
        $uemailCheck = false;
        $uphoneCheck= false;
        $upassword = false;
        $uaddress = false;
        

        if (!empty($this->uname)) {
            $unameCheck = true;
        }
        if (!empty($this->uemail)) {
            $uemailCheck = true;
        }
        
        
        if (!empty($this->uphone) && strlen($this->uphone) == 10) {
            $uphoneCheck = true;
        }
        if (!empty($this->upassword)) {
            $upasswordCheck = true;
        }
        
        if (!empty($this->uaddress)) {
            $uaddressCheck = true;
        }

       

        if ($unameCheck && $uemailCheck &&  $uphoneCheck && $upasswordCheck && $uaddressCheck) {
            return true;
        } else {
            return false;
        }
    }

}
