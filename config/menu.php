<?php
return [
	[
		"title" => "System",
		"desc" => "Manage System Related Configurations and Data",
		"submenu" => [
			[
				"title" => "Admins",
				"url" => "admins.index",
				"icon" => "media/svg/icons/Communication/Group.svg",
			],
			[
				"title" => "Settings",
				"url" => "settings.list",
				"icon" => "media/svg/icons/Code/Settings4.svg",
			],
		],
	],
	[
		"title" => "Mall Data",
		"desc" => "Data for Products, Categories, etc. to be used on the e-Commerce",
		"submenu" => [
			[
				"title" => "Product",
				"url" => "product.list",
				"icon" => "media/svg/icons/Shopping/Box3.svg",
			],
			[
				"title" => "Brand",
				"url" => "brands.index",
				"icon" => "media/svg/icons/Layout/Layout-4-blocks.svg",
			],
			[
				"title" => "Category",
				"url" => "categories.index",
				"icon" => "media/svg/icons/Layout/Layout-4-blocks.svg",
			],
		],
	],
	[
		"title" => "Dashboard",
		"desc" => "Recent Updates & Reports",
		"url" => "Test123.html",
		"submenu" => [
			[
				"title" => "Latest Updated",
				"desc" => "",
				"url" => "/home",
				"icon" => 'media/svg/icons/Communication/Add-user.svg',
			],
			[
				"title" => "Second Menu with Child",
				"desc" => "",
				"icon" => 'media/svg/icons/Files/Pictures1.svg',
				"submenu" => [
					[
						"title" => "test-submenu",
						"desc" => "",
						"bullet" => true,
						"url" => "/home",
					],
					[
						"title" => "test-submenu",
						"desc" => "",
						"icon" => 'media/svg/icons/Files/Pictures1.svg',
						"bullet" => true,
						"url" => "/home",
					],
					[
						"title" => "test-submenu",
						"desc" => "",
						"icon" => 'media/svg/icons/Files/Pictures1.svg',
						"url" => "/home",
					]
				]
			],
			[
				"title" => "Second Menu with Child",
				"desc" => "",
				"icon" => 'media/svg/icons/Communication/Address-card.svg',
				"submenu" => [
					[
						"title" => "test-submenu2",
						"desc" => "",
						"bullet" => true,
						"url" => "/home",
					],
					[
						"title" => "test-submenu3",
						"desc" => "",
						"icon" => 'media/svg/icons/Files/Pictures1.svg',
						"bullet" => true,
						"url" => "/home",
					],
					[
						"title" => "test-submenu4",
						"desc" => "",
						"url" => "/home",
					]
				]
			]
		],
	],
	[
		"title" => "Pages",
		"desc" => "Recent Updates & Reports",
		"url" => "Test123.html",
		// TODO : FIXED MENU size not done yet!
		// "submenu-fixed" => true,
		"submenu-align" => "right", // alignment of submenu, default: left
		"submenu" => [
			[
				"title" => "Latest Updated",
				"desc" => "",
				"url" => "/home",
				"icon" => 'media/svg/icons/Communication/Add-user.svg',
			],
			[
				"title" => "Customer Group",
				"desc" => "",
				"icon" => 'media/svg/icons/Files/Pictures1.svg',
				"submenu" => [
					[
						"title" => "customer-group",
						"desc" => "",
						"bullet" => true,
						"url" => "/customer-groups",
					],
					[
						"title" => "test-submenu",
						"desc" => "",
						"icon" => 'media/svg/icons/Files/Pictures1.svg',
						"bullet" => true,
						"url" => "/home",
					],
					[
						"title" => "test-submenu",
						"desc" => "",
						"icon" => 'media/svg/icons/Files/Pictures1.svg',
						"url" => "/home",
					]
				]
			],
			[
				"title" => "Second Menu with Child",
				"desc" => "",
				"icon" => 'media/svg/icons/Communication/Address-card.svg',
				"submenu" => [
					[
						"title" => "test-submenu2",
						"desc" => "",
						"bullet" => true,
						"url" => "/home",
					],
					[
						"title" => "test-submenu3",
						"desc" => "",
						"icon" => 'media/svg/icons/Files/Pictures1.svg',
						"bullet" => true,
						"url" => "/home",
					],
					[
						"title" => "test-submenu4",
						"desc" => "",
						"url" => "/home",
					]
				]
			]
		],
	]
];