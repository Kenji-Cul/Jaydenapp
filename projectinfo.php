<?php 

/**
/* Author : Teibo Gideon
/* Program : Pro19 Classes
/* Date: November 10, 2021
/*
*/

#include constants
include("signconstant.php");

class user{
	var $username;
	var $emailaddress;
	var $password;
    var $dbcon;

    function __construct(){
       //create object of MySqli class
		$this->dbcon = new MySqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
		//check if connection is okay
		if($this ->dbcon ->connect_error){
             die("Connection failed: ". $this ->dbcon-> connect_error);
		}else{
			// echo "connected successfully";
		}

	}

	function createUser($name, $emailaddress, $password){
		$date = 0000-00-00;
		$date = date('Y-m-d',strtotime($date));
 	   $password = md5($password);
 	//write SQL query
	$sql = "INSERT INTO user(username, email,password) VALUES('$name', '$emailaddress','$password')";

 	//run the query
	$result = $this->dbcon->query($sql);

 	//check if the query runs successfully
 	if($this->dbcon->affected_rows == 1){
             return "<div class='alert alert-success'><h2 align='center'>Thanks for Registering!</h2></div>";
 	}else{
 		return $this->dbcon->error;   //"<div class='alert alert-danger'><h2 align='center'>We were not able to add your information,Try again Later</h2></div>";
 	}
 }




function login($email,$password){
	$pwd="$password";
   //write the query
   $sql = "SELECT * FROM user WHERE email='$email' AND $password='$pwd'";

   $result =$this->dbcon->query($sql);
$row = $result->fetch_assoc();
   if($result->num_rows == 1){
      return $row;
   }else{
   	return $row;
   }
}

function sellerlogin($emailaddress,$password){
	$pwd=md5($password);

	$query= "SELECT * FROM seller WHERE seller_email='$emailaddress' && seller_password='$pwd'LIMIT 1";

	$result = $this->dbcon->query($query);
	$row = $result->fetch_assoc();
          if($result->num_rows == 1){
          	session_start();
          $_SESSION['email'] = $emailaddress;
  	       $_SESSION['nameuser'] = 'gideon';
             return true;
            }else{
       	return false;
           }
}

function checkemailaddress($emailaddress,$userid){
	$sql = "SELECT * FROM user WHERE email='$emailaddress' AND user_id !='$userid'";
	$result = $this->dbcon->query($sql);
	if($this->dbcon->affected_rows == 1){
      return true;
	}else{
		return $this->dbcon->error;
	}
}

function getuser($userid){
     //write the query
		$sql = "SELECT * FROM user WHERE user_id='$userid'";

		$result = $this->dbcon->query($sql);

		//fetch the row
		if($result->num_rows == 1){
			return $result->fetch_assoc();
		}else{
			$row = array();
			return $row;
		}
	}

function getusers(){
	$sql = "SELECT * FROM user WHERE users_id==2";

		$result = $this->dbcon->query($sql);

		//fetch the row
		if($result->num_rows == 1){
			return $result->fetch_assoc();
		}else{
			$row = array();
			return $row;
		}
}	

	function getproduct($productid){
     //write the query
		$sql = "SELECT * FROM product WHERE product_id='$productid'";

		$result = $this->dbcon->query($sql);

		//fetch the row
		if($result->num_rows == 1){
			return $result->fetch_assoc();
		}else{
			$row = array();
			return $row;
		}
	}


function addproduct($productname,$desc,$price,$category,$quantity){
	// create variables for image
	$filename = $_FILES['image']['name'];
	$filesize = $_FILES['image']['size'];
	$filetype = $_FILES['image']['type'];
	$file_error = $_FILES['image']['error'];
	$filetmp = $_FILES['image']['tmp_name'];
  // validate image
	if($file_error > 0){
		$error = "You have not selected a file";
		return $error;
	}

	if($filesize > 2097152){
		$error = "Your file should be less than 2mb";
		return $error;
	}

	$extensions = array("gif", "png", "jpeg", "svg", "jpg");
	$file_ext = explode(".",$filename);
	$file_ext = end($file_ext);

	if(!in_array(strtolower($file_ext), $extensions)){
		$error = $file_ext."File format not supported";
		return $error;
	}

	//upload image
	$folder = "uploads/";
	$newfilename = time().rand().".".$file_ext;
	$destination = $folder.$newfilename;

	if(move_uploaded_file($filetmp, $destination)){
	$sql = "INSERT INTO product(product_name,description,selling_price,category,quantity,product_piece) VALUES('$productname','$desc','$price','$category','$quantity','$newfilename')";
	$result = $this->dbcon->query($sql);
	if($result){
             return "<div class='alert alert-success'>Product added successfully</div>";
             $_SESSION['product_id'] = $this->dbcon->product_id;
 	}else{
 		return $this->dbcon->error;   
 	}
 }
}

function viewproduct($product){
	$sql ="SELECT * FROM product WHERE category = '$product'";
	$result = $this->dbcon->query($sql);
	$rows = array();
		if($this->dbcon->affected_rows > 0){
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}else{
			return $rows;
		}
}

function viewofproduct($product){
	$sql ="SELECT * FROM product WHERE category = '$product' LIMIT 8";
	$result = $this->dbcon->query($sql);
	$rows = array();
		if($this->dbcon->affected_rows > 0){
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}else{
			return $rows;
		}
}

function viewproducts(){
	$sql ="SELECT * FROM product";
	$result = $this->dbcon->query($sql);
	$rows = array();
		if($this->dbcon->affected_rows > 0){
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}else{
			return $rows;
		}
}


function viewuser(){
	$sql = "SELECT * FROM user";
	$result = $this->dbcon->query($sql);
	$rows = array();
		if($this->dbcon->affected_rows > 0){
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}else{
			return $rows;
		}

}
function deleteuser($userid){
	$sql = "DELETE FROM user WHERE user_id='$userid'";
	$result = $this->dbcon->query($sql);
		//fetch the row
		 $output= array();
      if($this->dbcon->affected_rows == 1){
      	$output['success'] = "Member details was successfully updated!";
      }elseif($this->dbcon->affected_rows == 0){
      	$output['success'] = "No Changes made!";
      }else{
      	$output['error']="Oops something happened";
      }
      return $output;

}

function deleteproduct($productid){
	$sql = "DELETE FROM product WHERE product_id='$productid'";
	$result = $this->dbcon->query($sql);
		//fetch the row
		 $output= array();
      if($this->dbcon->affected_rows == 1){
      	$output['success'] = "Member details was successfully updated!";
      }elseif($this->dbcon->affected_rows == 0){
      	$output['success'] = "No Changes made!";
      }else{
      	$output['error']="Oops something happened";
      }
      return $output;

}

function updateproduct($productname,$price,$productid){
	 $sql ="UPDATE product SET product_name='$productname',selling_price='$price'WHERE product_id='$productid'";
	$result = $this->dbcon->query($sql);
	if($result){
             return "<div class='alert alert-success'>Product updated successfully</div>";
 	}else{
 		return $this->dbcon->error;   
 	}
}

function viewofuser($user){
	$sql = "SELECT * FROM user WHERE email='$user'";
	$result = $this->dbcon->query($sql);
	$row = $result->fetch_assoc();
   if($result->num_rows == 1){
      return $row;
   }else{
   	return $row;
   }

}

function addorder($userid,$price,$name,$location){
	$datepaid = date('Y-m-d h:i:s');
	$sql ="INSERT INTO productorder(user_id,order_price,order_name,order_date,order_location) VALUES('$userid','$price','$name','$datepaid','$location')";
	$result = $this->dbcon->query($sql);
	if($result){
             return "<div class='alert alert-success'>Your order was successful</div>";
 	}else{
 		//return //$this->dbcon->error;   
 	}

}

function vieworders(){
	$sql = "SELECT * FROM productorder";
	$result = $this->dbcon->query($sql);
	$rows = array();
		if($this->dbcon->affected_rows > 0){
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}else{
			return $rows;
		}
}


}
?>