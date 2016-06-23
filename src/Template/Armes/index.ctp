
<div class="armes index large-10 medium-10 columns content">
    <h3 style="float:left"><?= __('Armes') ?></h3>
    <div style="float:right"><?= $this->Html->link(__('Nouvelle Arme'), ['action' => 'add'],['class'=>'button']) ?></div>
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
