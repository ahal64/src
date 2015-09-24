<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Standard'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="standards index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('standardid') ?></th>
			<th><?= $this->Paginator->sort('equipid') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('notes') ?></th>
            <th><?= $this->Paginator->sort('actionrequired') ?></th>
            <th><?= $this->Paginator->sort('passorfail') ?></th>
            <th><?= $this->Paginator->sort('extracomments') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($standards as $standard): ?>
        <tr>
            <td><?= $this->Number->format($standard->standardid) ?></td>
			<td><?= $this->Number->format($standard->equipid) ?></td>
            <td><?= h($standard->name) ?></td>
            <td><?= h($standard->description) ?></td>
            <td><?= h($standard->notes) ?></td>
            <td><?= h($standard->actionrequired) ?></td>
            <td><?= h($standard->passorfail) ?></td>
            <td><?= h($standard->extracomments) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $standard->standardid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $standard->standardid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $standard->standardid], ['confirm' => __('Are you sure you want to delete # {0}?', $standard->standardid)]) ?>
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
