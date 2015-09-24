
<div class="jobs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('jobid') ?></th>
            <th><?= $this->Paginator->sort('propertiesid') ?></th>
            <th><?= $this->Paginator->sort('equipid') ?></th>
            <th><?= $this->Paginator->sort('userid') ?></th>
            <th><?= $this->Paginator->sort('jobdesc') ?></th>
            <th><?= $this->Paginator->sort('startdate') ?></th>
            <th><?= $this->Paginator->sort('enddate') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($jobs as $job): ?>
        <tr>
            <td><?= $this->Number->format($job->jobid) ?></td>
            <td><?= $this->Number->format($job->propertiesid) ?></td>   
            <td><?= $this->Number->format($job->equipid) ?></td>
            <td><?= $this->Number->format($job->userid) ?></td>
            <td><?= h($job->jobdesc) ?></td>
            <td><?= h($job->startdate) ?></td>
            <td><?= h($job->enddate) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $job->jobid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $job->jobid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $job->jobid], ['confirm' => __('Are you sure you want to delete # {0}?', $job->jobid)]) ?>
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
