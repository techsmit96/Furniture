<?php
session_start();
if($_SESSION["pay"]=="")
{
	?>
	<script>
		window.location="index.php";
	</script>
		
	<?php
}
$_SESSION["paypalphp"]="yes";
?>
<h1>Please wait we are transferring you in paypal....</h1>
<?php
$paypal_url = 'https://www.sandbox.paypal.com/';
$pay = $_SESSION["pay"];
$order_id = $_SESSION["order_id"];
?>
<form action="<?php echo $paypal_url;?>/cgi-bin/webscr" method="post" name="buyCredits" id="buyCredits">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="business" value="sumitsakpal02@gmail.com">
	<input type="hidden" name="currency code" value="USD">
	<input type="hidden" name="item_name" value="payment for testing">
	<input type="hidden" name="item_number" value="1212">
	<input type="hidden" name="amount" value="<?php echo $pay; ?>">
	<input type="hidden" name="return" value="http://localhost/furniture/user/payment_success.php?id=<?php echo $order_id; ?>">
	
</form>
<script type="text/javascript">
	document.getElementById("buyCredits").submit();
	
</script>