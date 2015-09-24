<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
	
    <?= $this->Html->charset() ?>
	
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta" />
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<div class="header-img">
			<img src="https://m2.behance.net/rendition/pm/1477397/disp/eec45153b065ca6bbc77fde2d40bf463.jpg" height="210" width="210">
    </div>
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('bootstrap-theme.min.css') ?>
	<?= $this->Html->script('bootstrap.min.js') ?>
	 

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <span><h2><?= $this->fetch('title') ?></h2></span>
    </div>

    <div id="content">
        <div class="row">
			<div class="col-sm-3 sidebarStyle">
				<div class="text-xs-center text-sm-left">
					<ul class="nav nav-pills nav-stacked">
                        <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']) ?>"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
                    </ul>
					<ul class="nav nav-pills nav-stacked" id="stacked-menu">
						<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Administration</a></li>
						<li><a href="#" data-toggle="collapse" data-target="#users"><span class="glyphicon glyphicon-user"></span> Users</a></li>
                        <ul class="nav nav-pills nav-stacked collapse" id="users">
                            <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']) ?>"><span class="glyphicon glyphicon-plus"></span> Add User</a></li>
                            <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>"><span class="glyphicon glyphicon-user"></span> List Users</a></li>
    					</ul>
						<li><a href="<?= $this->Url->build(['controller' => 'Standards', 'action' => 'index']) ?>"><span class="glyphicon glyphicon-saved"></span> Standards</a></li>
					</ul>
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Property Management</a></li>
						<li><a href="#" data-toggle="collapse" data-target="#properties"><span class="glyphicon glyphicon-home"></span> Properties</a></li>
                        <ul class="nav nav-pills nav-stacked collapse" id="properties">
    						<li><a href="<?= $this->Url->build(['controller' => 'Properties', 'action' => 'add']) ?>"><span class="glyphicon glyphicon-plus"></span> Add Property</a></li>
    						<li><a href="<?= $this->Url->build(['controller' => 'Properties', 'action' => 'index']) ?>"><span class="glyphicon glyphicon-home"></span> List Properties</a></li>
    					</ul>
						<li><a href="#" data-toggle="collapse" data-target="#landlords"><span class="glyphicon glyphicon-user"></span> Landlords</a></li>
    					<ul class="nav nav-pills nav-stacked collapse" id="landlords">
    						<li><a href="<?= $this->Url->build(['controller' => 'Landlords', 'action' => 'add']) ?>"><span class="glyphicon glyphicon-plus"></span> Add Landlord</a></li>
    						<li><a href="<?= $this->Url->build(['controller' => 'Landlords', 'action' => 'index']) ?>"><span class="glyphicon glyphicon-user"></span> List Landlords</a></li>
    					</ul>
						<li><a href="#" data-toggle="collapse" data-target="#occupants"><span class="glyphicon glyphicon-user"></span> Occupants</a></li>
    					<ul class="nav nav-pills nav-stacked collapse" id="occupants">
    						<li><a href="<?= $this->Url->build(['controller' => 'Occupants', 'action' => 'add']) ?>"><span class="glyphicon glyphicon-plus"></span> Add Occupant</a></li>
    						<li><a href="<?= $this->Url->build(['controller' => 'Occupants', 'action' => 'index']) ?>"><span class="glyphicon glyphicon-user"></span> List Occupants</a></li>
    					</ul>
					</ul>
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Agency Management</a></li>
						<li><a href="#" data-toggle="collapse" data-target="#agency_groups"><span class="glyphicon glyphicon-folder-open"></span> Agency Groups</a></li>
    					<ul class="nav nav-pills nav-stacked collapse" id="agency_groups">
    						<li><a href="<?= $this->Url->build(['controller' => 'Agencygroups', 'action' => 'add']) ?>"><span class="glyphicon glyphicon-plus"></span> Add Agency Group</a></li>
    						<li><a href="<?= $this->Url->build(['controller' => 'Agencygroups', 'action' => 'index']) ?>"><span class="glyphicon glyphicon-folder-open"></span> List Agency Groups</a></li>
    					</ul>
						<li><a href="#" data-toggle="collapse" data-target="#agency_offices"><span class="glyphicon glyphicon-phone-alt"></span> Agency Offices</a></li>
    					<ul class="nav nav-pills nav-stacked collapse" id="agency_offices">
    						<li><a href="<?= $this->Url->build(['controller' => 'Agencyoffices', 'action' => 'add']) ?>"><span class="glyphicon glyphicon-plus"></span> Add Agency Office</a></li>
    						<li><a href="<?= $this->Url->build(['controller' => 'Agencyoffices', 'action' => 'index']) ?>"><span class="glyphicon glyphicon-phone-alt"></span> List Agency Offices</a></li>
    					</ul>
						<li><a href="#" data-toggle="collapse" data-target="#agency_staff"><span class="glyphicon glyphicon-user"></span> Agency Staff</a></li>
    					<ul class="nav nav-pills nav-stacked collapse" id="agency_staff">
    						<li><a href="<?= $this->Url->build(['controller' => 'Agencystaffs', 'action' => 'add']) ?>"><span class="glyphicon glyphicon-plus"></span> Add Agency Staff</a></li>
    						<li><a href="<?= $this->Url->build(['controller' => 'Agencystaffs', 'action' => 'index']) ?>"><span class="glyphicon glyphicon-user"></span> List Agency Staff</a></li>
    					</ul>
					</ul>
				</div>
			</div>

			<div class="col-sm-9 contentAreaStyle">
				<?= $this->fetch('content') ?>
			</div>
        </div>
    </div>
</div>
</html>