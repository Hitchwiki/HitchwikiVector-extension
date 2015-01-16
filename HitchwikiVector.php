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

	'font-awesome' => $wgHWResourceBoilerplate + array(
		'styles' => array(
			'resources/vendor/font-awesome/css/font-awesome.css',
		),
	),

	'skins.vector.hitchwiki' => $wgHWResourceBoilerplate + array(
		'dependencies' => array(
			'font-awesome',
		),
		'styles' => array(
			'resources/styles/ext.HitchwikiVector.less',
		),
		// Other ensures this loads after the Vector skin styles
		'group' => 'other',
		//'position' => 'bottom',
	),

) );

$wgHooks['BeforePageDisplay'][] = 'HitchwikiHooks::onBeforePageDisplay';
$wgHooks['BeforePageDisplay'][] = 'HitchwikiHooks::modifyFooterIcons';
