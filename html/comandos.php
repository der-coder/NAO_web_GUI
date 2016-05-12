<?php echo '
<ul class="command-classes">
<li><a href="#" onclick="toggle_visibility('LED');">LED/a>
';?>

<?php include 'commandLED.php' ?>

<?php echo '<li><a href="#" onclick="toggle_visibility('movement');">Movement</a>';?>
<?php include 'commandVoice.php' ?>

<?php echo '<li><a href="#" onclick="toggle_visibility('voice');">Voice</a>';?>
<?php include 'commandMovement.php' ?>
<?php echo '</ul>';?>



//<li><a href="?command=CMDGETPROGRAMSTATUS&params="></a>
//<li><a href="?command=CMDMEMORYEVENTADD&params="></a>
//<li><a href="?command=CMDMEMORYEVENTRAISE&params="></a>
//<li><a href="?command=CMDMEMORYEVENTREMOVE&params="></a>
//<li><a href="?command=CMDPLAYPROGRAM&params="></a>
//<li><a href="?command=CMDSETJOINTSTIFFNESS&params="></a>
//<li><a href="?command=CMDSETJOINTSTIFFNESS&params="></a>
//<li><a href="?command=CMDSETLIFESTATE&params="></a>
//<li><a href="?command=CMDSETNAONAME&params="></a>
//<li><a href="?command=CMDSETPLAYERVOLUME&params="></a>
//<li><a href="?command=CMDSETSPEECHVOICE&params="></a>
//<li><a href="?command=CMDSETSYSTEMVOLUME&params="></a>
//<li><a href="?command=CMDVELOCITYWALK&params="></a>
//<li><a href="?command=LED_SETEYE&params="></a>
