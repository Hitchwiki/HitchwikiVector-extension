<?php
/*
 * Create <languages> template tag
 *
 * Lists all the Hitchwiki network languages from $hwLangConfig global variable
 *
 * https://www.mediawiki.org/wiki/Manual:Tag_extensions
 *
 * $hwLangConfig is supposed to look like this:
 *
 * Array
 * (
 *     [languages] => Array
 *         (
 *             [en] => English
 *             [de] => German
 * 						...
 *             [zh] => Chinese
 *         )
 *
 *     [wikinames] => Array
 *         (
 *             [de] => Tramperwiki
 * 						...
 *             [pt] => CaronaWiki
 *         )
 *
 *     [settings] => Array
 *         (
 *             [baby] => Array
 *                 (
 *                     [0] => nl
 *                     [1] => lt
 * 										...
 *                     [8] => bg
 *                 )
 *
 *         )
 * )
 */


class HitchwikiVectorTagLanguages {

  // Execute
  static function languagesRender( $input, array $args, Parser $parser, PPFrame $frame ) {
    global $hwLangConfig;

		if(!is_array($hwLangConfig["languages"]) || !isset($hwLangConfig['settings']['baby'])) {
			return '';
		}

		$languages = '<div class="mw-languages">';


		// Big wikis
		$languages .= '<ul class="mw-languages-major">';
  	foreach($hwLangConfig["languages"] as $langCode => $langName) {
			// If it's NOT in Babylist
			if(!in_array($langCode, $hwLangConfig['settings']['baby'])) {

				$articlesFormat = (isset($hwLangConfig['articles'][$langCode])) ? $hwLangConfig['articles'][$langCode] : '%d articles';

				$languages .= '<li>';
				$languages .= '<a href="/'.$langCode.'">'.$langName.'</a>';
				$languages .= '<span class="hw-languages-articles">' . sprintf($articlesFormat, 0) . '</span>';
				$languages .= '</li>';
			}
		}
		$languages .= '</ul>';


		// Baby wikis
		$languages .= '<h4 class="mw-languages-label-minor">Baby wikis</h4>';
		$languages .= '<ul class="mw-languages-minor">';
  	foreach($hwLangConfig["languages"] as $langCode => $langName) {
			// If it IS in Babylist
			if(in_array($langCode, $hwLangConfig['settings']['baby'])) {

				$articlesFormat = (isset($hwLangConfig['articles'][$langCode])) ? $hwLangConfig['articles'][$langCode] : '%d articles';

				$languages .= '<li>';
				$languages .= '<a href="/'.$langCode.'">'.$langName.'</a>';
				$languages .= '<span class="hw-languages-articles">(' . sprintf($articlesFormat, 0) . ')</span>';
				$languages .= '</li>';
			}
		}
		$languages .= '</ul>';


		$languages .= '</div>'; //mw-languages

  	return $languages;
  }

}
