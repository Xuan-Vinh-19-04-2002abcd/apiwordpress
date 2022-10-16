(function (api) {

	// Extends our custom "Blog Starter" section.
	api.sectionConstructor['author-portfolio'] = api.Section.extend({

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	});
	// jQuery("#accordion-panel-author-portfolio-theme-options").addClass("custom-class");

})(wp.customize);