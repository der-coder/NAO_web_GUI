<?php include 'connection.php';?>
<?php include 'header.php';?>
<body>
<?php include 'banner.php';?>
<?php include 'comandos.php';?>
<ul class="voice">
<li><a href="?command=CMDSAY&params=$parameters"><img src="static/choregraphe-icons/box/interaction/say.png"></a>
</ul>
  <form action="" method="get">
    <input name="?command=CMDSAY&params="  value="Hello"/>

    <input type="submit" name="" 
           value=""/>

    </form>
</body>

</html>
