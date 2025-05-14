<?php
 
//default argument

function getTicket($user ,$age) {
$ticket=rand(1,5000);
if($age>=35)
 {
 	$msg=" <h5>Hello ".$user."</h2> Your Age Is ".$age."<br>";
 	$msg.="You Are Qualified To Get a Ticket ,congrats :)<br>";
 	$msg.="Your Ticket ID Is [ <span id='m5'>".$ticket."</span> ]";
 }
 else
 {
    $msg="<h5>Hello ".$user."</h5> Your Age Is ".$age."<br>";
    $msg.="You Are Not Qualified To Get a Ticket ,sorry :( <br>";
 }

return $msg;
}





function mackFrame($element) {
	$frame="<div class='niceFrame'>";
	$frame.=$element;
	$frame.="</div>";
	return $frame;
}
$myelement=mackFrame("Mohamed");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Function Advanced</title>
	<style >
		body{
			background-color: darkgreen;
		}
		#m5 {
			color: red;
		}

		.niceFrame{

			padding: 10px;
			text-align: center;
			width: 400px;
			margin: 20px auto;
			border-radius: 10px;
			background-color:#EEE;
			border: 1px solic #CCC;
			font-family: Tahoma ,Arial;
			line-height: 2;

		}
	</style>
</head>
<body>
	<?php
	echo $myelement;
	echo mackFrame(getTicket("Aya",35));
	echo mackFrame(getTicket("Mohamed","45"));
	echo mackFrame(getTicket("Ahmed",18));

?>
</body>
</html>