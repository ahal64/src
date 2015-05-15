<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Occupant'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="occupants index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('occid') ?></th>
            <th><?= $this->Paginator->sort('firstname') ?></th>
            <th><?= $this->Paginator->sort('lastname') ?></th>
            <th><?= $this->Paginator->sort('address1') ?></th>
            <th><?= $this->Paginator->sort('address2') ?></th>
            <th><?= $this->Paginator->sort('mobile') ?></th>
            <th><?= $this->Paginator->sort('officephone') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($occupants as $occupant): ?>
        <tr>
            <td><?= $this->Number->format($occupant->occid) ?></td>
            <td><?= h($occupant->firstname) ?></td>
            <td><?= h($occupant->lastname) ?></td>
            <td><?= h($occupant->address1) ?></td>
            <td><?= h($occupant->address2) ?></td>
            <td><?= h($occupant->mobile) ?></td>
            <td><?= h($occupant->officephone) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $occupant->occid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $occupant->occid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $occupant->occid], ['confirm' => __('Are you sure you want to delete # {0}?', $occupant->occid)]) ?>
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
