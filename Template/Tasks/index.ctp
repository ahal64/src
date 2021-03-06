
<div class="tasks index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('tasksid') ?></th>
            <th><?= $this->Paginator->sort('standardid') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('duedate') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= $this->Number->format($task->tasksid) ?></td>
            <td><?= $this->Number->format($task->standardid) ?></td>
            <td><?= h($task->name) ?></td>
            <td><?= h($task->duedate) ?></td>
            <td><?= h($task->status) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $task->tasksid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $task->tasksid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->tasksid], ['confirm' => __('Are you sure you want to delete # {0}?', $task->tasksid)]) ?>
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
