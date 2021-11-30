<?php 
   #include constants file
   include_once("signconstant.php");

#Begin class payment
class Payment{
	//member variables/properties
	var $amount;
	var $emailaddress;
	var $dbconnect;  //database connection handler

	//member methods/functions
	function __construct(){
		$this->dbconnect = new MySqli(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);
		if($this->dbconnect->connect_error){
			die("There was a connection error".$this->dbconnect->connect_error);
		}else{
			// echo "You have been connected successfully";
		}
	}
	// First Leg :initialize paystack transaction method
	function initializePaystack($email,$amount){
        $url = "https://api.paystack.co/transaction/initialize";
        $reference = "ITP".time().rand();
        $callbackurl = "http://localhost/good/paystackcallback.php";

        $fields = [
    'email' => $email,
    'amount' => $amount * 100,
    'reference' => $reference,
    'callback_url' => $callbackurl
  ];
  $fields_string = http_build_query($fields);

  $secretkey = "sk_test_f573634d7c3451fe37a335d9bc66bf969cdbe1e4";

  // step 1: open connection, initialize curl session 
  $ch = curl_init();

  //step 2: //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer $secretkey",
    "Cache-Control: no-cache",
  ));
  
  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);


  // step 3: execute curl
  $response = curl_exec($ch);

  if (curl_error($ch)) {
  	echo curl_error($ch);
  }

  // step 4: close curl session
  curl_close($ch);

  // step 5: convert json to object
  $result = json_decode($response);
  return $result;
	}

	// insert payment transaction details
	function insertTransactionDetails($userid,$amount,$reference,$name,$address){
		$paymentmode="paystack";
		$transstatus = "pending";
		$dueyear = 2021;
		$datepaid = date('Y-m-d h:i:s');
        $sql ="INSERT INTO productorder(user_id,order_price,transref,transstatus,dueyear,order_date,paymentmode,order_location,order_name) values('$userid','$amount','$reference','$transstatus','$dueyear','$datepaid','$paymentmode','$address','$name')";

        $result = $this->dbconnect->query($sql);
        if($this->dbconnect->affected_rows == 1){
        	return true;
        }else{
        	return false;
        }
	}

// Second Leg
	// verify paystack transaction
	function verifyPaystack($reference){
		 $url = "https://api.paystack.co/transaction/verify/".$reference;
		 $secretkey = "sk_test_f573634d7c3451fe37a335d9bc66bf969cdbe1e4";

		 // step 1: open connection
		 $ch = curl_init();

		 // step 2: set curl options
		 curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "GET");
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer $secretkey",
    "Cache-Control: no-cache",
  ));
  
  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

  // step 3: execute curl
  $response = curl_exec($ch);

  if (curl_error($ch)) {
  	echo curl_error($ch);
  }

  // step 4: close curl session
  curl_close($ch);

  // step 5: convert json to object
  $result = json_decode($response);
  return $result;

	}

	// update payment transaction details
	function updateTransactionDetails($reference){
		
        $sql ="UPDATE productorder SET transstatus='completed' WHERE transref='$reference'";

        $result = $this->dbconnect->query($sql);
        if($this->dbconnect->affected_rows == 1){
        	return true;
        }else{
        	return false;
        }
	}

}
#end payment class
