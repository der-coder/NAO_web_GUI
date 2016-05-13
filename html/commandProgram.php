<?php include 'connection.php';?>
<?php include 'header.php';?>
<body>
<?php include 'banner.php';?>
<?php include 'comandos.php';?>

<ul>
<li><a href="?command=PLAY_PROGRAM&params='{\'name\': \'Say\', \'data\': {\'text\':\'Peter Piper picked a peck of pickled peppers. A peck of pickled peppers Peter Piper picked. If Peter Piper picked a peck of pickled peppers. Where’s the peck of pickled peppers Peter Piper picked?\'}}'"><img src="static/choregraphe-icons/box/interaction/say.png"></a>

<li><a href="?command=PLAY_PROGRAM&params='{\'name\': \'Walk to\', \'data\': {\'theta\':0.0,\'x\':0.3,\'arms\':True,\'y\':0.2}}'"><img src="static/choregraphe-icons/box/movement/walk_forward.png"></a>

<li><a href="?command=SET_LIFE_STATE&params='disabled'"><img src="static/choregraphe-icons/box/wait.png"></a>

</ul>
</body>
</html>
