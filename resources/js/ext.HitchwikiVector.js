( function ( mw, $ ) {

	$( function () {

    // For some odd reason, these had fixed min-style:600px
    // That sucks. Removing it (they're handled at HitchwikiVector/resources/styles/forms.less instead)
    $(".sf-select2-container").attr("style", "");

    // Don't allow adding new content for non logged in users
    // wgUserId returns null when not logged in
    if(!mw.config.get('wgUserId')) {
	    $("#n-New-spot").hide();
		  $("#n-New-city").hide();
		  $("#n-Add-photo").hide();
	  }

	} );

}( mediaWiki, jQuery ) );
