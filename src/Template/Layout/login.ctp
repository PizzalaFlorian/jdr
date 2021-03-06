<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Les Amis du JdR';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-2 medium-2 columns">
            <li class="name">
                <!--<h1><a href="">Jdr</a></h1>-->
                <?= $this->Html->image('logo.png') ?>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="center">
                <li>
                    <?= $this->Html->link(__('Accueil'), ['controller'=>'docs','action' => 'accueil']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('règles de jeu'), ['controller'=>'docs','action' => 'rules']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('lore de jeu'), ['controller'=>'docs','action' => 'lore']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('races jouables'), ['controller'=>'docs','action' => 'races']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('professions'), ['controller'=>'docs','action' => 'professions']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('feuilles personnages'), ['controller'=>'personnages','action' => 'index']) ?>
                </li>
                <?php
                    if(isset($_SESSION['Auth']['User'])){
                ?>
                <li>
                    <?= $this->Html->link(__('Inviter un utilisateur'), ['controller'=>'users','action' => 'add']) ?>
                </li>
                <?php
                    }
                ?>
            </ul>
            <ul class="right">
                <li><?= $this->Html->link(__('Deconnexion'), [
                'controller' => 'users',
                'action' => 'logout']) ?></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
