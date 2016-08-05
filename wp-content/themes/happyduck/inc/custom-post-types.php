<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_all-pages',
		'title' => 'All Pages',
		'fields' => array (
			array (
				'key' => 'field_57a4c8ce2e889',
				'label' => 'Testimonials',
				'name' => 'testimonials',
				'type' => 'relationship',
				'instructions' => 'Select testimonials relevant to this page. These will be displayed at the bottom of the page.',
				'return_format' => 'id',
				'post_type' => array (
					0 => 'testimonial',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_title',
				),
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_status',
					'operator' => '==',
					'value' => 'publish',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '!=',
					'value' => 'testimonial',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_testimonial',
		'title' => 'Testimonial',
		'fields' => array (
			array (
				'key' => 'field_57a4c83e75e59',
				'label' => 'Quote',
				'name' => 'quote',
				'type' => 'textarea',
				'instructions' => 'Please do not include quote marks or inverted commas.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 3,
				'formatting' => 'none',
			),
			array (
				'key' => 'field_57a4c86975e5a',
				'label' => 'Author Name',
				'name' => 'author',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => 100,
			),
			array (
				'key' => 'field_57a4c87c75e5b',
				'label' => 'Company Name',
				'name' => 'company',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => 100,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'testimonial',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_page',
		'title' => 'Page',
		'fields' => array (
			array (
				'key' => 'field_57a3955d0858b',
				'label' => 'Page Layout',
				'name' => 'page_layout',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'1-col' => 'One Column',
					'2-col-sidebar-left' => 'Two Columns, Sidebar Left',
					'2-col-sidebar-right' => 'Two Columns, Sidebar Right',
					'full-width' => 'One Column Full Screen Width',
				),
				'default_value' => '2-col-sidebar-right',
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_service',
		'title' => 'Service',
		'fields' => array (
			array (
				'key' => 'field_57a2360ec1c4f',
				'label' => 'Description',
				'name' => 'description',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 4,
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'service',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_service-areas',
		'title' => 'Service Areas',
		'fields' => array (
			array (
				'key' => 'field_579d089e7c1d0',
				'label' => 'Headline',
				'name' => 'headline',
				'type' => 'text',
				'instructions' => 'Enter a headline to introduce the section (not the page title).',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => 100,
			),
			array (
				'key' => 'field_579d08d07c1d1',
				'label' => 'Lead Paragraph',
				'name' => 'lead_paragraph',
				'type' => 'textarea',
				'instructions' => 'Displayed in the header below the page title and headline.',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 4,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_57a237cdfe498',
				'label' => 'Services',
				'name' => 'services',
				'type' => 'relationship',
				'instructions' => 'Select all services that should appear under this service area.',
				'required' => 1,
				'return_format' => 'id',
				'post_type' => array (
					0 => 'service',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_title',
				),
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'service-area',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'author',
				6 => 'format',
				7 => 'categories',
				8 => 'tags',
				9 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}
