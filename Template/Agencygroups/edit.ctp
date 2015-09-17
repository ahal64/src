
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
