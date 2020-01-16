<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$appDescription = 'JobBoard';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
        <?= $appDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('fontawesome.min.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body class="bg-light">
    <div class="container bg-white px-3 px-sm-4 px-md-5 pt-2 pt-md-4">
        <?php
        $controller = $this->request->getParam('controller');
        $action = $this->request->getParam('action');
        ?>
        <nav class="navbar navbar-expand-md navbar-light bg-transparent row no-gutters flex-wrap p-0">
            <div class="col-8 order-1 order-md-1">
                <?= $this->Html->link(
                    'Job<span class="text-primary">Board</span>', 
                    ['controller' => 'Jobs', 'action' => 'index'], 
                    ['escape' => false, 'class' => 'navbar-brand text-dark mr-0']
                ) ?>
            </div>
            <div class="col-4 d-md-none text-right order-2 order-md-2">
                <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#top-nav" aria-controls="top-nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-12 col-md-2 d-flex justify-content-end align-items-center mt-4 mt-md-0 ml-md-auto order-4 order-md-3">
                <?= $this->Html->link(
                    '<i class="fas fa-plus"></i> ' . __('Add Job'), 
                    ['controller' => 'Jobs', 'action' => 'add'], 
                    ['escape' => false, 'class' => 'btn btn-block btn-primary']
                ) ?>
            </div>
            <div class="col-12 collapse navbar-collapse bg-light rounded order-3 order-md-4" id="top-nav">
                <ul class="navbar-nav mr-auto mt-0">
                    <li class="nav-item <?= $controller === 'Jobs' && $action === 'index' ? 'active' : '' ?>">
                        <?= $this->Html->link(
                            '<i class="fas fa-home mr-1"></i>' . __('Home'), 
                            ['controller' => 'Jobs', 'action' => 'index'], 
                            ['escape' => false, 'class' => 'nav-link px-3 py-2 p-md-3']
                        ) ?>
                    </li>
                    <li class="nav-item <?= $controller === 'Jobs' && $action === 'browse' ? 'active' : '' ?>">
                        <?= $this->Html->link(
                            '<i class="fas fa-briefcase mr-1"></i>' . __('Browse Jobs'), 
                            ['controller' => 'Jobs', 'action' => 'browse'], 
                            ['escape' => false, 'class' => 'nav-link px-3 py-2 p-md-3']
                        ) ?>
                    </li>
                    <?php if (is_null($this->request->session()->read('Auth.User'))) : ?>
                        <li class="nav-item <?= $controller === 'Users' && $action === 'register' ? 'active' : '' ?>">
                            <?= $this->Html->link(
                                '<i class="fas fa-user mr-1"></i>' . __('Register'), 
                                ['controller' => 'Users', 'action' => 'register'], 
                                ['escape' => false, 'class' => 'nav-link px-3 py-2 p-md-3']
                            ) ?>
                        </li>
                        <li class="nav-item <?= $controller === 'Users' && $action === 'login' ? 'active' : '' ?>">
                            <?= $this->Html->link(
                                '<i class="fas fa-key mr-1"></i>' . __('Login'), 
                                ['controller' => 'Users', 'action' => 'login'], 
                                ['escape' => false, 'class' => 'nav-link px-3 py-2 p-md-3']
                            ) ?>
                        </li>
                    <?php else: ?>
                        <li class="nav-item <?= $controller === 'Users' && $action === 'logout' ? 'active' : '' ?>">
                            <?= $this->Html->link(
                                '<i class="fas fa-sign-out-alt mr-1"></i>' . __('Logout'), 
                                ['controller' => 'Users', 'action' => 'logout'], 
                                ['escape' => false, 'class' => 'nav-link px-3 py-2 p-md-3']
                            ) ?>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </nav>

        <?php if ($this->fetch('showSearch') == true): ?>
            <?= $this->element('Jobs/search') ?>
        <?php endif; ?>

        <div id="content" class="my-5">
            <?php if ($this->fetch('showCategories') == true): ?>
                <?php if ($categories): ?>
                    <div id="category_block" class="mb-5">
                        <div class="row">
                            <?php foreach ($categories as $id => $category): ?>
                                <div class="col-md-3 my-1">
                                    <?= $this->Html->link($category, ['action' => 'browse', $id]) ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?= $this->Flash->render() ?>

            <main role="main">
                <div class="row">
                    <div class="col">
                        <?= $this->fetch('content') ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </main>
        </div><!-- /#content -->

        <footer class="p-4 text-center">
            <p>Copyright &copy; <?= date("Y") ?>, JobBoard - All Rights Reserved</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>
    </div><!-- /.container -->

    <!-- JavaScript -->
    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('popper.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>

</body>

</html>
