<div class="users form large-12 medium-12 columns content">
	<h1>Connexion</h1>
	<?= $this->Form->create() ?>
	<?= $this->Form->input('login') ?>
	<?= $this->Form->input('password') ?>
	<?= $this->Form->button('Login') ?>
	<?= $this->Form->end() ?>
</div>
