<?php include 'connection.php';?>
<?php include 'header.php';?>
<body>
<?php include 'banner.php';?>
<?php include 'comandos.php';?>
<ul class="voice">
<li><a href="?command=CMDSAY&params=$parameters"><img src="static/choregraphe-icons/box/interaction/say.png"></a>
</ul>
  <form action="?command=CMDSAY&params=$parameters" method="get">
    <input name="parameters"  value="Hello"/>

    <input type="submit" name="my_form_submit_button" 
           value=""/>

    </form>
</body>

</html>
