<?php
/**
* @version 			SEBLOD 3.x Core
* @package			SEBLOD (App Builder & CCK) // SEBLOD nano (Form Builder)
* @url				https://www.seblod.com
* @editor			Octopoos - www.octopoos.com
* @copyright		Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
* @license 			GNU General Public License version 2 or later; see _LICENSE.php
**/

defined( '_JEXEC' ) or die;

$app = JFactory::getApplication();
$jinput = JFactory::getApplication()->input;
$view = $jinput->get('view');
$menu = $app->getMenu();
$active = $menu->getActive();
$itemid = $active->id;
$parentid = $active->parent_id;
$mainparams = $app->getParams();
$pageclass = $mainparams->get('pageclass_sfx');

if ( $parentid == '106' ) {
	$css = ' has-prod-family';
} else {
	$css = '';
}
?>

<?php if ( ( $view == 'list' ) || ( $itemid == 104 ) || ( $itemid == 165 ) || ( $itemid == 106 ) ) : ?>
<h1 class="cck_module_breadcrumbs<?php echo $css; ?>">
<?php else : ?>
<div class="cck_module_breadcrumbs<?php echo $css; ?>">
<?php endif; ?>
<?php
$show_last	=	$params->get( 'showLast', 1 );
if ( $params->get( 'showHere', 1 ) ) {
		echo '<span class="showHere">'.JText::_( 'MOD_CCK_BREADCRUMBS_HERE' ).'</span>';
}
for ( $i = 0; $i < $count; $i++ ) {
	if ( $i < $count -1 ) { // If not the last item in the breadcrumbs add the separator
		if ( !empty($list[$i]->link ) ) {
			echo '<a href="'.$list[$i]->link.'" class="pathway"><img class="breadcrumbs-caret" src="/images/caret.svg" /><span>'.$list[$i]->name.'</span></a>';
		} else {
			echo '<span class="pathway">'.$list[$i]->name.'</span>';
		}
		if( $i < $count -2 ) {
			echo '<span class="'.$separator_class.'">'.$separator.'</span>';
		}
	} elseif ( $show_last ) { // when $i == $count -1 and 'showLast' is true
		if ( $i > 0 ) {
			echo '<span class="'.$separator_class.'">'.$separator.'</span>';
		}
		if ($itemid != 235) {
			echo '<span class="pathway pathway-last">'.$list[$i]->name.'</span>';
		}
	}
}
?>
<?php if ( ( $view == 'list' ) || ( $itemid == 104 ) || ( $itemid == 165 ) || ( $itemid == 106 ) ) : ?>
</h1>
<?php else : ?>
</div>
<?php endif; ?>
