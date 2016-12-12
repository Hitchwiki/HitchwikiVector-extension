// Modify navigation menu
( function ( mw, $ ) {

  mw.log('->HitchwikiVector->Navigation');

  var popup;

  // Toolbox list at the sidebar
  // Produced by `TOOLS` at `/scripts/pages/MediaWiki:Sidebar`
  var $tools = $('#p-tb');

  // If tools section exists
  if($tools.length) {
    // Toggle html element
    // This link is defined at `/scripts/pages/MediaWiki:Sidebar`
    // At the wiki you can see page `/en/MediaWiki:Sidebar`
    // (separate for each language version)
    var $toolsToggle = $('#n-Tools a');

    // Open `TOOLBOX` menu when clicking tools -toggle link
    if($toolsToggle.length) {
      $toolsToggle.on('click', function(e) {
        mw.log('->HitchwikiVector->Navigation->Toggle tools. #f390nf');
        e.preventDefault();
        //$tools.toggle();

        // Initialize popup if it isn't yet
        if (!popup) {
          // https://www.mediawiki.org/wiki/OOjs_UI/Widgets/Popups
          // https://doc.wikimedia.org/oojs-ui/master/js/#!/api/OO.ui.PopupWidget
          popup = new OO.ui.PopupWidget({
            $content: '<b>Test</b> test2', // $tools.find('.body').html(),
            padded: true,
            autoClose: false,
            align: 'forwards',
            width: 200
          });
          $toolsToggle.append(popup.$element);
        }

        // To display the popup, toggle the visibility to 'true'.
        popup.toggle(true);

      });

    } else {
      mw.log('->HitchwikiVector->Navigation: No tools toggle link #349n3k');
    }
  } else {
    mw.log('->HitchwikiVector->Navigation: No tools section #gtj3in');
  }

}( mediaWiki, jQuery ) );
