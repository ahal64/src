<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Agencygroups'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="agencygroups form large-10 medium-9 columns">
    <?= $this->Form->create($agencygroup); ?>
    <fieldset>
        <legend><?= __('Add Agencygroup') ?></legend>
        <?php
            echo $this->Form->input('groupname');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
