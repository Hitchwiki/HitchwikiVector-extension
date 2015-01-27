// Modify languages menu
( function ( mw, $ ) {

  $languagesPortal = $("#p-lang");

  $languages = $languagesPortal.find("ul");

  //$languagesWrap = $('<div id="hw-language"><a href="#" id="hw-language-dropdown">In other languages</a></div>');
  $languagesWrap = $('<li class="mw-icon mw-more-icon mw-menu-item" id="mw-language">In other languages</li>');

  $languages.addClass('mw-more-menu');
  $languages.find("li").addClass('mw-menu-item');
  $languagesWrap.append($languages);
  $languagesWrap.appendTo("#mw-page-actions");

  $languagesPortal.remove();

}( mediaWiki, jQuery ) );
