( function ( mw, $ ) {

  // For some odd reason, these had fixed min-style:600px
  // That sucks. Removing it (they're handled at HitchwikiVector/resources/styles/forms.less instead)
	$( function () {
    $(".sf-select2-container").attr("style", "");
	} );

}( mediaWiki, jQuery ) );
