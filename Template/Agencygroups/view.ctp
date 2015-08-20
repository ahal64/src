<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Agencygroup'), ['action' => 'edit', $agencygroup->agencygroupid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agencygroup'), ['action' => 'delete', $agencygroup->agencygroupid], ['confirm' => __('Are you sure you want to delete # {0}?', $agencygroup->agencygroupid)]) ?> </li>
        <li><?= $this->Html->link(__('List Agencygroups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agencygroup'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="agencygroups view large-10 medium-9 columns">
    <h2><?= h($agencygroup->agencygroupid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Groupname') ?></h6>
            <p><?= h($agencygroup->groupname) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Agencygroupid') ?></h6>
            <p><?= $this->Number->format($agencygroup->agencygroupid) ?></p>
        </div>
    </div>
</div>
<?= $this->Html->link(__('Add Agency Office'), ['action' => 'clickAddOfficeButton', $agencygroup->agencygroupid]) ?>



<div>
<div class="agencyoffices index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('agencyname') ?></th>
			<!-- other office attribute headings -->
			<th><?= $this->Paginator->sort('customercode') ?></th>
            <th><?= $this->Paginator->sort('abn') ?></th>
            <th><?= $this->Paginator->sort('phone') ?></th>
            <th><?= $this->Paginator->sort('fax') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
			<!-- end of other office attribute headings -->
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
	
    <tbody>	
    <?php 
	foreach ($agencyoffices['agencyoffices'] as $agencyoffice): ?>
		<tr>
			<td><?=$agencyoffice['agencyname']?></td>			
			<!-- other office attributes-->
			<td><?=$agencyoffice['customercode'] ?></td>
            <td><?=$agencyoffice['abn'] ?></td>
            <td><?=$agencyoffice['phone'] ?></td>
            <td><?=$agencyoffice['fax'] ?></td>
            <td><?=$agencyoffice['email'] ?></td>
			<!--end of other office attributes-->
            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'agencyoffices', 'action' => 'view', $agencyoffice['agencyofficeid']]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'agencyoffices', 'action' => 'edit', $agencyoffice['agencyofficeid']]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'agencyoffices', 'action' => 'delete', $agencyoffice['agencyofficeid']], ['confirm' => __('Are you sure you want to delete # {0}?', $agencyoffice['agencyofficeid'])]) ?>
            </td>
		</tr>	
	<?php endforeach; ?>
    </tbody>
    </table>
<!-- <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div> -->
</div>


</div>
