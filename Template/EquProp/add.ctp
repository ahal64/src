<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Equ Prop'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="equProp form large-10 medium-9 columns">
    <?= $this->Form->create($equProp); ?>
    <fieldset>
        <legend><?= __('Add Equ Prop') ?></legend>
        <?php
            echo $this->Form->input('equipid');
            echo $this->Form->input('propertiesid');
            echo $this->Form->input('duedate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
