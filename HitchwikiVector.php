<?php
/*
 * Hitchwiki extension
 * Extends Vector template
 */

$wgHWResourceBoilerplate = array(
	'localBasePath' =>  __DIR__,
	'remoteExtPath' => 'HitchwikiVector',
);

$wgExtensionCredits['skin'][] = array(
	'author' => array( 'Mikael Korpela', 'Rémi Claude' ),
	'description' => "Hitchwiki skin extension to turn MediaWiki's Vector skin awesomly orange.",
	'descriptionmsg' => 'hitchwiki-desc',
	'name' => 'HitchwikiVector',
	'path' => __FILE__,
	'url' => 'https://github.com/Hitchwiki/HitchwikiVector-extension',
	'license-name' => 'MIT'
);

$wgAutoloadClasses['HitchwikiHooks'] = __DIR__ . '/HitchwikiVector.hooks.php';

$wgMessagesDirs['HitchwikiVector'] = __DIR__ . '/i18n';

$wgResourceModules = array_merge( $wgResourceModules, array(

	'skins.vector.hitchwiki' => $wgHWResourceBoilerplate + array(
		'styles' => array(
			'resources/styles/ext.HitchwikiVector.less',
		),
		'scripts' => array(
			'resources/js/ext.HitchwikiVector.js',
			'resources/js/ext.HitchwikiVector.languages.js',
		),
		// Other ensures this loads after the Vector skin styles
		'group' => 'other',
		//'position' => 'bottom',
	),

) );

$wgHooks['BeforePageDisplay'][] = 'HitchwikiHooks::onBeforePageDisplay';
$wgHooks['BeforePageDisplay'][] = 'HitchwikiHooks::modifyFooterIcons';
