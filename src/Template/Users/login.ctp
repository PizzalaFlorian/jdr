<?php
	echo $this->Html->css("login");
?>

<div id="loginSite">
	<?= $this->Form->create() ?>
	<?= $this->Form->input('login',['label'=>false,'placeholder'=>"login"]) ?>
	<?= $this->Form->input('password',['label'=>false,'placeholder'=>"password"]) ?>
	<?= $this->Form->button('Login') ?>
	<?= $this->Form->end() ?>
</div>

