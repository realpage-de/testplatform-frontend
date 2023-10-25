<?php
$uriPath = rtrim($this->request->getAttribute('base') . $this->request->getUri()->getPath(), '/');
?>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>"><?php echo $this->Html->image('logo.png'); ?></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <?php $url = $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>
                    <li class="nav-item<?php echo ($url === $uriPath ? ' active' : ''); ?>">
                        <a class="nav-link" href="<?php echo $url; ?>">Home</a>
                    </li>
                    <?php $url = $this->Url->build(['controller' => 'Pages', 'action' => 'howItWorks']); ?>
                    <li class="nav-item<?php echo ($url === $uriPath ? ' active' : ''); ?>">
                        <a class="nav-link" href="<?php echo $url; ?>">So funktionierts</a>
                    </li>
                    <?php $url = $this->Url->build(['controller' => 'Pages', 'action' => 'producttests']); ?>
                    <li class="nav-item<?php echo ($url === $uriPath ? ' active' : ''); ?>">
                        <a class="nav-link" href="<?php echo $url; ?>">Produkttests</a>
                    </li>
                    <?php $url = $this->Url->build(['controller' => 'Pages', 'action' => 'contact']); ?>
                    <li class="nav-item<?php echo ($url === $uriPath ? ' active' : ''); ?>">
                        <a class="nav-link" href="<?php echo $url; ?>">Kontakt</a>
                    </li>
                </ul>

                <?php if (!isset($_GET['true'])) { ?>
                    <ul class="navbar-nav">
                        <?php $url = $this->Url->build(['controller' => 'Pages', 'action' => 'login']); ?>
                        <li class="nav-item<?php echo ($url === $uriPath ? ' active' : ''); ?>">
                            <a class="nav-link" href="<?php echo $url; ?>">Login</a>
                        </li>
                        <?php $url = $this->Url->build(['controller' => 'Pages', 'action' => 'register']); ?>
                        <li class="nav-item<?php echo ($url === $uriPath ? ' active' : ''); ?>">
                            <a class="nav-link" href="<?php echo $url; ?>">Registrierung</a>
                        </li>
                    </ul>
                <?php } else { ?>
                    <ul class="navbar-nav proflie-dropdown btn-group">
                        <li class="nav-item d-inline">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mein Profil</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <img class="float-left" src="img/users/kolyan.jpg" alt=""/>
                                <p>Vorname Nachname</p>
                                <div class="dropdown-divider"></div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-secondary" href="#">Mein Profil</a>
                                    <a class="btn btn-danger" href="#">Logout</a>
                                </div>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start" aria-labelledby="dropdownMenuLink">test</div>
                        </li>
                    </ul>
                <?php } ?>

<!--
                <ul class="navbar-nav proflie-dropdown btn-group">
                    <li class="nav-item d-inline">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <img class="float-left" src="img/users/kolyan.jpg" alt="">
                    <p>Username</p>
                    <br>
                    <br>
                    <p class="float-left">Name</p>
                    <p>Surname</p>
                    <p>Status</p>
                  <div class="dropdown-divider"></div>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-secondary" href="#">Open Profile</a>
                    <a class="btn btn-danger" href="#">Exit</a>
                  </div>
                </div>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start" aria-labelledby="dropdownMenuLink" >
test
                        </div>
                    </li>
                </ul>
                -->

            </div>
        </nav>
    </div>
</header>