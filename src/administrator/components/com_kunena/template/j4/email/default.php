<?php
/**
 * Kunena Component
 *
 * @package       Kunena.Administrator.Template
 * @subpackage    Logs
 *
 * @copyright     Copyright (C) 2008 - 2018 Kunena Team. All rights reserved.
 * @license       https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link          https://www.kunena.org
 **/
defined('_JEXEC') or die();

use Joomla\CMS\HTML\HTMLHelper;

HTMLHelper::_('behavior.tooltip');
HTMLHelper::_('behavior.multiselect');
HTMLHelper::_('dropdown.init');
HTMLHelper::_('bootstrap.popover');

?>

<div id="kunena" class="container-fluid">
	<div class="row">
		<div class="col-md-2 d-none d-md-block sidebar">
			<div id="sidebar">
				<nav class="sidebar-nav"><?php include KPATH_ADMIN . '/template/j4/common/menu.php'; ?></nav>
			</div>
		</div>
		<div id="j-main-container" class="col-md-10" role="main">
			<div class="card card-block bg-faded p-2">
				<div class="module-title nav-header"><i class="icon-mail"></i> <?php echo JText::_('Select Email Form') ?>
				</div>
				<hr class="hr-condensed">
				<div id="dashboard-icons" class="btn-group">
					<a class="btn btn-default" href="#">
						<i class="icon-big icon-user"></i><br/>
						<span><?php echo JText::_('Subscription') ?></span>
					</a>
					<a class="btn btn-default" href="#">
						<i class="icon-big icon-shield"></i><br/>
						<span><?php echo JText::_('Moderator') ?></span>
					</a>
					<a class="btn btn-default" href="#">
						<i class="icon-big icon-checkmark"></i><br/>
						<span><?php echo JText::_('Approved') ?></span>
					</a>
					<a class="btn btn-default" href="#">
						<i class="icon-big icon-notification-circle"></i><br/>
						<span><?php echo JText::_('Report') ?></span>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="pull-right small">
		<?php echo KunenaVersion::getLongVersionHTML(); ?>
	</div>
</div>
