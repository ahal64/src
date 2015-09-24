<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $job->jobid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $job->jobid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="jobs form large-10 medium-9 columns">
    <?= $this->Form->create($job); ?>
    <fieldset>
        <legend><?= __('Edit Job') ?></legend>
        <?php
            echo $this->Form->input('propertiesid');
            echo $this->Form->input('equipid');
            echo $this->Form->input('userid');
            echo $this->Form->input('jobdesc');
            echo $this->Form->input('startdate');
            echo $this->Form->input('enddate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
