<?php

class HitchwikiHooks {

	/**
	 * Handler for BeforePageDisplay
	 * @param OutputPage $out
	 * @param Skin $skin
	 * @return bool
	 */
	static function onBeforePageDisplay( &$out, &$skin ) {
		// Ensure Hitchwiki skin runs only against Vector skin
		// FIXME: See bug 62897
		if ( $skin->getSkinName() !== 'vector' ) {
			return true;
	  }

		// Add our modules
		$modules = array(
			'skins.vector.hitchwiki'
		);
		$out->addModules( $modules );

		return true;
	}

	/**
	* Disable powered by footer icons
	* Handled at hook BeforePageDisplay
	* @param OutputPage $out
	* @param Skin $skin
	* @return bool
	*/
	static function modifyFooterIcons( &$out, &$skin ) {
		global $wgFooterIcons;
		unset($wgFooterIcons["poweredby"]);
		unset($wgFooterIcons["copyright"]);
		return true;
	}

}
