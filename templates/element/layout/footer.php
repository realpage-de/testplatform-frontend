<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6"><?php echo $this->Html->image('logo.png'); ?></div>
            <div class="col-md-3 d-none d-sm-block">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'howItWorks']); ?>">So funktionierts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'producttests']); ?>">Produkttests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'contact']); ?>">Kontakt</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="nav flex-column">
                <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'faq']); ?>">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'aboutUs']); ?>">Über uns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'contact']); ?>">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'imprint']); ?>">Impressum</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>