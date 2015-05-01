<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agencystaff->agencystaffid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agencystaff->agencystaffid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Agencystaffs'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="agencystaffs form large-10 medium-9 columns">
    <?= $this->Form->create($agencystaff); ?>
    <fieldset>
        <legend><?= __('Edit Agencystaff') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('mobile');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
