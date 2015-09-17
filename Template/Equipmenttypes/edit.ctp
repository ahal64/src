
<div class="equipmenttypes form large-10 medium-9 columns">
    <?= $this->Form->create($equipmenttype); ?>
    <fieldset>
        <legend><?= __('Edit Equipmenttype') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
