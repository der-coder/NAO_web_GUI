<?php include 'connection.php';?>
<?php include 'header.php';?>
<body>
<?php include 'banner.php';?>
<?php include 'comandos.php';?>
<ul class="voice">
<li><a href="?command=SAY&params=['Hello Bats']"><img src="static/choregraphe-icons/box/interaction/say.png"></a>
</ul>
<form action="?command=SAY&params=['I believe I can fly']" method="post">
<!--<form action="foobar_submit.php" method="post">-->
    <input name="parameters" value="['I believe I can fly']"/>

    <input type="submit" name="" 
           value=""/>
    </form>
</body>

</html>
