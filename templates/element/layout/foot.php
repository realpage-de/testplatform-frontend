<?php
echo $this->Html->script(['https://code.jquery.com/jquery-3.2.1.slim.min.js']);
echo $this->Html->script(['https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js']);
echo $this->Html->script(['https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js']);

echo $this->fetch('script');