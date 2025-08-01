<?php

return [
	[
		'name' => 'image',
		'type' => 'mixedimage',
		'caption'  => 'Изображение',
		'category' => 0,
		'input_properties' => [
			'path' => 'assets/resources/{id}/',
			'prefix' => '{rand}-',
			'MIME' => '',
			'showValue' => false,
			'showPreview' => true,
		],
	],
	[
		'name' => 'seo_title',
		'type' => 'text',
		'caption'  => 'SEO Title',
		'category' => 0,
	],
	[
		'name' => 'seo_description',
		'type' => 'textarea',
		'caption'  => 'SEO Description',
		'category' => 0,
	],
];
