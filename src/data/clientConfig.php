<?php

return [
	[
		'label' => 'Основное',
		'description' => '',
		'items' => [
			['key' => 'policy', 'xtype' => 'modx-panel-tv-file', 'label' => 'Политика конфиденциальности', 'value' => '#'],
			['key' => 'emailto', 'xtype' => 'textfield', 'label' => 'E-mail для заявок', 'value' => ''],
		],
	],
	[
		'label' => 'Контактная информация',
		'description' => '',
		'items' => [
			['key' => 'address', 'xtype' => 'textfield', 'label' => 'Адрес', 'value' => ''],
			['key' => 'phone', 'xtype' => 'textfield', 'label' => 'Телефон', 'value' => ''],
			['key' => 'email', 'xtype' => 'textfield', 'label' => 'E-mail', 'value' => ''],
		],
	],
	[
		'label' => 'Метрики и скрипты',
		'description' => '',
		'items' => [
			['key' => 'ga_identifier', 'xtype' => 'textfield', 'label' => 'Идентификатор счетчика Google Analytics', 'value' => ''],
			['key' => 'ym_identifier', 'xtype' => 'textfield', 'label' => 'Идентификатор счетчика Яндекс Метрики', 'value' => ''],
			['key' => 'custom_scripts', 'xtype' => 'code', 'label' => 'Скрипты', 'value' => ''],
		],
	],
];
