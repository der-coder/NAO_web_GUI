<?php include 'connection.php';?>
<?php include 'header.php';?>

<navigation>
<?php include 'menu.php';?>
</navigation>


<ul class="led">
<li><a href="?command=LED_FLASH&params=">Flash LED</a>
<li><a href="?command=LED_HAPPY&params=">Happy LED</a>
<li><a href="?command=LED_LAUGH&params=">Laugh LED</a>
<li><a href="?command=LED_MISCHIEVIOUS&params=">Mischievious LED</a>
<li><a href="?command=LED_THINKING&params=">Thinking LED</a>
</ul>

<?php include 'footer.php';?>

</body>

</html>
