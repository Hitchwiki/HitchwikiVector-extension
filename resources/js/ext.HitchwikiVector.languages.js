// Modify languages menu
( function ( mw, $ ) {

  $languagesPortal = $("#p-lang");

  $languages = $languagesPortal.find("ul").addClass("hw-interwiki");

  $languages.insertAfter("#firstHeading");

  $languagesPortal.remove();

}( mediaWiki, jQuery ) );
