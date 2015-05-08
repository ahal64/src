<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Landlord'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="landlords index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('landlordid') ?></th>
            <th><?= $this->Paginator->sort('firstname') ?></th>
            <th><?= $this->Paginator->sort('lastname') ?></th>
            <th><?= $this->Paginator->sort('address1') ?></th>
            <th><?= $this->Paginator->sort('address2') ?></th>
            <th><?= $this->Paginator->sort('mobile') ?></th>
            <th><?= $this->Paginator->sort('homephone') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($landlords as $landlord): ?>
        <tr>
            <td><?= $this->Number->format($landlord->landlordid) ?></td>
            <td><?= h($landlord->firstname) ?></td>
            <td><?= h($landlord->lastname) ?></td>
            <td><?= h($landlord->address1) ?></td>
            <td><?= h($landlord->address2) ?></td>
            <td><?= $this->Number->format($landlord->mobile) ?></td>
            <td><?= $this->Number->format($landlord->homephone) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $landlord->landlordid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $landlord->landlordid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $landlord->landlordid], ['confirm' => __('Are you sure you want to delete # {0}?', $landlord->landlordid)]) ?>
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
