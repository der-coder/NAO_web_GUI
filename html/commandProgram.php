<?php include 'connection.php';?>
<?php include 'header.php';?>
<body>
<?php include 'banner.php';?>
<?php include 'comandos.php';?>

<ul>
<!-- <li><a href="?command=PLAY_PROGRAM&params=">Play Program</a> 
<li><a href="?command=STOP_PROGRAM&params=">Stop Program</a> -->

<li><a href="?command=PLAY_PROGRAM&params='{\'name\': \'Say\', \'data\': {\'text\':\'Hello I am NAO.\'}}'"><img src="static/choregraphe-icons/box/movement/sit.png"></a>

<li><a href="?command=PLAY_PROGRAM&params='{\'name\': \'Walk to\', \'data\': {\'theta\':15.0,\'x\':0.2,\'arms\':True,\'y\':0.2}}'"><img src="static/choregraphe-icons/box/movement/sit.png"></a>

</ul>

</body>

</html>
