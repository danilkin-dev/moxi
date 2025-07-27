<?php

return [
	'ignore' => [
		'name' => 'ignore',
		'description' => 'Обертывание выводимых данных в тег ignore',
		'events' => [
			'pdoToolsOnFenomInit' => []
		]
	],
	'composerInit' => [
		'name' => 'composerInit',
		'description' => 'Инициализация composer',
		'events' => [
			'OnMODXInit' => []
		]
	],
	'templateList' => [
		'name' => 'templateList',
		'description' => 'Добавляет кнопку показа ссылок на файловые шаблоны',
		'events' => [
			'OnTempFormPrerender' => []
		]
	],
	'managerBreadcrumbs' => [
		'name' => 'managerBreadcrumbs',
		'description' => 'Хлебные крошки в админке',
		'events' => [
			'OnDocFormPrerender' => []
		]
	],
	'addFenomModificators' => [
		'name' => 'addFenomModificators',
		'description' => 'Подключение кастомных модификаторов Fenom',
		'events' => [
			'pdoToolsOnFenomInit' => []
		],
		'source' => true,
		'static' => true,
		'static_file' => 'core/elements/plugins/addFenomModificators.php',
	],
];
