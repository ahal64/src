<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Task'), ['action' => 'edit', $task->tasksid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Task'), ['action' => 'delete', $task->tasksid], ['confirm' => __('Are you sure you want to delete # {0}?', $task->tasksid)]) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tasks view large-10 medium-9 columns">
    <h2><?= h($task->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($task->name) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($task->status) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Tasksid') ?></h6>
            <p><?= $this->Number->format($task->tasksid) ?></p>
            <h6 class="subheader"><?= __('Standardid') ?></h6>
            <p><?= $this->Number->format($task->standardid) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Duedate') ?></h6>
            <p><?= h($task->duedate) ?></p>
        </div>
    </div>
</div>
