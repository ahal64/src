<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Agencystaff'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="agencystaffs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('agencystaffid') ?></th>
            <th><?= $this->Paginator->sort('firstname') ?></th>
            <th><?= $this->Paginator->sort('lastname') ?></th>
            <th><?= $this->Paginator->sort('mobile') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($agencystaffs as $agencystaff): ?>
        <tr>
            <td><?= $this->Number->format($agencystaff->agencystaffid) ?></td>
            <td><?= h($agencystaff->firstname) ?></td>
            <td><?= h($agencystaff->lastname) ?></td>
            <td><?= h($agencystaff->mobile) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $agencystaff->agencystaffid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agencystaff->agencystaffid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agencystaff->agencystaffid], ['confirm' => __('Are you sure you want to delete # {0}?', $agencystaff->agencystaffid)]) ?>
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
