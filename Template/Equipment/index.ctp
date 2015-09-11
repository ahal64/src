<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="equipment index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('equipid') ?></th>
            <th><?= $this->Paginator->sort('eqtypeid') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('notes') ?></th>
            <th><?= $this->Paginator->sort('installationdate') ?></th>
            <th><?= $this->Paginator->sort('existing_or_required') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($equipment as $equipment): ?>
        <tr>
            <td><?= $this->Number->format($equipment->equipid) ?></td>
            <td><?= $this->Number->format($equipment->eqtypeid) ?></td>
            <td><?= h($equipment->name) ?></td>
            <td><?= h($equipment->notes) ?></td>
            <td><?= h($equipment->installationdate) ?></td>
            <td><?= h($equipment->existing_or_required) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $equipment->equipid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipment->equipid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipment->equipid], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->equipid)]) ?>
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
