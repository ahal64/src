<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $landlord->landlordid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $landlord->landlordid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Landlords'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="landlords form large-10 medium-9 columns">
    <?= $this->Form->create($landlord); ?>
    <fieldset>
        <legend><?= __('Edit Landlord') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('address1');
            echo $this->Form->input('address2');
            echo $this->Form->input('mobile');
            echo $this->Form->input('homephone');
            echo $this->Form->input('officephone');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
