<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ecole->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ecole->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ecoles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ecoles form large-9 medium-8 columns content">
    <?= $this->Form->create($ecole) ?>
    <fieldset>
        <legend><?= __('Edit Ecole') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
