<?php include 'connection.php';?>
<?php include 'header.php';?>
<body>
<?php include 'banner.php';?>
<?php include 'comandos.php';?>
<ul class="voice">
<li><a href="?command=CMDSAY&params=$parameters"><img src="static/choregraphe-icons/box/interaction/say.png"></a>
</ul>
  <form action="foobar_submit.php" method="post">
    <input name="my_html_input_tag"  value="PILLS HERE"/>

    <input type="submit" name="my_form_submit_button" 
           value="Click here for penguins"/>

    </form>
</body>

</html>
