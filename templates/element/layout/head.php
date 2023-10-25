<head>
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php echo $this->fetch('title'); ?></title>
    <!--<?php echo $this->Html->meta('icon'); ?>-->

    <?php echo $this->fetch('meta'); ?>
    <?php echo $this->Html->css(['https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css']); ?>
    <?php echo $this->Html->css(['frontend']); ?>
    <?php echo $this->fetch('css'); ?>
</head>