(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton('my_mce_button', {
			text: 'New Button hello world i am here',
			icon: false,
			onclick: function() {
				editor.insertContent('WPExplorer.com is awesome!');
			}
		});
	});
})();