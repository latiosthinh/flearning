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
				'name' => __( 'Images', 'novus' ),
				'id'   => $prefix . 'banner',
				'type' => 'single_image',
				'tab'  => 'tab_0',
			],
			[
				'name' => __( 'Video url', 'novus' ),
				'id'   => $prefix . 'video_banner',
				'type' => 'text',
				'tab'  => 'tab_0',
			],
			[
				'name' => __( 'Images', 'novus' ),
				'id'   => $prefix . 'image_advanced_tagr3b0nwfk',
				'type' => 'image_advanced',
				'tab'  => 'tab_1',
			],
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'intro',
				'type'   => 'group',
				'clone'  => true,
				'tab'  => 'tab_2',
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
				'name' => __( 'Image', 'novus' ),
				'id'   => $prefix . 'reason_image',
				'type' => 'single_image',
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
						'name' => __( 'Image Gif', 'novus' ),
						'id'   => $prefix . 'img',
						'type' => 'single_image',
					],
					[
						'name' => __( 'Video URL', 'novus' ),
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

	$meta_boxes[] = [ // Education
		'title'      => __( 'Education Settings', 'novus' ),
		'post_types' => ['page'],
		'include'    => [
			'relation' => 'OR',
			'template' => ['template-pages/education.php'],
		],
		'tabs'   => [
			'tab_0' => [
				'label' => 'Banner',
				'icon'  => '',
			],
			'tab_1' => [
				'label' => 'What we help',
				'icon'  => '',
			],
			'tab_3' => [
				'label' => 'Video',
				'icon'  => '',
			],
			'tab_4' => [
				'label' => 'Tips',
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
				'name' => __( 'Video banner url', 'novus' ),
				'id'   => $prefix . 'video_banner',
				'type' => 'text',
				'tab'  => 'tab_0',
			],
			[
				'name' => __( 'Image', 'novus' ),
				'id'   => $prefix . 'help_image',
				'type' => 'single_image',
				'tab'  => 'tab_1',
			],
			[
				'name'   => __( 'Title', 'novus' ),
				'id'     => $prefix . 'help_title',
				'type'   => 'text',
				'tab'  => 'tab_1',
			],
			[
				'name' => __( 'Content', 'novus' ),
				'id'   => $prefix . 'help_detail',
				'type' => 'wysiwyg',
				'tab'  => 'tab_1',
			],
			[
				'name' => __( 'Image', 'novus' ),
				'id'   => $prefix . 'case_study_image',
				'type' => 'single_image',
				'tab'  => 'tab_2',
			],
			[
				'name' => __( 'Content', 'novus' ),
				'id'   => $prefix . 'video_detail',
				'type' => 'wysiwyg',
				'tab'  => 'tab_3',
			],
			[
				'name'   => __( '', 'novus' ),
				'id'     => $prefix . 'tips',
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
						'type' => 'textarea',
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
			'tab_0' => [
				'label' => 'Banner',
				'icon'  => '',
			],
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
				'name' => __( 'Images', 'novus' ),
				'id'   => $prefix . 'banner',
				'type' => 'single_image',
				'tab'  => 'tab_0',
			],
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

	return $meta_boxes;
}