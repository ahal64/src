<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Equ Prop'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="equProp index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('equipid') ?></th>
            <th><?= $this->Paginator->sort('propertiesid') ?></th>
            <th><?= $this->Paginator->sort('duedate') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($equProp as $equProp): ?>
        <tr>
            <td><?= $this->Number->format($equProp->id) ?></td>
            <td><?= $this->Number->format($equProp->equipid) ?></td>
            <td><?= $this->Number->format($equProp->propertiesid) ?></td>
            <td><?= h($equProp->duedate) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $equProp->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equProp->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equProp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equProp->id)]) ?>
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
