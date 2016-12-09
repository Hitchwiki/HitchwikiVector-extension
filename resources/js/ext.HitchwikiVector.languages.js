// Modify languages menu
( function ( mw, $ ) {

  if(mw.config.get('wgAction') == 'view') {

    // Languages list at the sidebar
    // Produced by `LANGUAGES` at `/scripts/pages/MediaWiki:Sidebar`
    $languagesPortal = $('#p-lang');

    if($languagesPortal.length) {

      // Grab languages list
      $languages = $languagesPortal.find('ul').addClass('hw-interwiki');

      // Add languages under the main title on other pages except main page
      if(mw.config.exists('wgPageName') && mw.config.get('wgPageName') != 'Main_Page') {
        $languages.insertAfter('#firstHeading');
      }

      // Remove languages list from the sidebar
      $languagesPortal.remove();

      // Highlight users own language
      if(mw.config.exists('wgUserLanguage')) {
        $languages.find( '.interwiki-' + mw.config.get('wgUserLanguage') ).addClass('hw-userlang');
      }

    }

  }

}( mediaWiki, jQuery ) );
