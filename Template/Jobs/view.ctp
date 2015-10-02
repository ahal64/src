<div class="jobs view large-10 medium-9 columns">
    <h2><?= h($job->jobid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Jobdesc') ?></h6>
            <p><?= h($job->jobdesc) ?></p>
			<h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($job->status) ?></p>
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
