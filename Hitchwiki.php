<?php
/*
 * Hitchwiki extension
 * Extends Vector template
 */

$wgHWResourceBoilerplate = array(
	'localBasePath' =>  __DIR__,
	'remoteExtPath' => 'Hitchwiki',
);

$wgExtensionCredits['skin'][] = array(
	'author' => array( 'Mikael Korpela', 'Rémi Claude' ),
	'description' => 'Hitchwiki.org template changes to Vector template.',
	'descriptionmsg' => 'hitchwiki-desc',
	'name' => 'Hitchwiki',
	'path' => __FILE__,
	'url' => 'https://github.com/hitchwiki/hitchwiki/',
	'license-name' => 'MIT'
);

$wgAutoloadClasses['HitchwikiHooks'] = __DIR__ . '/Hitchwiki.hooks.php';

$wgMessagesDirs['Hitchwiki'] = __DIR__ . '/i18n';

$wgResourceModules = array_merge( $wgResourceModules, array(

	'skins.vector.hitchwiki' => $wgHWResourceBoilerplate + array(
		//'dependencies' => array(
		//	'',
		//),
		'scripts' => array(
			'resources/hitchwiki.js',
		),
		'styles' => array(
			'resources/hitchwiki.less',
		),
		// Other ensures this loads after the Vector skin styles
		'group' => 'other',
		//'position' => 'top',
	),

) );

$wgHooks['BeforePageDisplay'][] = 'HitchwikiHooks::onBeforePageDisplay';
