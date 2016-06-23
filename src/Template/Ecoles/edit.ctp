
<div class="ecoles form large-10 medium-10 columns content">
    <?= $this->Form->create($ecole) ?>
    <fieldset>
        <legend><?= __('Edit Ecole') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier')) ?>
    <?= $this->Html->link(__('Retour'), ['action' => 'index'],['class'=>'button']) ?>
    <?= $this->Form->end() ?>
</div>
