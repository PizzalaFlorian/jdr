<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Arme'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="armes index large-9 medium-8 columns content">
    <h3><?= __('Armes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('personnages_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('cdt') ?></th>
                <th><?= $this->Paginator->sort('dura') ?></th>
                <th><?= $this->Paginator->sort('nom') ?></th>
                <th><?= $this->Paginator->sort('degat') ?></th>
                <th><?= $this->Paginator->sort('munition') ?></th>
                <th><?= $this->Paginator->sort('composante') ?></th>
                <th><?= $this->Paginator->sort('porte') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($armes as $arme): ?>
            <tr>
                <td><?= $arme->has('personnage') ? $this->Html->link($arme->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $arme->personnage->id]) : '' ?></td>
                <td><?= $this->Number->format($arme->id) ?></td>
                <td><?= $this->Number->format($arme->cdt) ?></td>
                <td><?= $this->Number->format($arme->dura) ?></td>
                <td><?= h($arme->nom) ?></td>
                <td><?= h($arme->degat) ?></td>
                <td><?= h($arme->munition) ?></td>
                <td><?= h($arme->composante) ?></td>
                <td><?= h($arme->porte) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $arme->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $arme->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $arme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arme->id)]) ?>
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
