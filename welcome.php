<?php require_once ('header.php'); ?>

<h2 class="text-center">Welcome, <?= $_SESSION['name']; ?></h2>
<h2 class="text-center">Today date is <?= date('d-m-Y'); ?></h2>

<div class="text-center">
    <img src="welcome.gif" width="400" alt="Welcome">
</div>

<?php require_once ('footer.php'); ?>