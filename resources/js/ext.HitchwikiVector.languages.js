// Modify languages menu
( function ( mw, $ ) {

  $languagesPortal = $("#p-lang");

  $languages = $languagesPortal.find("ul").addClass("hw-interwiki");

  $languages.insertAfter("#firstHeading");



  $languagesPortal.remove();

  if(mw.config.exists( 'wgUserLanguage' )) {
    $languages.find( ".interwiki-" + mw.config.get('wgUserLanguage') ).addClass("hw-userlang");
  }

}( mediaWiki, jQuery ) );
