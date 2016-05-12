<?php echo '
<ul class="command-classes">
<li><a href="#" onclick="toggle_visibility('LED'),">LED/a>
';?>

<?php include 'commandLED.php' ?>

<?php echo '<li><a href="#" onclick="toggle_visibility('movement');">Movement</a>';?>
<?php include 'commandVoice.php' ?>

<?php echo '<li><a href="#" onclick="toggle_visibility('voice');">Voice</a>';?>
<?php include 'commandMovement.php' ?>
<?php echo '</ul>';?>
