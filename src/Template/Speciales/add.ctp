<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Speciales'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="speciales form large-9 medium-8 columns content">
    <?= $this->Form->create($speciale) ?>
    <fieldset>
        <legend><?= __('Add Speciale') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
