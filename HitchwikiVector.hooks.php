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

		$modules = array(
			'skins.vector.hitchwiki'
		);

		$out->addModules( $modules );

		return true;
	}

}
