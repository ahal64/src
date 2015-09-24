<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $occupant->occid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $occupant->occid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Occupants'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="occupants form large-10 medium-9 columns">
    <?= $this->Form->create($occupant); ?>
    <fieldset>
        <legend><?= __('Edit Occupant') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('address1');
            echo $this->Form->input('address2');
            echo $this->Form->input('mobile');
            echo $this->Form->input('officephone');
            echo $this->Form->input('homephone');
            echo $this->Form->input('otherphone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
