<?php 
var_dump($_REQUEST);
include("paystackclass.php");

$payobj = new Payment;
$output = $payobj->verifyPaystack($_REQUEST['reference']);

if($output->data->status==='success'){
	$updatetrans=$payobj->updateTransactionDetails($_REQUEST['reference']);
	if($updatetrans===true){
		header("Location:showcart.php");
		$obj = new User;
		$product = deleteproduct($productId);
		exit;
	}
}
// echo "<pre>";
// print_r($output);
// echo "</pre>";
?>