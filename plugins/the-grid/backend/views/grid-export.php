<?php
/**
 * @package   The_Grid
 * @author    Themeone <themeone.master@gmail.com>
 * @copyright 2015 Themeone
 */

// Exit if accessed directly
if (!defined('ABSPATH')) { 
	exit;
}

$form_export  = '<div class="metabox-holder tg-export">';
	$form_export .= '<div class="postbox">';
		$form_export .= '<div class="tg-box-side">';
			$form_export .= '<h3>'. __( 'Exporter', 'tg-text-domain' ) .'</h3>';
			$form_export .= '<i class="tg-info-box-icon dashicons dashicons-upload"></i>';
		$form_export .= '</div>';
		$form_export .= '<div class="inside tg-box-inside">';
			$form_export .= '<h3>'. __( 'Export Grid(s)', 'tg-text-domain' ) .'</h3>';
			
			$base = new The_Grid_Base();
			$grid_list = $base->get_grid_list();	
			$skin_list = $base->get_skin_list();
			$elem_list = $base->get_element_list();	
			
			if ($grid_list || $skin_list || $elem_list) {
				
				$form_export .= '<p>'.__('Select the desired grid(s) to export.', 'tg-text-domain');
				$form_export .= '<br>'.__('The generated file will be a .json file compatibe with the grid importer.', 'tg-text-domain' ).'</p>';
				$form_export .= '<div class="tg-list-item-wrapper" data-multi-select="1">';
					$form_export .= '<div class="tg-list-item-search-holder">';
						$form_export .= '<input type="text" class="tg-list-item-search" placeholder="'.__("Type to Search...", 'tg-text-domain').'" />';
						$form_export .= '<i class="tg-list-item-search-icon dashicons dashicons-search"></i>';
					$form_export .= '</div>';
					$form_export .= '<ul class="tg-list-item-holder">';
						$form_export .= $grid_list;
						$form_export .= $skin_list;
						$form_export .= $elem_list;
					$form_export .= '</ul>';
				$form_export .= '</div>';
				
				$form_export .= '<span class="tg-list-item-add-all">'.__( 'Select all', 'tg-text-domain').'&nbsp;&nbsp;/&nbsp;&nbsp;</span>';
				$form_export .= '<span class="tg-list-item-clear">'.__( 'Clear selection', 'tg-text-domain').'</span>';
				$form_export .= '<br><br><div class="tg-button" id="tg_export_items"><i class="tg-info-box-icon dashicons dashicons-upload"></i>'. __( 'Export Grid(s)', 'tg-text-domain' ) .'</div>';
				$form_export .= '<strong class="tg-export-msg"></strong>';
				$form_export .= '<form method="post" style="display:none"><input type="submit" name="tg_export_items" value="" /></form>';
			
			} else {
				
				$form_export .= '<p>'. __( 'Currently, you don&#39;t have any grid.', 'tg-text-domain'  );
				$form_export .= '<br>'. __( 'You need to add a grid in order to export it.', 'tg-text-domain'  );
				$form_export .= '<br>'. __( 'You can create a new grid', 'tg-text-domain'  );
				$form_export .= ' <a href="'.admin_url( 'post-new.php?post_type=the_grid').'">'. __( 'here.', 'tg-text-domain'  ) .'</a></p>';
				
			}
			
		$form_export .= '</div>';
	$form_export .= '</div>';
$form_export .= '</div>';

echo $form_export;


