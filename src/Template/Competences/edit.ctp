<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $competence->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $competence->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Competences'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="competences form large-9 medium-8 columns content">
    <?= $this->Form->create($competence) ?>
    <fieldset>
        <legend><?= __('Edit Competence') ?></legend>
        <?php
            echo $this->Form->input('nom');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
