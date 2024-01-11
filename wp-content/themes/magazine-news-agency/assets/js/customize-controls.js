( function( api ) {

	// Extends our custom "magazine-news-agency" section.
	api.sectionConstructor['magazine-news-agency'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );