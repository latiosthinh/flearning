<?php
add_filter( 'rwmb_meta_boxes', 'novus_metabox' );
function novus_metabox( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = [
		'title'      => __( 'Home Settings', 'novus' ),
		'post_types' => ['page'],
		'include'    => [
			'relation' => 'OR',
			'template' => ['template-pages/home.php'],
		],
		'tabs'   => [
			'tab_0' => [
				'label' => 'Banner',
				'icon'  => '',
			],
			'tab_1' => [
				'label' => 'Partners',
				'icon'  => '',
			],
			'tab_2' => [
				'label' => 'What we do',
				'icon'  => '',
			],
			'tab_3' => [
				'label' => 'Reason',
				'icon'  => '',
			],
			'tab_4' => [
				'label' => 'Benefit',
				'icon'  => '',
			],
			'tab_5' => [
				'label' => 'Video',
				'icon'  => '',
			],
			'tab_6' => [
				'label' => 'Testimonials',
				'icon'  => '',
			],
		],
		'fields'     => [
			[
				'name' => __( 'Title', 'novus' ),
				'id'   => $prefix . 'banner_title',
				'type' => 'wysiwyg',
				'tab'  => 'tab_0',
			],
			[
				'name' => __( 'Images', 'novus' ),
				'id'   => $prefix . 'banner',
				'type' => 'single_image',
				'tab'  => 'tab_0',
			],
			[
				'name' => __( 'Video ID', 'novus' ),
				'id'   => $prefix . 'banner_video',
				'type' => 'text',
				'tab'  => 'tab_0',
			],
			[
				'name' => __( 'Button text', 'novus' ),
				'id'   => $prefix . 'banner_button_text',
				'type' => 'text',
				'tab'  => 'tab_0',
			],
			[
				'name' => __( 'Button Url', 'novus' ),
				'id'   => $prefix . 'banner_button_url',
				'type' => 'text',
				'tab'  => 'tab_0',
			],
			[
				'name' => __( 'Partner title', 'novus' ),
				'id'   => $prefix . 'partner_title',
				'type' => 'text',
				'tab'  => 'tab_1',
			],
			[
				'name' => __( 'Images', 'novus' ),
				'id'   => $prefix . 'image_advanced_tagr3b0nwfk',
				'type' => 'image_advanced',
				'tab'  => 'tab_1',
			],
			[
				'name' => __( 'Title', 'novus' ),
				'id'   => $prefix . 'intro_title',
				'type' => 'wysiwyg',
				'tab'  => 'tab_2',
			],
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'intro',
				'type'   => 'group',
				'clone'  => true,
				'tab'    => 'tab_2',
				'fields' => [
					[
						'name' => __( 'Icon', 'novus' ),
						'id'   => $prefix . 'icon',
						'type' => 'single_image',
					],
					[
						'name' => __( 'Title', 'novus' ),
						'id'   => $prefix . 'title',
						'type' => 'text',
					],
					[
						'name' => __( 'Description', 'novus' ),
						'id'   => $prefix . 'description',
						'type' => 'textarea',
					],
					[
						'name' => __( 'Url', 'novus' ),
						'id'   => $prefix . 'url',
						'type' => 'text',
					],
				],
			],
			[
				'name' => __( 'Title', 'novus' ),
				'id'   => $prefix . 'reason_title',
				'type' => 'wysiwyg',
				'tab'  => 'tab_3',
			],
			[
				'name' => __( 'Image', 'novus' ),
				'id'   => $prefix . 'reason_image',
				'type' => 'single_image',
				'tab'  => 'tab_3',
			],
			[
				'name' => __( 'Contact text', 'novus' ),
				'id'   => $prefix . 'reason_contact',
				'type' => 'wysiwyg',
				'tab'  => 'tab_3',
			],
			[
				'name' => __( 'Button text', 'novus' ),
				'id'   => $prefix . 'reason_contact_text',
				'type' => 'text',
				'tab'  => 'tab_3',
			],
			[
				'name' => __( 'Button Url', 'novus' ),
				'id'   => $prefix . 'reason_contact_url',
				'type' => 'text',
				'tab'  => 'tab_3',
			],
			[
				'name'   => __( 'Reason', 'novus' ),
				'id'     => $prefix . 'reason',
				'type'   => 'group',
				'clone'  => true,
				'tab'  => 'tab_3',
				'fields' => [
					[
						'name' => __( 'Icon', 'novus' ),
						'id'   => $prefix . 'icon',
						'type' => 'single_image',
					],
					[
						'name' => __( 'Icon width', 'novus' ),
						'id'   => $prefix . 'width',
						'type' => 'text',
					],
					[
						'name' => __( 'Icon height', 'novus' ),
						'id'   => $prefix . 'height',
						'type' => 'text',
					],
					[
						'name' => __( 'Title', 'novus' ),
						'id'   => $prefix . 'title',
						'type' => 'text',
					],
					[
						'name' => __( 'Description', 'novus' ),
						'id'   => $prefix . 'description',
						'type' => 'textarea',
					],
				],
			],
			[
				'name' => __( 'Title', 'novus' ),
				'id'   => $prefix . 'benefit_title',
				'type' => 'wysiwyg',
				'tab'  => 'tab_4',
			],
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'benefit',
				'type'   => 'group',
				'clone'  => true,
				'tab'  => 'tab_4',
				'fields' => [
					[
						'name' => __( 'Icon', 'novus' ),
						'id'   => $prefix . 'icon',
						'type' => 'single_image',
					],
					[
						'name' => __( 'Title', 'novus' ),
						'id'   => $prefix . 'title',
						'type' => 'text',
					],
					[
						'name' => __( 'Description', 'novus' ),
						'id'   => $prefix . 'description',
						'type' => 'textarea',
					],
					[
						'name' => __( 'Image', 'novus' ),
						'id'   => $prefix . 'image',
						'type' => 'single_image',
					],
				],
			],
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'video_img',
				'type'   => 'group',
				'clone'  => true,
				'tab'  => 'tab_5',
				'fields' => [
					[
						'name' => __( 'Image', 'novus' ),
						'id'   => $prefix . 'img',
						'type' => 'single_image',
					],
					[
						'name' => __( 'Video ID', 'novus' ),
						'id'   => $prefix . 'url',
						'type' => 'text',
					],
				],
			],
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'testimonial',
				'type'   => 'group',
				'clone'  => true,
				'tab'  => 'tab_6',
				'fields' => [
					[
						'name' => __( 'Icon', 'novus' ),
						'id'   => $prefix . 'avatar',
						'type' => 'single_image',
					],
					[
						'name' => __( 'Name', 'novus' ),
						'id'   => $prefix . 'name',
						'type' => 'text',
					],
					[
						'name' => __( 'Position', 'novus' ),
						'id'   => $prefix . 'position',
						'type' => 'text',
					],
					[
						'name' => __( 'Message', 'novus' ),
						'id'   => $prefix . 'message',
						'type' => 'textarea',
					],
				],
			],
		],
	];

	$meta_boxes[] = [
		'title'      => __( 'FAQs Settings', 'novus' ),
		'post_types' => ['page'],
		'include'    => [
			'relation' => 'OR',
			'template' => ['template-pages/faqs.php'],
		],
		'fields'     => [
			[
				'name'   => __( 'Block', 'novus' ),
				'id'     => $prefix . 'faq_block',
				'type'   => 'group',
				'clone'  => true,
				'fields' => [
					[
						'name' => __( 'Title', 'novus' ),
						'id'   => $prefix . 'title',
						'type' => 'text',
					],
					[
						'name' => __( 'Content', 'novus' ),
						'id'   => $prefix . 'detail',
						'type' => 'wysiwyg',
					],
				],
			],
		],
	];

	$meta_boxes[] = [ // Healthcare
		'title'      => __( 'Healthcare Settings', 'novus' ),
		'post_types' => ['page'],
		'include'    => [
			'relation' => 'OR',
			'template' => ['template-pages/healthcare.php'],
		],
		'tabs'   => [
			'tab_0' => [
				'label' => 'Banner',
				'icon'  => '',
			],
			'tab_3' => [
				'label' => 'Info',
				'icon'  => '',
			],
			'tab_4' => [
				'label' => 'Ebook',
				'icon'  => '',
			],
		],
		'fields'     => [
			[
				'name' => __( 'Images', 'novus' ),
				'id'   => $prefix . 'banner',
				'type' => 'single_image',
				'tab'  => 'tab_0',
			],
			[
				'name'  => __( 'Content', 'novus' ),
				'id'    => $prefix . 'banner_content',
				'type'  => 'wysiwyg',
				'clone' => true,
				'tab'   => 'tab_0',
			],
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'info',
				'type'   => 'group',
				'clone'  => true,
				'tab'  => 'tab_3',
				'fields' => [
					[
						'name' => __( 'Icon', 'novus' ),
						'id'   => $prefix . 'icon',
						'type' => 'single_image',
					],
					[
						'name' => __( 'Description', 'novus' ),
						'id'   => $prefix . 'description',
						'type' => 'wysiwyg',
					],
				],
			],
			[
				'name' => __( 'Content', 'novus' ),
				'id'   => $prefix . 'ebook_content',
				'type' => 'wysiwyg',
				'tab'  => 'tab_4',
			],
		],
	];

	$meta_boxes[] = [ // Training
		'title'      => __( 'Training Settings', 'novus' ),
		'post_types' => ['page'],
		'include'    => [
			'relation' => 'OR',
			'template' => ['template-pages/training.php'],
		],
		'tabs'   => [
			'tab_0' => [
				'label' => 'Banner',
				'icon'  => '',
			],
			'tab_3' => [
				'label' => 'Info',
				'icon'  => '',
			],
			'tab_4' => [
				'label' => 'Reason',
				'icon'  => '',
			],
			'tab_5' => [
				'label' => 'Video',
				'icon'  => '',
			],
		],
		'fields'     => [
			[
				'name' => __( 'Images', 'novus' ),
				'id'   => $prefix . 'banner',
				'type' => 'single_image',
				'tab'  => 'tab_0',
			],
			[
				'name'  => __( 'Content', 'novus' ),
				'id'    => $prefix . 'image',
				'type'  => 'single_image',
				'tab'   => 'tab_3',
			],
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'intro',
				'type'   => 'group',
				'clone'  => true,
				'tab'  => 'tab_3',
				'fields' => [
					[
						'name' => __( 'Icon', 'novus' ),
						'id'   => $prefix . 'icon',
						'type' => 'single_image',
					],
					[
						'name' => __( 'Description', 'novus' ),
						'id'   => $prefix . 'description',
						'type' => 'wysiwyg',
					],
				],
			],
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'reason',
				'type'   => 'group',
				'clone'  => true,
				'tab'  => 'tab_4',
				'fields' => [
					[
						'name' => __( 'Icon', 'novus' ),
						'id'   => $prefix . 'icon',
						'type' => 'single_image',
					],
					[
						'name' => __( 'Description', 'novus' ),
						'id'   => $prefix . 'description',
						'type' => 'wysiwyg',
					],
				],
			],
			[
				'name' => __( 'Content', 'novus' ),
				'id'   => $prefix . 'video_detail',
				'type' => 'wysiwyg',
				'tab'  => 'tab_5',
			],
		],
	];

	$meta_boxes[] = [ // Case study
		'title'      => __( 'Case study Settings', 'novus' ),
		'post_types' => ['case-study'],
		'fields'     => [
			[
				'name' => __( 'Big title', 'novus' ),
				'id'   => $prefix . 'big_title',
				'type' => 'text',
			],
			[
				'name' => __( 'Video url', 'novus' ),
				'id'   => $prefix . 'video_url',
				'type' => 'text',
			],
			[
				'name' => __( 'Image', 'novus' ),
				'id'   => $prefix . 'image',
				'type' => 'single_image',
			],
			[
				'name' => __( 'Excerpt', 'novus' ),
				'id'   => $prefix . 'short_description',
				'type' => 'wysiwyg',
			],
		],
	];

	$meta_boxes[] = [ // Blog
		'title'      => __( 'Post Settings', 'novus' ),
		'post_types' => ['post', 'case-study'],
		'fields'     => [
			[
				'name' => __( 'Banner', 'novus' ),
				'id'   => $prefix . 'banner',
				'type' => 'single_image',
			],
			[
				'name' => __( 'Excerpt', 'novus' ),
				'id'   => $prefix . 'short_description',
				'type' => 'textarea',
			],
		],
	];

	$meta_boxes[] = [ // Ebook
		'title'      => __( 'Post Settings', 'novus' ),
		'post_types' => ['ebook'],
		'fields'     => [
			[
				'name' => __( 'Cover', 'novus' ),
				'id'   => $prefix . 'cover',
				'type' => 'single_image',
			],
			[
				'name' => __( 'Table of content', 'novus' ),
				'id'   => $prefix . 'table_content',
				'type' => 'single_image',
			],
			[
				'name' => __( 'Excerpt', 'novus' ),
				'id'   => $prefix . 'short_description',
				'type' => 'textarea',
			],
			[
				'name' => __( 'Shortcode', 'novus' ),
				'id'   => $prefix . 'shortcode',
				'type' => 'text',
			],
		],
	];

	$meta_boxes[] = [ // Process
		'title'      => __( 'Process Settings', 'novus' ),
		'post_types' => ['page'],
		'include'    => [
			'relation' => 'OR',
			'template' => ['template-pages/process.php'],
		],
		'tabs'   => [
			'tab_1' => [
				'label' => 'About us',
				'icon'  => '',
			],
			'tab_3' => [
				'label' => 'Process',
				'icon'  => '',
			],
			'tab_4' => [
				'label' => 'Team',
				'icon'  => '',
			],
		],
		'fields'     => [
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'findout',
				'type'   => 'group',
				'clone'  => true,
				'tab'  => 'tab_1',
				'fields' => [
					[
						'name' => __( 'Image', 'novus' ),
						'id'   => $prefix . 'image',
						'type' => 'single_image',
					],
					[
						'name' => __( 'Detail', 'novus' ),
						'id'   => $prefix . 'detail',
						'type' => 'wysiwyg',
					],
				],
			],
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'process',
				'type'   => 'group',
				'clone'  => true,
				'tab'  => 'tab_3',
				'fields' => [
					[
						'name' => __( 'Title', 'novus' ),
						'id'   => $prefix . 'title',
						'type' => 'text',
					],
					[
						'name'   => __( 'Content', 'novus' ),
						'id'     => $prefix . 'content',
						'type'   => 'group',
						'clone'  => true,
						'fields' => [
							[
								'name' => __( 'Icon', 'novus' ),
								'id'   => $prefix . 'image',
								'type' => 'single_image',
							],
							[
								'name' => __( 'Detail', 'novus' ),
								'id'   => $prefix . 'detail',
								'type' => 'wysiwyg',
							],
						]
					]
				],
			],
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'team',
				'type'   => 'group',
				'clone'  => true,
				'tab'  => 'tab_4',
				'fields' => [
					[
						'name' => __( 'Image', 'novus' ),
						'id'   => $prefix . 'image',
						'type' => 'single_image',
					],
					[
						'name' => __( 'Name', 'novus' ),
						'id'   => $prefix . 'name',
						'type' => 'text',
					],
					[
						'name' => __( 'Position', 'novus' ),
						'id'   => $prefix . 'position',
						'type' => 'text',
					],
				],
			],
		],
	];

	$meta_boxes[] = [ // Infographic
		'title'      => __( 'Infographic Settings', 'novus' ),
		'post_types' => ['page'],
		'include'    => [
			'relation' => 'OR',
			'template' => ['template-pages/infographic.php'],
		],
		'fields'     => [
			[
				'name' => __( 'Banner', 'novus' ),
				'id'   => $prefix . 'banner',
				'type' => 'single_image',
			],
			[
				'name' => __( 'Infographic', 'novus' ),
				'id'   => $prefix . 'graphic',
				'type' => 'image_advanced',
			],
		],
	];

	$meta_boxes[] = [ // Contact
		'title'      => __( 'Infographic Settings', 'novus' ),
		'post_types' => ['page'],
		'include'    => [
			'relation' => 'OR',
			'template' => ['template-pages/contact.php'],
		],
		'fields'     => [
			[
				'name' => __( 'Banner', 'novus' ),
				'id'   => $prefix . 'banner',
				'type' => 'single_image',
			],
			[
				'name' => __( 'Form shortcode', 'novus' ),
				'id'   => $prefix . 'form',
				'type' => 'text',
			],
		],
	];

	$meta_boxes[] = [ // Archive banner
		'title'      => __( 'Banner Settings', 'novus' ),
		'post_types' => ['page'],
		'include'    => [
			'relation' => 'OR',
			'template' => ['template-pages/archive-banner.php'],
		],
		'fields'     => [
			[
				'name'          => __( '', 'novus' ),
				'id'            => $prefix . 'layout',
				'type'          => 'group',
				'collapsible'   => true,
				'default_state' => 'collapsed',
				'group_title'   => 'Banner {style}',
				'clone'         => true,
				'sort_clone'    => true,
				'fields'        => [
					[
						'id'      => 'style',
						'name'    => 'Choose Type',
						'type'    => 'select',
						'options' => [
							'blog'  => 'Blog',
							'ebook' => 'eBook',
						]
					],
					[
						'name'    => __( 'Content', 'novus' ),
						'id'      => $prefix . 'layout_content',
						'type'    => 'wysiwyg',
						'options' => [
							'tinymce' => true,
						],
					],
					[
						'name'    => __( 'Image', 'novus' ),
						'id'      => $prefix . 'layout_image',
						'type'    => 'single_image',
					],
					[
						'name'        => __( 'Button', 'novus' ),
						'id'          => $prefix . 'layout_button',
						'type'        => 'group',
						'collapsible' => true,
						'clone'       => true,
						'sort_clone'  => true,
						'fields'      => [
							[
								'name' => 'Open video?',
								'id'   => 'is_video',
								'type' => 'checkbox',
								'std'  => 0,
							],
							[
								'id'      => 'button_text',
								'name'    => 'Text',
								'type'    => 'text',
							],
							[
								'id'      => 'button_url',
								'name'    => 'Url/Video ID',
								'type'    => 'text',
							],
						]
					],
				]
			]
		]
	];

	$meta_boxes[] = [ // Education Layout
		'title'      => __( 'Layout Settings', 'novus' ),
		'post_types' => ['page'],
		'include'    => [
			'relation' => 'OR',
			'template' => ['template-pages/education.php',
							'template-pages/faqs.php',
							'template-pages/infographic.php',
							'template-pages/process.php',
							'template-pages/contact.php'
						],
		],
		'fields'     => [
			[
				'name'          => __( '', 'novus' ),
				'id'            => $prefix . 'layout',
				'type'          => 'group',
				'collapsible'   => true,
				'default_state' => 'collapsed',
				'group_title'   => 'Block {#}',
				'clone'         => true,
				'sort_clone'    => true,
				'fields'        => [
					[
						'id'      => 'style',
						'name'    => 'Choose style',
						'type'    => 'select',
						'options' => [
							4  => 'Banner Style 1',
							1  => 'Banner Style 2',
							2  => 'Why F Style 1',
							11 => 'Why F Style 2',
							7  => 'Case Study Style 1',
							6  => 'Case Study Style 2',
							8  => 'Video',
							9  => 'Style 9',
							10 => 'CTA Style 1',
							5  => 'CTA Style 2',
							3  => 'CTA Style 3',
							12 => 'Accodions',
						]
					],
					[
						'id'      => $prefix . 'preview_1',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-1.png' . '" />',
						'visible' => [ 'style', 'in', [1] ]
					],
					[
						'id'      => $prefix . 'preview_2',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-2.png' . '" />',
						'visible' => [ 'style', 'in', [2] ]
					],
					[
						'id'      => $prefix . 'preview_3',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-3.png' . '" />',
						'visible' => [ 'style', 'in', [3] ]
					],
					[
						'id'      => $prefix . 'preview_4',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-4.png' . '" />',
						'visible' => [ 'style', 'in', [4] ]
					],
					[
						'id'      => $prefix . 'preview_5',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-5.png' . '" />',
						'visible' => [ 'style', 'in', [5] ]
					],
					[
						'id'      => $prefix . 'preview_6',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-6.png' . '" />',
						'visible' => [ 'style', 'in', [6] ]
					],
					[
						'id'      => $prefix . 'preview_7',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-7.png' . '" />',
						'visible' => [ 'style', 'in', [7] ]
					],
					[
						'id'      => $prefix . 'preview_8',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-8.png' . '" />',
						'visible' => [ 'style', 'in', [8] ]
					],
					[
						'id'      => $prefix . 'preview_9',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-9.png' . '" />',
						'visible' => [ 'style', 'in', [9] ]
					],
					[
						'id'      => $prefix . 'preview_10',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-10.png' . '" />',
						'visible' => [ 'style', 'in', [10] ]
					],
					[
						'id'      => $prefix . 'preview_11',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-11.png' . '" />',
						'visible' => [ 'style', 'in', [11] ]
					],
					[
						'id'      => $prefix . 'preview_12',
						'name'    => 'Preview',
						'type'    => 'custom_html',
						'std'     => '<img style="max-width: 600px" src="' . NOVUS_IMG . '/style-12.png' . '" />',
						'visible' => [ 'style', 'in', [12] ]
					],
					[
						'name' => 'Right to Left?',
						'id'   => 'reverse',
						'type' => 'checkbox',
						'std'  => 0,
					],
					[
						'name'    => __( 'Background', 'novus' ),
						'id'      => $prefix . 'layout_background',
						'type'    => 'single_image',
					],
					[
						'name'    => __( 'Title', 'novus' ),
						'id'      => $prefix . 'layout_title',
						'type'    => 'text',
						'visible' => [ 'style', 'in', [2] ]
					],
					[
						'name'    => __( 'Content', 'novus' ),
						'id'      => $prefix . 'layout_content',
						'type'    => 'wysiwyg',
						'options' => [
							'tinymce' => true,
						],
						'visible' => [ 'style', 'in', [1,3,4,5,6,7,8,9,10,11] ]
					],
					[
						'name'    => __( 'Image', 'novus' ),
						'id'      => $prefix . 'layout_image',
						'type'    => 'single_image',
						'visible' => [ 'style', 'in', [1,2,4,6,7,9] ]
					],
					[
						'name'    => __( 'Text', 'novus' ),
						'id'      => $prefix . 'layout_textbox',
						'type'    => 'wysiwyg',
						'visible' => [ 'style', 'in', [6] ]
					],
					[
						'name'    => __( 'Textbox float', 'novus' ),
						'id'      => $prefix . 'layout_textbox_float',
						'type'    => 'textarea',
						'visible' => [ 'style', 'in', [6] ]
					],
					[
						'name'    => __( 'Content Bottom', 'novus' ),
						'id'      => $prefix . 'layout_content_bottom',
						'type'    => 'wysiwyg',
						'visible' => [ 'style', 'in', [4] ]
					],
					[
						'name'    => __( 'Video ID', 'novus' ),
						'id'      => $prefix . 'layout_video',
						'type'    => 'text',
						'visible' => [ 'style', 'in', [1,4,6,7] ]
					],
					[
						'name'        => __( 'Button', 'novus' ),
						'id'          => $prefix . 'layout_button',
						'type'        => 'group',
						'collapsible' => true,
						'clone'       => true,
						'sort_clone'  => true,
						'visible'     => [ 'style', 'in', [1,3,4,5,6,10] ],
						'fields'      => [
							[
								'name' => 'Open video?',
								'id'   => 'is_video',
								'type' => 'checkbox',
								'std'  => 0,
							],
							[
								'id'      => 'button_text',
								'name'    => 'Text',
								'type'    => 'text',
							],
							[
								'id'      => 'button_url',
								'name'    => 'Url/Video ID',
								'type'    => 'text',
							],
						]
					],
					[
						'name'        => __( 'Box Icon', 'novus' ),
						'id'          => $prefix . 'layout_box_icon',
						'type'        => 'group',
						'collapsible' => true,
						'clone'       => true,
						'sort_clone'  => true,
						'visible'     => [ 'style', 'in', [2,5,11] ],
						'fields'      => [
							[
								'id'      => 'icon',
								'name'    => 'Icon',
								'type'    => 'single_image',
							],
							[
								'name' => __( 'Icon width', 'novus' ),
								'id'   => $prefix . 'width',
								'type' => 'text',
							],
							[
								'name' => __( 'Icon height', 'novus' ),
								'id'   => $prefix . 'height',
								'type' => 'text',
							],
							[
								'id'      => 'text',
								'name'    => 'Text',
								'type'    => 'wysiwyg',
							],
						]
					],
					[
						'name'        => __( 'Toggle', 'novus' ),
						'id'          => $prefix . 'layout_toggle',
						'type'        => 'group',
						'collapsible' => true,
						'clone'       => true,
						'sort_clone'  => true,
						'visible'     => [ 'style', 'in', [7,12] ],
						'fields'      => [
							[
								'id'      => 'title',
								'name'    => 'Title',
								'type'    => 'text',
							],
							[
								'id'      => 'text',
								'name'    => 'Text',
								'type'    => 'wysiwyg',
							],
							[
								'id'      => 'button_text',
								'name'    => 'Button text',
								'type'    => 'text',
							],
							[
								'id'      => 'button_url',
								'name'    => 'Button url',
								'type'    => 'text',
							],
						]
					],
					[
						'name'        => __( 'Video', 'novus' ),
						'id'          => $prefix . 'layout_video_group',
						'type'        => 'group',
						'collapsible' => true,
						'clone'       => true,
						'sort_clone'  => true,
						'visible'     => [ 'style', 'in', [8] ],
						'fields'      => [
							[
								'id'      => 'title',
								'name'    => 'Title',
								'type'    => 'text',
							],
							[
								'id'      => 'video',
								'name'    => 'Video ID',
								'type'    => 'text',
							],
							[
								'id'      => 'image',
								'name'    => 'Image',
								'type'    => 'single_image',
							],
						]
					],
				],
			],
		],
	];

	return $meta_boxes;
}

/*
* Customize the default color palette for TinyMce editor
*/
function wpr_custom_color_tinymce( $options ) {
	$options['textcolor_map'] = json_encode(
		[
			'F7941E', 'Code - Orange',
		]
	);
	return $options;
}
add_filter( 'tiny_mce_before_init', 'wpr_custom_color_tinymce' );