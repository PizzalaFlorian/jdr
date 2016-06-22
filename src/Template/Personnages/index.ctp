<?php
    echo $this->Html->css('main');
?>

<div class="personnages index large-10 medium-9 columns content">
    <div style="overflow:hidden;">
        <h3 class="center" style="float:left"><?= __('Personnages') ?></h3>
        <div style="float:right"><?= $this->Html->link(__('nouveau personnage'), ['action' => 'add'],['class'=>'button']) ?></div>
    </div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('prenom') ?></th>
                <th><?= $this->Paginator->sort('nom') ?></th>
                <th><?= $this->Paginator->sort('type_campagne') ?></th>
             
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personnages as $personnage): ?>
            <tr>
                <td><?= h($personnage->prenom) ?></td>
                <td><?= h($personnage->nom) ?></td>
                <td><?= h($personnage->type_campagne) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Feuille personnage'), ['action' => 'feuille', $personnage->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
