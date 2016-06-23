
<div class="ecoles form large-10 medium-10 columns content">
    <?= $this->Form->create($ecole) ?>
    <fieldset>
        <legend><?= __('Ajouter une Ecole') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Ajouter')) ?>
    <?= $this->Html->link(__('Retour'), ['action' => 'index']) ?>
    <?= $this->Form->end() ?>
</div>
