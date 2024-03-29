<?php

/**
 * ACF_Business_Directory
 *
 * @package   ACF_Business_Directory
 * @author    Zachary Tarvid-Richey <zr.public@gmail.com>
 * @copyright 2023 Zachary Tarvid-Richey
 * @license   GPL 2.0+
 * @link      https://zachuorice.com
 */

namespace ACF_Business_Directory\Internals;

use ACF_Business_Directory\Engine\Base;

/**
 * Holds the generated "Export" code from ACF.
 */
class ACF_Export extends Base {

	/**
	 * Initialize the class.
	 *
	 * @return void|bool
	*/
	public function initialize() {
		parent::initialize();

		// TODO: Detect and provide alternative for non-PRO ACF...

		\abd_log("Initialized ACF_Export...");


		add_action( 'acf/include_fields', function() {
			if ( ! function_exists( 'acf_add_local_field_group' ) ) {
				return;
			}

			acf_add_local_field_group( array(
				'key' => 'group_65465fe671d6c',
				'title' => 'Business Details',
				'fields' => array(
					array(
						'key' => 'field_6597cd03f0669',
						'label' => 'Contact',
						'name' => '',
						'aria-label' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_65a77e54cf86d',
						'label' => 'Contacts',
						'name' => 'contacts',
						'aria-label' => '',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'layout' => 'row',
						'pagination' => 0,
						'min' => 0,
						'max' => 0,
						'collapsed' => '',
						'button_label' => 'Add Row',
						'rows_per_page' => 20,
						'sub_fields' => array(
							array(
								'key' => 'field_65a77ed3cf86f',
								'label' => 'Type',
								'name' => 'type',
								'aria-label' => '',
								'type' => 'select',
								'instructions' => '',
								'required' => 1,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'choices' => array(
									'email' => 'Email',
									'phone' => 'Phone',
									'website' => 'Website',
									'facebook' => 'Facebook',
									'x' => 'X (Twitter)',
									'instagram' => 'Instagram',
								),
								'default_value' => 'email',
								'return_format' => 'array',
								'multiple' => 0,
								'allow_null' => 0,
								'ui' => 0,
								'ajax' => 0,
								'placeholder' => '',
								'parent_repeater' => 'field_65a77e54cf86d',
							),
							array(
								'key' => 'field_65a77f9acf870',
								'label' => 'Value',
								'name' => 'value_email',
								'aria-label' => '',
								'type' => 'email',
								'instructions' => '',
								'required' => 1,
								'conditional_logic' => array(
									array(
										array(
											'field' => 'field_65a77ed3cf86f',
											'operator' => '==',
											'value' => 'email',
										),
									),
									array(
										array(
											'field' => 'field_65a77ed3cf86f',
											'operator' => '==',
											'value' => 'email_custom',
										),
									),
								),
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'parent_repeater' => 'field_65a77e54cf86d',
							),
							array(
								'key' => 'field_65a77fd1cf872',
								'label' => 'Value',
								'name' => 'value_url',
								'aria-label' => '',
								'type' => 'url',
								'instructions' => '',
								'required' => 1,
								'conditional_logic' => array(
									array(
										array(
											'field' => 'field_65a77ed3cf86f',
											'operator' => '==',
											'value' => 'website',
										),
									),
									array(
										array(
											'field' => 'field_65a77ed3cf86f',
											'operator' => '==',
											'value' => 'website_custom',
										),
									),
								),
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'parent_repeater' => 'field_65a77e54cf86d',
							),
							array(
								'key' => 'field_65a78009cf874',
								'label' => 'Value',
								'name' => 'value',
								'aria-label' => '',
								'type' => 'text',
								'instructions' => '',
								'required' => 1,
								'conditional_logic' => array(
									array(
										array(
											'field' => 'field_65a77ed3cf86f',
											'operator' => '==',
											'value' => 'phone',
										),
									),
									array(
										array(
											'field' => 'field_65a77ed3cf86f',
											'operator' => '==',
											'value' => 'cell',
										),
									),
									array(
										array(
											'field' => 'field_65a77ed3cf86f',
											'operator' => '==',
											'value' => 'facebook',
										),
									),
									array(
										array(
											'field' => 'field_65a77ed3cf86f',
											'operator' => '==',
											'value' => 'x',
										),
									),
									array(
										array(
											'field' => 'field_65a77ed3cf86f',
											'operator' => '==',
											'value' => 'instagram',
										),
									),
									array(
										array(
											'field' => 'field_65a77ed3cf86f',
											'operator' => '==',
											'value' => 'phone_custom',
										),
									),
									array(
										array(
											'field' => 'field_65a77ed3cf86f',
											'operator' => '==',
											'value' => 'name',
										),
									),
								),
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'maxlength' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'parent_repeater' => 'field_65a77e54cf86d',
							),
							array(
								'key' => 'field_65a7811e96733',
								'label' => 'Custom Label (optional)',
								'name' => 'custom_label',
								'aria-label' => '',
								'type' => 'text',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'maxlength' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'parent_repeater' => 'field_65a77e54cf86d',
							),
						),
					),
					array(
						'key' => 'field_65a78b0e3b656',
						'label' => 'Display In Order Specified?',
						'name' => 'display_in_order_specified',
						'aria-label' => '',
						'type' => 'true_false',
						'instructions' => 'If not specified, fields are displayed in order based on type (e.g. emails before phone numbers, before websites).

						If "Name" fields are present this option will be applied regardless of your choice.

						For usability, recommend only using this option if absolutely necessary. Inconsistent contact ordering between listings can be jarring.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'message' => 'Display contact fields in order specified',
						'default_value' => 0,
						'ui' => 0,
						'ui_on_text' => '',
						'ui_off_text' => '',
					),
					array(
						'key' => 'field_654660041fab9',
						'label' => 'Address',
						'name' => '',
						'aria-label' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_654660251faba',
						'label' => 'Address (Line 1)',
						'name' => 'address_line_1',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_654660391fabb',
						'label' => 'Address (Line 2)',
						'name' => 'address_line_2',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_654660431fabc',
						'label' => 'City',
						'name' => 'city',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_6546605d1fabd',
						'label' => 'State',
						'name' => 'state',
						'aria-label' => '',
						'type' => 'select',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'VA' => 'Virginia',
							'AL' => 'Alabama',
							'AK' => 'Alaska',
							'AZ' => 'Arizona',
							'AR' => 'Arkansas',
							'AS' => 'American Samoa',
							'CA' => 'California',
							'CO' => 'Colorado',
							'CT' => 'Connecticut',
							'DE' => 'Delaware',
							'DC' => 'District of Columbia',
							'FL' => 'Florida',
							'GA' => 'Georgia',
							'GU' => 'Guam',
							'HI' => 'Hawaii',
							'ID' => 'Idaho',
							'IL' => 'Illinois',
							'IN' => 'Indiana',
							'IA' => 'Iowa',
							'KS' => 'Kansas',
							'KY' => 'Kentucky',
							'LA' => 'Louisiana',
							'ME' => 'Maine',
							'MD' => 'Maryland',
							'MA' => 'Massachusetts',
							'MI' => 'Michigan',
							'MN' => 'Minnesota',
							'MS' => 'Mississippi',
							'MO' => 'Missouri',
							'MT' => 'Montana',
							'NE' => 'Nebraska',
							'NV' => 'Nevada',
							'NH' => 'New Hampshire',
							'NJ' => 'New Jersey',
							'NM' => 'New Mexico',
							'NY' => 'New York',
							'NC' => 'North Carolina',
							'ND' => 'North Dakota',
							'MP' => 'Northern Mariana Islands',
							'OH' => 'Ohio',
							'OK' => 'Oklahoma',
							'OR' => 'Oregon',
							'PA' => 'Pennsylvania',
							'PR' => 'Puerto Rico',
							'RI' => 'Rhode Island',
							'SC' => 'South Carolina',
							'SD' => 'South Dakota',
							'TN' => 'Tennessee',
							'TX' => 'Texas',
							'TT' => 'Trust Territories',
							'UT' => 'Utah',
							'VT' => 'Vermont',
							'VI' => 'Virgin Islands',
							'WA' => 'Washington',
							'WV' => 'West Virginia',
							'WI' => 'Wisconsin',
							'WY' => 'Wyoming',
						),
						'default_value' => 'VA',
						'return_format' => 'array',
						'multiple' => 0,
						'allow_null' => 0,
						'ui' => 0,
						'ajax' => 0,
						'placeholder' => '',
					),
					array(
						'key' => 'field_6597cde6a5db2',
						'label' => 'Postcode',
						'name' => 'postcode',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_654661fa1fac3',
						'label' => 'Hours',
						'name' => '',
						'aria-label' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_654660f41fabe',
						'label' => 'Hours',
						'name' => 'hours',
						'aria-label' => '',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'layout' => 'block',
						'pagination' => 0,
						'min' => 0,
						'max' => 0,
						'collapsed' => '',
						'button_label' => 'Add Row',
						'rows_per_page' => 20,
						'sub_fields' => array(
							array(
								'key' => 'field_654661031fabf',
								'label' => 'Start',
								'name' => 'start',
								'aria-label' => '',
								'type' => 'time_picker',
								'instructions' => '',
								'required' => 1,
								'conditional_logic' => array(
									array(
										array(
											'field' => 'field_654661551fac1',
											'operator' => '!=',
											'value' => '1',
										),
									),
								),
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'display_format' => 'g:i a',
								'return_format' => 'g:i a',
								'parent_repeater' => 'field_654660f41fabe',
							),
							array(
								'key' => 'field_654661171fac0',
								'label' => 'End',
								'name' => 'end',
								'aria-label' => '',
								'type' => 'time_picker',
								'instructions' => '',
								'required' => 1,
								'conditional_logic' => array(
									array(
										array(
											'field' => 'field_654661551fac1',
											'operator' => '!=',
											'value' => '1',
										),
									),
								),
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'display_format' => 'g:i a',
								'return_format' => 'g:i a',
								'parent_repeater' => 'field_654660f41fabe',
							),
							array(
								'key' => 'field_654661551fac1',
								'label' => '24 Hours',
								'name' => '24_hours',
								'aria-label' => '',
								'type' => 'true_false',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'message' => '',
								'default_value' => 0,
								'ui' => 0,
								'ui_on_text' => '',
								'ui_off_text' => '',
								'parent_repeater' => 'field_654660f41fabe',
							),
							array(
								'key' => 'field_654661811fac2',
								'label' => 'Days',
								'name' => 'days',
								'aria-label' => '',
								'type' => 'checkbox',
								'instructions' => '',
								'required' => 1,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'choices' => array(
									'Mo' => 'Monday',
									'Tu' => 'Tuesday',
									'We' => 'Wednesday',
									'Thu' => 'Thursday',
									'Fri' => 'Friday',
									'Sat' => 'Saturday',
									'Sun' => 'Sunday',
								),
								'default_value' => array(
								),
								'return_format' => 'array',
								'allow_custom' => 0,
								'layout' => 'vertical',
								'toggle' => 0,
								'save_custom' => 0,
								'custom_choice_button_text' => 'Add new choice',
								'parent_repeater' => 'field_654660f41fabe',
							),
						),
					),
					array(
						'key' => 'field_6546622b1fac4',
						'label' => 'Map',
						'name' => '',
						'aria-label' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_654662361fac5',
						'label' => 'Set Business Location',
						'name' => 'set_business_location',
						'aria-label' => '',
						'type' => 'google_map',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'center_lat' => '',
						'center_lng' => '',
						'zoom' => '',
						'height' => '',
					),
					array(
						'key' => 'field_654662701fac7',
						'label' => 'Photos',
						'name' => '',
						'aria-label' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_6546625a1fac6',
						'label' => 'Gallery',
						'name' => 'gallery',
						'aria-label' => '',
						'type' => 'gallery',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'library' => 'all',
						'min' => '',
						'max' => '',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
						'insert' => 'append',
						'preview_size' => 'medium',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'business',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'acf_after_title',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
				'show_in_rest' => 0,
			) );
		} );

		add_action( 'init', function() {
			register_taxonomy( 'business-category', array(
				0 => 'business',
			), array(
					'labels' => array(
						'name' => 'Categories',
						'singular_name' => 'Category',
						'menu_name' => 'Categories',
						'all_items' => 'All Categories',
						'edit_item' => 'Edit Category',
						'view_item' => 'View Category',
						'update_item' => 'Update Category',
						'add_new_item' => 'Add New Category',
						'new_item_name' => 'New Category Name',
						'parent_item' => 'Parent Category',
						'parent_item_colon' => 'Parent Category:',
						'search_items' => 'Search Categories',
						'not_found' => 'No categories found',
						'no_terms' => 'No categories',
						'filter_by_item' => 'Filter by category',
						'items_list_navigation' => 'Categories list navigation',
						'items_list' => 'Categories list',
						'back_to_items' => '← Go to categories',
						'item_link' => 'Category Link',
						'item_link_description' => 'A link to a category',
					),
					'public' => true,
					'hierarchical' => true,
					'show_in_menu' => true,
					'show_in_rest' => true,
					'show_admin_column' => true,
					'rewrite' => array(
						'hierarchical' => true,
					),
				) );

			register_taxonomy( 'business-feature', array(
				0 => 'business',
			), array(
					'labels' => array(
						'name' => 'Features',
						'singular_name' => 'Feature',
						'menu_name' => 'Features',
						'all_items' => 'All Features',
						'edit_item' => 'Edit Feature',
						'view_item' => 'View Feature',
						'update_item' => 'Update Feature',
						'add_new_item' => 'Add New Feature',
						'new_item_name' => 'New Feature Name',
						'search_items' => 'Search Features',
						'popular_items' => 'Popular Features',
						'separate_items_with_commas' => 'Separate features with commas',
						'add_or_remove_items' => 'Add or remove features',
						'choose_from_most_used' => 'Choose from the most used features',
						'not_found' => 'No features found',
						'no_terms' => 'No features',
						'items_list_navigation' => 'Features list navigation',
						'items_list' => 'Features list',
						'back_to_items' => '← Go to features',
						'item_link' => 'Feature Link',
						'item_link_description' => 'A link to a feature',
					),
					'public' => true,
					'show_in_menu' => true,
					'show_in_rest' => true,
				) );
		} );

		add_action( 'init', function() {
			register_post_type( 'business', array(
				'labels' => array(
					'name' => 'Directory',
					'singular_name' => 'Business',
					'menu_name' => 'Directory',
					'all_items' => 'All Directory',
					'edit_item' => 'Edit Business',
					'view_item' => 'View Business',
					'view_items' => 'View Directory',
					'add_new_item' => 'Add New Business',
					'new_item' => 'New Business',
					'parent_item_colon' => 'Parent Business:',
					'search_items' => 'Search Directory',
					'not_found' => 'No directory found',
					'not_found_in_trash' => 'No directory found in Trash',
					'archives' => 'Business Archives',
					'attributes' => 'Business Attributes',
					'insert_into_item' => 'Insert into business',
					'uploaded_to_this_item' => 'Uploaded to this business',
					'filter_items_list' => 'Filter directory list',
					'filter_by_date' => 'Filter directory by date',
					'items_list_navigation' => 'Directory list navigation',
					'items_list' => 'Directory list',
					'item_published' => 'Business published.',
					'item_published_privately' => 'Business published privately.',
					'item_reverted_to_draft' => 'Business reverted to draft.',
					'item_scheduled' => 'Business scheduled.',
					'item_updated' => 'Business updated.',
					'item_link' => 'Business Link',
					'item_link_description' => 'A link to a business.',
				),
				'description' => 'Your website business directory.',
				'public' => true,
				'show_in_rest' => true,
				'menu_icon' => 'dashicons-businessperson',
				'supports' => array(
					0 => 'title',
					1 => 'author',
					2 => 'comments',
					3 => 'editor',
					4 => 'excerpt',
					5 => 'revisions',
					6 => 'thumbnail',
					7 => 'custom-fields',
				),
				'has_archive' => 'directory',
				'rewrite' => array(
					'feeds' => false,
				),
				'can_export' => false,
				'delete_with_user' => false,
			) );
		} );

	}
}
