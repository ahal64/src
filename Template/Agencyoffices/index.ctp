<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Agencyoffice'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="agencyoffices index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('agencyofficeid') ?></th>
            <th><?= $this->Paginator->sort('agencyname') ?></th>
            <th><?= $this->Paginator->sort('customercode') ?></th>
            <th><?= $this->Paginator->sort('abn') ?></th>
            <th><?= $this->Paginator->sort('phone') ?></th>
            <th><?= $this->Paginator->sort('fax') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($agencyoffices as $agencyoffice): ?>
        <tr>
            <td><?= $this->Number->format($agencyoffice->agencyofficeid) ?></td>
            <td><?= h($agencyoffice->agencyname) ?></td>
            <td><?= h($agencyoffice->customercode) ?></td>
            <td><?= $this->Number->format($agencyoffice->abn) ?></td>
            <td><?= $this->Number->format($agencyoffice->phone) ?></td>
            <td><?= $this->Number->format($agencyoffice->fax) ?></td>
            <td><?= h($agencyoffice->email) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $agencyoffice->agencyofficeid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agencyoffice->agencyofficeid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agencyoffice->agencyofficeid], ['confirm' => __('Are you sure you want to delete # {0}?', $agencyoffice->agencyofficeid)]) ?>
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
