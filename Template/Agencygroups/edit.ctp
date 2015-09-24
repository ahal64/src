<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agencygroup->agencygroupid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agencygroup->agencygroupid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Agencygroups'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="agencygroups form large-10 medium-9 columns">
    <?= $this->Form->create($agencygroup); ?>
    <fieldset>
        <legend><?= __('Edit Agencygroup') ?></legend>
        <?php
            echo $this->Form->input('groupname');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
