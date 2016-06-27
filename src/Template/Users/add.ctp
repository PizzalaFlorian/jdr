
<div class="users form large-10 medium-10 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Ajouter un Utilisateur') ?></legend>
        <?php
            echo $this->Form->input('login',['type'=>'text','required'=>true]);
            echo $this->Form->input('password');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Ajouter')) ?>
    <?= $this->Form->end() ?>
</div>
