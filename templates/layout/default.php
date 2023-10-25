<!DOCTYPE html>
<html lang="de">
<?php echo $this->element('layout/head'); ?>
<body>

<?php echo $this->element('layout/header'); ?>

<main>
    <?php echo $this->fetch('content'); ?>
</main>

<?php echo $this->element('layout/footer'); ?>

<?php echo $this->element('layout/foot'); ?>
</body>
</html>