<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Agencyoffice'), ['action' => 'edit', $agencyoffice->agencyofficeid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agencyoffice'), ['action' => 'delete', $agencyoffice->agencyofficeid], ['confirm' => __('Are you sure you want to delete # {0}?', $agencyoffice->agencyofficeid)]) ?> </li>
        <li><?= $this->Html->link(__('List Agencyoffices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agencyoffice'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="agencyoffices view large-10 medium-9 columns">
    <h2><?= h($agencyoffice->agencyofficeid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Agencyname') ?></h6>
            <p><?= h($agencyoffice->agencyname) ?></p>
            <h6 class="subheader"><?= __('Customercode') ?></h6>
            <p><?= h($agencyoffice->customercode) ?></p>
            <h6 class="subheader"><?= __('Abn') ?></h6>
            <p><?= h($agencyoffice->abn) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($agencyoffice->phone) ?></p>
            <h6 class="subheader"><?= __('Fax') ?></h6>
            <p><?= h($agencyoffice->fax) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($agencyoffice->email) ?></p>
            <h6 class="subheader"><?= __('Website') ?></h6>
            <p><?= h($agencyoffice->website) ?></p>
            <h6 class="subheader"><?= __('Address1') ?></h6>
            <p><?= h($agencyoffice->address1) ?></p>
            <h6 class="subheader"><?= __('Address2') ?></h6>
            <p><?= h($agencyoffice->address2) ?></p>
            <h6 class="subheader"><?= __('Suburb') ?></h6>
            <p><?= h($agencyoffice->suburb) ?></p>
            <h6 class="subheader"><?= __('Postcode') ?></h6>
            <p><?= h($agencyoffice->postcode) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Agencyofficeid') ?></h6>
            <p><?= $this->Number->format($agencyoffice->agencyofficeid) ?></p>
            <h6 class="subheader"><?= __('Agencygroupid') ?></h6>
            <p><?= $this->Number->format($agencyoffice->agencygroupid) ?></p>
        </div>
    </div>
</div>


<?= $this->Html->link(__('Add Agency Staff Members'), ['action' => 'clickAddStaffButton', $agencyoffice->agencyofficeid]) ?>

<div>
<!-- show all agencystaff for the selected agency office -->
<div class="agencystaffs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('agencystaffid') ?></th>
            <th><?= $this->Paginator->sort('firstname') ?></th>
            <th><?= $this->Paginator->sort('lastname') ?></th>
            <th><?= $this->Paginator->sort('mobile') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php 
	foreach ($agencystaffs['agencystaffs'] as $agencystaff): ?>
		<tr>
		    <td><?=$agencystaff['agencystaffid']?></td>
			<td><?=$agencystaff['firstname']?></td>			
			<td><?=$agencystaff['lastname']?></td>
            <td><?=$agencystaff['mobile']?></td>
           
			<!--end of other office attributes-->
            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'agencystaffs', 'action' => 'view', $agencystaff['agencystaffid']]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'agencystaffs', 'action' => 'edit', $agencystaff['agencystaffid']]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'agencystaffs', 'action' => 'delete', $agencystaff['agencystaffid']], ['confirm' => __('Are you sure you want to delete # {0}?', $agencystaff['agencystaffid'])]) ?>
            </td>
		</tr>	
	<?php endforeach; ?>
	    </tbody>
    </table>
   </div>
</div>

<?= $this->Html->link(__('Add Property'), ['action' => 'clickAddPropertyButton', $agencyoffice->agencyofficeid]) ?>
<div>
<!-- show all properties for the selected agency office -->
<div class="properties view large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('propertiesid') ?></th>
            <th><?= $this->Paginator->sort('propertymanager') ?></th>
            <th><?= $this->Paginator->sort('keynumber') ?></th>
            <th><?= $this->Paginator->sort('buildingclass') ?></th>
			<th><?= $this->Paginator->sort('occupancypermit') ?></th>
			<th><?= $this->Paginator->sort('duedate') ?></th>
			<th><?= $this->Paginator->sort('propertystatus') ?></th>
			
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php 
	foreach ($properties['properties'] as $property): ?>
		<tr>
		    <td><?=$property['propertiesid']?></td>
			<td><?=$property['propertymanager']?></td>
			<td><?=$property['keynumber']?></td>
			<td><?=$property['buildingclass']?></td>
			<td><?=$property['occupancypermit']?></td>
			<td><?=$property['duedate']?></td>
			<td><?=$property['propertystatus']?></td>

           
            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'properties', 'action' => 'view', $property['propertiesid']]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'properties', 'action' => 'edit', $property['propertiesid']]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'properties', 'action' => 'delete', $property['propertiesid']], ['confirm' => __('Are you sure you want to delete # {0}?', $property['propertiesid'])]) ?>
            </td>
		</tr>	
	<?php endforeach; ?>
	    </tbody>
    </table>
</div>
</div>