<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->jobid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->jobid], ['confirm' => __('Are you sure you want to delete # {0}?', $job->jobid)]) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="jobs view large-10 medium-9 columns">
    <h2><?= h($job->jobid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Jobdesc') ?></h6>
            <p><?= h($job->jobdesc) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Jobid') ?></h6>
            <p><?= $this->Number->format($job->jobid) ?></p>
            <h6 class="subheader"><?= __('Propertiesid') ?></h6>
            <p><?= $this->Number->format($job->propertiesid) ?></p>
            <h6 class="subheader"><?= __('Equipid') ?></h6>
            <p><?= $this->Number->format($job->equipid) ?></p>
            <h6 class="subheader"><?= __('Userid') ?></h6>
            <p><?= $this->Number->format($job->userid) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Startdate') ?></h6>
            <p><?= h($job->startdate) ?></p>
            <h6 class="subheader"><?= __('Enddate') ?></h6>
            <p><?= h($job->enddate) ?></p>
        </div>
    </div>
</div>
