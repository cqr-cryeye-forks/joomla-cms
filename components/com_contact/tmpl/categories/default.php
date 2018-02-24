<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
JHtml::_('behavior.caption');
JHtml::_('behavior.core');

// Add strings for translations in Javascript.
JText::script('JGLOBAL_EXPAND_CATEGORIES');
JText::script('JGLOBAL_COLLAPSE_CATEGORIES');
?>
<div class="categories-list">
	<?php
		echo JLayoutHelper::render('joomla.content.categories_default', $this);
		echo $this->loadTemplate('items');
	?>
</div>
