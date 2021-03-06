<?php

return array(

	'apc_enabled' => false,
	'apc_prefix' => 'slim:',
	'uploaddir' => '/',

	'page' => array(
		'account-index' => array( 'account/profile','account/history','account/favorite','account/watch','basket/mini','catalog/session' ),
		'basket-index' => array( 'basket/standard','basket/related' ),
		'catalog-count' => array( 'catalog/count' ),
		'catalog-detail' => array( 'basket/mini','catalog/stage','catalog/detail','catalog/session' ),
		'catalog-list' => array( 'basket/mini','catalog/filter','catalog/stage','catalog/lists' ),
		'catalog-stock' => array( 'catalog/stock' ),
		'catalog-suggest' => array( 'catalog/suggest' ),
		'checkout-confirm' => array( 'checkout/confirm' ),
		'checkout-index' => array( 'checkout/standard' ),
		'checkout-update' => array( 'checkout/update'),
	),

	'resource' => array(
		'db' => array(
			'adapter' => 'mysql',
			'host' => 'localhost',
			'port' => '',
			'database' => 'slim',
			'username' => 'root',
			'password' => '',
			'stmt' => array( "SET NAMES 'utf8'", "SET SESSION sql_mode='ANSI'", "SET SESSIOn sort_buffer_size=1048572" ),
			'opt-persistent' => 0,
			'limit' => 2,
		),
		'fs' => array(
			'adapter' => 'Standard',
			'basedir' => './',
		),
		'fs-admin' => array(
			'adapter' => 'Standard',
			'basedir' => './uploads',
		),
		'fs-secure' => array(
			'adapter' => 'Standard',
			'basedir' => '../secure',
		),
		'mq' => array(
			'adapter' => 'Standard',
			'db' => 'db',
		),
	),

	'admin' => array(
		'extjs' => array(
			'url' => array(
				'target' => 'aimeos_shop_extadm',
			),
		),
		'jqadm' => array(
			'url' => array(
				'copy' => array(
					'target' => 'aimeos_shop_jqadm_copy'
				),
				'create' => array(
					'target' => 'aimeos_shop_jqadm_create'
				),
				'delete' => array(
					'target' => 'aimeos_shop_jqadm_delete'
				),
				'get' => array(
					'target' => 'aimeos_shop_jqadm_get'
				),
				'save' => array(
					'target' => 'aimeos_shop_jqadm_save'
				),
				'search' => array(
					'target' => 'aimeos_shop_jqadm_search'
				),
			)
		),
		'jsonadm' => array(
			'url' => array(
				'target' => 'aimeos_shop_jsonadm_get',
				'config' => array(
					'absoluteUri' => true,
				),
				'options' => array(
					'target' => 'aimeos_shop_jsonadm_options',
					'config' => array(
						'absoluteUri' => true,
					),
				),
			),
		),
	),
	'client' => array(
		'html' => array(
			'account' => array(
				'history' => array(
					'url' => array(
						'target' => 'aimeos_shop_account',
					),
				),
				'favorite' => array(
					'url' => array(
						'target' => 'aimeos_shop_account_favorite',
					),
				),
				'watch' => array(
					'url' => array(
						'target' => 'aimeos_shop_account_watch',
					),
				),
				'download' => array(
					'url' => array(
						'target' => 'aimeos_shop_account_download',
					),
				),
			),
			'basket' => array(
				'standard' => array(
					'url' => array(
						'target' => 'aimeos_shop_basket',
					),
				),
			),
			'catalog' => array(
				'count' => array(
					'url' => array(
						'target' => 'aimeos_shop_count',
					),
				),
				'detail' => array(
					'url' => array(
						'target' => 'aimeos_shop_detail',
					),
				),
				'lists' => array(
					'url' => array(
						'target' => 'aimeos_shop_list',
					),
				),
				'session' => array(
					'pinned' => array(
						'url' => array(
							'target' => 'aimeos_shop_session_pinned',
						),
					),
				),
				'stock' => array(
					'url' => array(
						'target' => 'aimeos_shop_stock',
					),
				),
				'suggest' => array(
					'url' => array(
						'target' => 'aimeos_shop_suggest',
					),
				),
			),
			'checkout' => array(
				'confirm' => array(
					'url' => array(
						'target' => 'aimeos_shop_confirm',
					),
				),
				'standard' => array(
					'url' => array(
						'target' => 'aimeos_shop_checkout',
					),
					'summary' => array(
						'option' => array(
							'terms' => array(
								'url' => array(
									'target' => 'aimeos_shop_terms',
								),
								'privacy' => array(
									'url' => array(
										'target' => 'aimeos_shop_privacy',
									),
								),
							),
						),
					),
				),
				'update' => array(
					'url' => array(
						'target' => 'aimeos_shop_update',
					),
				),
			),
			'common' => array(
				'content' => array(
					'baseurl' => '/',
				),
				'template' => array(
					'baseurl' => './aimeos/elegance',
				),
			),
		),
		'jsonapi' => array(
			'url' => array(
				'target' => 'aimeos_shop_jsonapi_get',
				'options' => array(
					'target' => 'aimeos_shop_jsonapi_options',
				),
			),
		),
	),


	'controller' => array(
		'common' => array(
			'media' => array(
				'standard' => array(
					'mimeicon' => array(
						# Directory where icons for the mime types stored
						'directory' => 'aimeos/mimeicons',
						# File extension of mime type icons
						'extension' => '.png'
					),
					# Parameters for images
					'files' => array(
						# Allowed image mime types, other image types will be converted
						# allowedtypes: [image/jpeg, image/png, image/gif ]
						# Image type to which all other image types will be converted to
						# defaulttype: jpeg
						# Maximum width of an image
						# Image will be scaled up or down to this size without changing the
						# width/height ratio. A value of "null" doesn't scale the image or
						# doesn't restrict the size of the image if it's scaled due to a value
						# in the "maxheight" parameter
						# maxwidth:
						# Maximum height of an image
						# Image will be scaled up or down to this size without changing the
						# width/height ratio. A value of "null" doesn't scale the image or
						# doesn't restrict the size of the image if it's scaled due to a value
						# in the "maxwidth" parameter
						# maxheight:
						# Parameter for preview images
					),
					# Parameters for preview images
					'preview' => array(
						# Allowed image mime types, other image types will be converted
						# allowedtypes: [image/jpeg, image/png, image/gif ]
						# Image type to which all other image types will be converted to
						# defaulttype: jpeg
						# Maximum width of a preview image
						# Image will be scaled up or down to this size without changing the
						# width/height ratio. A value of "null" doesn't scale the image or
						# doesn't restrict the size of the image if it's scaled due to a value
						# in the "maxheight" parameter
						# maxwidth: 360
						# Maximum height of a preview image
						# Image will be scaled up or down to this size without changing the
						# width/height ratio. A value of "null" doesn't scale the image or
						# doesn't restrict the size of the image if it's scaled due to a value
						# in the "maxwidth" parameter
						# maxheight: 280
					),
				),
			),
		),
		'extjs' => array(
			'attribute' => array(
				'export' => array(
					'text' => array(
						'default' => array(
							'downloaddir' => 'uploads',
						),
					),
				),
			),
			'catalog' => array(
				'export' => array(
					'text' => array(
						'default' => array(
							'downloaddir' => 'uploads',
						),
					),
				),
			),
			'product' => array(
				'export' => array(
					'text' => array(
						'default' => array(
							'downloaddir' => 'uploads',
						),
					),
				),
			),
		),
	),

	'mshop' => array(
		'customer' => array(
			'manager' => array(
				'password' => array(
					'name' => 'Bcrypt',
				),
			),
		),
		'index' => array(
			'manager' => array(
				'name' => 'MySQL',
				'attribute' => array(
					'name' => 'MySQL',
				),
				'catalog' => array(
					'name' => 'MySQL',
				),
				'price' => array(
					'name' => 'MySQL',
				),
				'text' => array(
					'name' => 'MySQL',
				),
			),
		),
	),

);
