// Modify languages menu
( function ( mw, $ ) {

  $languagesPortal = $("#p-lang");

  $languages = $languagesPortal.find("ul");

  $languages.appendTo("#content");

  $languagesPortal.remove();


}( mediaWiki, jQuery ) );
