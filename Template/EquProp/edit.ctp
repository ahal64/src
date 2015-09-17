
<div class="equProp form large-10 medium-9 columns">
    <?= $this->Form->create($equProp); ?>
    <fieldset>
        <legend><?= __('Edit Equ Prop') ?></legend>
        <?php
            echo $this->Form->input('equipid');
            echo $this->Form->input('propertiesid');
            echo $this->Form->input('duedate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
