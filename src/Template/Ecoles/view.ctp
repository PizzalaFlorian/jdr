
<div class="ecoles view large-9 medium-8 columns content">
    <h3><?= h($ecole->id) ?></h3>
    <?= $this->Html->link(__('Retour'), ['action' => 'index']) ?>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($ecole->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ecole->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($ecole->description)); ?>
    </div>
</div>
