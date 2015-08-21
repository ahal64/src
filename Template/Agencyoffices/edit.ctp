<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agencyoffice->agencyofficeid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agencyoffice->agencyofficeid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Agencyoffices'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="agencyoffices form large-10 medium-9 columns">
    <?= $this->Form->create($agencyoffice); ?>
    <fieldset>
        <legend><?= __('Edit Agencyoffice') ?></legend>
        <?php
            echo $this->Form->input('agencyname');
            echo $this->Form->input('customercode');
            echo $this->Form->input('abn');
            echo $this->Form->input('phone');
            echo $this->Form->input('fax');
            echo $this->Form->input('email');
            echo $this->Form->input('website');
            echo $this->Form->input('address1');
            echo $this->Form->input('address2');
            echo $this->Form->input('suburb');
            echo $this->Form->input('postcode');
            echo $this->Form->input('agencygroupid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
