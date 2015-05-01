<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Agencygroup'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="agencygroups index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('agencygroupid') ?></th>
            <th><?= $this->Paginator->sort('groupname') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($agencygroups as $agencygroup): ?>
        <tr>
            <td><?= $this->Number->format($agencygroup->agencygroupid) ?></td>
            <td><?= h($agencygroup->groupname) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $agencygroup->agencygroupid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agencygroup->agencygroupid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agencygroup->agencygroupid], ['confirm' => __('Are you sure you want to delete # {0}?', $agencygroup->agencygroupid)]) ?>
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
