<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Properties'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="properties form large-10 medium-9 columns">
    <?= $this->Form->create($property); ?>
    <fieldset>
        <legend><?= __('Add Property') ?></legend>
        <?php
            echo $this->Form->input('occid');
            echo $this->Form->input('landlordid');
            echo $this->Form->input('standardid');
            echo $this->Form->input('propertymanager');
            echo $this->Form->input('keynumber');
            echo $this->Form->input('buildingclass');
            echo $this->Form->input('occupancypermit');
            echo $this->Form->input('address1');
            echo $this->Form->input('address2');
            echo $this->Form->input('notes');
            echo $this->Form->input('duedate');
            echo $this->Form->input('propertystatus');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>