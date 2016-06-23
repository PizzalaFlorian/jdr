
<div class="ecoles index large-10 medium-10 columns content">
    <div style="overflow:hidden;">
        <div style="float:left">
             <h3><?= __('Ecoles') ?></h3>
        </div>
        <div style="float:right">
            <?= $this->Html->link(__('Ajouter une Ecole'), ['action' => 'add'],['class'=>'button']) ?>
        </div>
    </div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nom') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ecoles as $ecole): ?>
            <tr>
                <td><?= $this->Number->format($ecole->id) ?></td>
                <td><?= h($ecole->nom) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ecole->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ecole->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ecole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ecole->id)]) ?>
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
