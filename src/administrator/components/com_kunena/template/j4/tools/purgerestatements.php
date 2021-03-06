<?php
/**
 * Kunena Component
 * @package         Kunena.Administrator.Template
 * @subpackage      PurgeRe
 *
 * @copyright       Copyright (C) 2008 - 2018 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die();

use Joomla\CMS\HTML\HTMLHelper;

// @var KunenaAdminViewTools $this

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
				<form action="<?php echo KunenaRoute::_('administrator/index.php?option=com_kunena&view=tools') ?>"
					  method="post" id="adminForm"
					  name="adminForm">
					<input type="hidden" name="task" value="purgeReStatements"/>
					<?php echo HTMLHelper::_('form.token'); ?>

					<fieldset>
						<legend><?php echo JText::_('COM_KUNENA_A_PURGE_RE_STATEMENTS'); ?></legend>
						<table class="table table-bordered table-striped">
							<tr>
								<td>
									<p><?php echo JText::_('COM_KUNENA_A_PURGE_ENTER_RE_STATEMENTS'); ?></p>
									<input type="text" name="re_string" value=""/>
								</td>
							</tr>
						</table>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div class="pull-right small">
		<?php echo KunenaVersion::getLongVersionHTML(); ?>
	</div>
</div>
