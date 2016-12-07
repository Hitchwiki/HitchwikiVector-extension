// Modify languages menu
( function ( mw, $ ) {

  if(mw.config.get('wgAction') == 'view') {

    $languagesPortal = $('#p-lang');

    if($languagesPortal.length) {

      $languages = $languagesPortal.find('ul').addClass('hw-interwiki');

      // Add languages under the main title on other pages except main page
      if(mw.config.get('wgPageName') != 'Main_Page') {
        $languages.insertAfter('#firstHeading');
      }

      $languagesPortal.remove();

      if(mw.config.exists( 'wgUserLanguage' )) {
        $languages.find( '.interwiki-' + mw.config.get('wgUserLanguage') ).addClass('hw-userlang');
      }

    }

  }

}( mediaWiki, jQuery ) );
