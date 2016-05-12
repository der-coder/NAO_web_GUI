<?php

$command = $_GET["command"];
$params = trim($_GET["params"]);

function receiveData($s){
	$buf = 'Este es mi buffer.';
	if (false !== ($bytes = socket_recv($s, $buf, 1024, MSG_WAITALL))) {
	    //echo "<br/>Leídos $bytes bytes desde socket_recv(). Cerrando el socket...: " . $buf;
	} else {
	    //echo "<br/>socket_recv() falló; razón: " . socket_strerror(socket_last_error($sock)) . "<br/>";
	}

}


$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

$sock_data = socket_connect($sock, "10.25.199.37", 5051) ; 
//Must find the possibility of inputing directly the ip of the NAO robot from the application

$msg = "{'command':'SYS_CONNECT', 'commandArguments':[]}\n";
$sock_data = socket_write($sock, $msg ,  1024);
receiveData($sock);
//$msg = "{'command':'SYS_SET_REQUIRED_DATA', 'commandArguments':['stiffnessData','masterVolume','playerVolume','lifeState']}\n";

$msg = "{'command':'$command', 'commandArguments':[$params]}\n";
$sock_data = socket_write($sock, $msg ,  1024);
receiveData($sock);
socket_close($sock); //Close socket 
?>


<!DOCTYPE html>
<html lang="en-US">
 <head>
 
 <title>NAO Remote Control</title>
 <link type="text/css" rel="stylesheet" href="static/css/main.css" />
 <meta charset="UTF-8">
 
 </head>

<body>

<navigation>
<?php include 'html/menu.php';?>
</navigation>

<?php include 'html/home.php';?>
<?php include 'html/comandos.php';?>

<?php include 'html/footer.php';?>

</body>

</html>
