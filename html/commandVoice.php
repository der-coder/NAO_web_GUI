<?php include 'connection.php';?>
<?php include 'header.php';?>
<body>
<?php include 'banner.php';?>
<?php include 'comandos.php';?>
<ul class="voice">
<li><a href="?command=SAY&params=['Hello Bats']"><img src="static/choregraphe-icons/box/interaction/say.png"></a>
</ul>
  <form action="?command=SAY&params=['Hello Bats']" method="post">
    <input name="?command=SAY&params=" value="['hello']"/>

    <input type="submit" name="" 
           value=""/>

    </form>
</body>

</html>
