
<div class="equipment form large-10 medium-9 columns">
    <?= $this->Form->create($equipment); ?>
    <fieldset>
        <legend><?= __('Edit Equipment') ?></legend>
        <?php
            echo $this->Form->input('eqtypeid');
            echo $this->Form->input('name');
            echo $this->Form->input('notes');
            echo $this->Form->input('installationdate');
            echo $this->Form->input('existing_or_required');
            echo $this->Form->input('barcode');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
