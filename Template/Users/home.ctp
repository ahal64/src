<h1>Select a Task to Perform</h1>


<ul class="side-nav">
<b>Administrative</b>
   <li><?= $this->Html->link(__('User'), ['action' => 'index']) ?></li>
   <li><?= $this->Html->link(__('Standard'), ['controller'=>'standards','action' => 'index']) ?></li>
   <li><?= $this->Html->link(__('Task'), ['controller'=>'tasks','action' => 'index']) ?></li>
   
   
    <b>Property Management</b>
   <li><?= $this->Html->link(__('Property'), ['controller'=>'properties','action' => 'index']) ?></li>
   <li><?= $this->Html->link(__('Landlord'), ['controller'=>'landlords','action' => 'index']) ?></li>
   <li><?= $this->Html->link(__('Occupant'), ['controller'=>'Occupants','action' => 'index']) ?></li>
   
   <b>Agency Management</b>
   <li><?= $this->Html->link(__('Agency Group'), ['controller'=>'agencygroups','action' => 'index']) ?></li>
   <li><?= $this->Html->link(__('Agency Staff'), ['controller'=>'agencystaffs','action' => 'index']) ?></li>
   <li><?= $this->Html->link(__('Agency Offices'), ['controller'=>'agencyoffices','action' => 'index']) ?></li>
   
   <b>Item Management</b>
   <li><?= $this->Html->link(__('Equipment Type'), ['controller'=>'equipmenttypes','action' => 'index']) ?></li>
   <li><?= $this->Html->link(__('Equipment'), ['controller'=>'equipment','action' => 'index']) ?></li>
   <li><?= $this->Html->link(__('Item List'), ['controller'=>'equprop','action' => 'index']) ?></li>	
</ul>

<li><?= $this->Html->link(__('Logout'), ['action' => 'logout']) ?></li>