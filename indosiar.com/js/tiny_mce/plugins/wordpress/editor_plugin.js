/* Import plugin specific language pack */
tinyMCE.importPluginLanguagePack('wordpress');

var TinyMCE_WordPressPlugin = {
	initInstance : function(inst) {
		if (!tinyMCE.settings['wordpress_skip_plugin_css'])
			tinyMCE.importCSS(inst.getDoc(), tinyMCE.baseURL + "/plugins/wordpress/css/wordpress.css");

		inst.addShortcut('ctrl', 'd', '', 'Strikethrough');
		inst.addShortcut('ctrl', 'l', '', 'InsertUnorderedList');
		inst.addShortcut('ctrl', 'o', '', 'InsertOrderedList');
		inst.addShortcut('ctrl', 'w', '', 'Outdent');
		inst.addShortcut('ctrl', 'q', '', 'Indent');
		inst.addShortcut('ctrl', 'f', '', 'JustifyLeft');
		inst.addShortcut('ctrl', 'c', '', 'JustifyCenter');
		inst.addShortcut('ctrl', 'r', '', 'JustifyRight');
		inst.addShortcut('ctrl', 'a', '', 'mceLink');
		inst.addShortcut('ctrl', 's', '', 'unlink');
		inst.addShortcut('ctrl', 't', '', 'mceWordPress_more');
		inst.addShortcut('ctrl', 'p', '', 'mceWordPress_page');
		inst.addShortcut('ctrl', 'h', '', 'mceWordPress_help');
		inst.addShortcut('ctrl', 'u', '', 'Undo');
		inst.addShortcut('ctrl', 'e', '', 'mceCodeEditor');
	},

	getInfo : function() {
		return {
			longname : 'Wordpress Plugin',
			author : 'Wordpress / Moxiecode Systems',
			authorurl : '',
			infourl : '',
			version : '2.0'
		};
	},

	getControlHTML : function(cn) {
		switch (cn) {
			case "wordpress_more":
				return tinyMCE.getButtonHTML(cn, 'lang_wordpress_more_button', '{$pluginurl}/images/more.gif', 'mceWordPress_more');

			case "wordpress_page":
				return tinyMCE.getButtonHTML(cn, 'lang_wordpress_page_button', '{$pluginurl}/images/page.gif', 'mceWordPress_page');

			case "wordpress_help":
				return tinyMCE.getButtonHTML(cn, 'lang_wordpress_help_button', '{$pluginurl}/images/help.gif', 'mceWordPress_help');
		}

		return '';
	},

	execCommand : function(editor_id, element, command, user_interface, value) {
		var inst = tinyMCE.getInstanceById(editor_id);
		var focusElm = inst.getFocusElement();
		var doc = inst.getDoc();

		// Handle commands
		switch (command) {
				case "mceWordPress_more":
					var flag = "";
					var template = new Array();
					var altMore = tinyMCE.getLang('lang_wordpress_more_alt');

					// Is selection a image
					if (focusElm != null && focusElm.nodeName.toLowerCase() == "img") {
						flag = tinyMCE.getAttrib(focusElm, 'class');
		
						if (flag != 'mce_plugin_wordpress_more') // Not a wordpress
							return true;
		
						action = "update";
					}
		
					html = ''
						+ '<img src="' + (tinyMCE.getParam("theme_href") + "/images/spacer.gif") + '" '
						+ ' width="100%" height="10px" '
						+ 'alt="'+altMore+'" title="'+altMore+'" class="mce_plugin_wordpress_more" name="mce_plugin_wordpress_more" />';
					tinyMCE.execCommand("mceInsertContent",true,html);
					tinyMCE.selectedInstance.repaint();
					return true;
				case "mceWordPress_page":
					var flag = "";
					var template = new Array();
					var altPage = tinyMCE.getLang('lang_wordpress_more_alt');
		
					// Is selection a image
					if (focusElm != null && focusElm.nodeName.toLowerCase() == "img") {
						flag = tinyMCE.getAttrib(focusElm, 'name');
		
						if (flag != 'mce_plugin_wordpress_page') // Not a wordpress
							return true;
		
						action = "update";
					}
		
					html = ''
						+ '<img src="' + (tinyMCE.getParam("theme_href") + "/images/spacer.gif") + '" '
						+ ' width="100%" height="10px" '
						+ 'alt="'+altPage+'" title="'+altPage+'" class="mce_plugin_wordpress_page" name="mce_plugin_wordpress_page" />';
					tinyMCE.execCommand("mceInsertContent",true,html);
					tinyMCE.selectedInstance.repaint();
					return true;

				case "mceWordPress_help":
					var template = new Array();

					template['file']   = tinyMCE.baseURL + '/wp-mce-help.php';
					template['width']  = 480;
					template['height'] = 380;

					args = {
						resizable : 'yes',
						scrollbars : 'yes'
					};

					tinyMCE.openWindow(template, args);
					return true;
		}

		// Pass to next handler in chain
		return false;
	},

	cleanup : function(type, content) {
		switch (type) {
			case "insert_to_editor":
				var startPos = 0;
				var altMore = tinyMCE.getLang('lang_wordpress_more_alt');
				var altPage = tinyMCE.getLang('lang_wordpress_page_alt');

				// Parse all <!--more--> tags and replace them with images
				while ((startPos = content.indexOf('<!--more-->', startPos)) != -1) {
					// Insert image
					var contentAfter = content.substring(startPos + 11);
					content = content.substring(0, startPos);
					content += '<img src="' + (tinyMCE.getParam("theme_href") + "/images/spacer.gif") + '" ';
					content += ' width="100%" height="10px" ';
					content += 'alt="'+altMore+'" title="'+altMore+'" class="mce_plugin_wordpress_more" />';
					content += contentAfter;

					startPos++;
				}
				var startPos = 0;

				// Parse all <!--page--> tags and replace them with images
				while ((startPos = content.indexOf('<!--nextpage-->', startPos)) != -1) {
					// Insert image
					var contentAfter = content.substring(startPos + 15);
					content = content.substring(0, startPos);
					content += '<img src="' + (tinyMCE.getParam("theme_href") + "/images/spacer.gif") + '" ';
					content += ' width="100%" height="10px" ';
					content += 'alt="'+altPage+'" title="'+altPage+'" class="mce_plugin_wordpress_page" />';
					content += contentAfter;

					startPos++;
				}

				// It's supposed to be WYSIWYG, right?
				content = content.replace(new RegExp('&', 'g'), '&amp;');

				break;

			case "get_from_editor":
				// Parse all img tags and replace them with <!--more-->
				var startPos = -1;
				while ((startPos = content.indexOf('<img', startPos+1)) != -1) {
					var endPos = content.indexOf('/>', startPos);
					var attribs = this._parseAttributes(content.substring(startPos + 4, endPos));

					if (attribs['class'] == "mce_plugin_wordpress_more") {
						endPos += 2;
		
						var embedHTML = '<!--more-->';
		
						// Insert embed/object chunk
						chunkBefore = content.substring(0, startPos);
						chunkAfter = content.substring(endPos);
						content = chunkBefore + embedHTML + chunkAfter;
					}
					if (attribs['class'] == "mce_plugin_wordpress_page") {
						endPos += 2;
		
						var embedHTML = '<!--nextpage-->';
		
						// Insert embed/object chunk
						chunkBefore = content.substring(0, startPos);
						chunkAfter = content.substring(endPos);
						content = chunkBefore + embedHTML + chunkAfter;
					}
				}

				// If it says & in the WYSIWYG editor, it should say &amp; in the html.
				content = content.replace(new RegExp('&', 'g'), '&amp;');
				content = content.replace(new RegExp('&amp;nbsp;', 'g'), '&nbsp;');

				// Remove anonymous, empty paragraphs.
				content = content.replace(new RegExp('<p>(\\s|&nbsp;)*</p>', 'mg'), '');

				// Handle table badness.
				content = content.replace(new RegExp('<(table( [^>]*)?)>.*?<((tr|thead)( [^>]*)?)>', 'mg'), '<$1><$3>');
				content = content.replace(new RegExp('<(tr|thead|tfoot)>.*?<((td|th)( [^>]*)?)>', 'mg'), '<$1><$2>');
				content = content.replace(new RegExp('</(td|th)>.*?<(td( [^>]*)?|th( [^>]*)?|/tr|/thead|/tfoot)>', 'mg'), '</$1><$2>');
				content = content.replace(new RegExp('</tr>.*?<(tr|/table)>', 'mg'), '</tr><$1>');
				content = content.replace(new RegExp('<(/?(table|tbody|tr|th|td)[^>]*)>(\\s*|(<br ?/?>)*)*', 'g'), '<$1>');

				// Pretty it up for the source editor.
				var blocklist = 'blockquote|ul|ol|li|table|thead|tr|th|td|div|h\\d|pre|p';
				content = content.replace(new RegExp('\\s*</('+blocklist+')>\\s*', 'mg'), '</$1>\n');
				content = content.replace(new RegExp('\\s*<(('+blocklist+')[^>]*)>\\s*', 'mg'), '\n<$1>');
				content = content.replace(new RegExp('<((li|/?tr|/?thead|/?tfoot)( [^>]*)?)>', 'g'), '\t<$1>');
				content = content.replace(new RegExp('<((td|th)( [^>]*)?)>', 'g'), '\t\t<$1>');
				content = content.replace(new RegExp('\\s*<br ?/?>\\s*', 'mg'), '<br />\n');
				content = content.replace(new RegExp('^\\s*', ''), '');
				content = content.replace(new RegExp('\\s*$', ''), '');
				
				break;
			}

		// Pass through to next handler in chain
		return content;
	},

	_parseAttributes : function(attribute_string) {
		var attributeName = "";
		var attributeValue = "";
		var withInName;
		var withInValue;
		var attributes = new Array();
		var whiteSpaceRegExp = new RegExp('^[ \n\r\t]+', 'g');
		var titleText = tinyMCE.getLang('lang_wordpress_more');
		var titleTextPage = tinyMCE.getLang('lang_wordpress_page');

		if (attribute_string == null || attribute_string.length < 2)
			return null;

		withInName = withInValue = false;

		for (var i=0; i<attribute_string.length; i++) {
			var chr = attribute_string.charAt(i);

			if ((chr == '"' || chr == "'") && !withInValue)
				withInValue = true;
			else if ((chr == '"' || chr == "'") && withInValue) {
				withInValue = false;

				var pos = attributeName.lastIndexOf(' ');
				if (pos != -1)
					attributeName = attributeName.substring(pos+1);

				attributes[attributeName.toLowerCase()] = attributeValue.substring(1).toLowerCase();

				attributeName = "";
				attributeValue = "";
			} else if (!whiteSpaceRegExp.test(chr) && !withInName && !withInValue)
				withInName = true;

			if (chr == '=' && withInName)
				withInName = false;

			if (withInName)
				attributeName += chr;

			if (withInValue)
				attributeValue += chr;
		}

		return attributes;
	},

	handleNodeChange : function(editor_id, node, undo_index, undo_levels, visual_aid, any_selection) {
		tinyMCE.switchClass(editor_id + '_wordpress_more', 'mceButtonNormal');
		tinyMCE.switchClass(editor_id + '_wordpress_page', 'mceButtonNormal');

		if (node == null)
			return;

		do {
			if (node.nodeName.toLowerCase() == "img" && tinyMCE.getAttrib(node, 'class').indexOf('mce_plugin_wordpress_more') == 0)
				tinyMCE.switchClass(editor_id + '_wordpress_more', 'mceButtonSelected');
			if (node.nodeName.toLowerCase() == "img" && tinyMCE.getAttrib(node, 'class').indexOf('mce_plugin_wordpress_page') == 0)
				tinyMCE.switchClass(editor_id + '_wordpress_page', 'mceButtonSelected');
		} while ((node = node.parentNode));

		return true;
	}	
};

tinyMCE.addPlugin("wordpress", TinyMCE_WordPressPlugin);

function wp_save_callback(el, content, body) {
	// We have a TON of cleanup to do.

	// Mark </p> if it has any attributes.
	content = content.replace(new RegExp('(<p[^>]+>.*?)</p>', 'mg'), '$1</p#>');

	// Decode the ampersands of time.
	content = content.replace(new RegExp('&amp;', 'g'), '&');

	// Get it ready for wpautop.
	content = content.replace(new RegExp('[\\s]*<p>[\\s]*', 'mgi'), '');
	content = content.replace(new RegExp('[\\s]*</p>[\\s]*', 'mgi'), '\n\n');
	content = content.replace(new RegExp('\\n\\s*\\n\\s*\\n*', 'mgi'), '\n\n');
	content = content.replace(new RegExp('\\s*<br ?/?>\\s*', 'gi'), '\n');

	// Fix some block element newline issues
	var blocklist = 'blockquote|ul|ol|li|table|thead|tr|th|td|div|h\\d|pre';
	content = content.replace(new RegExp('\\s*<(('+blocklist+') ?[^>]*)\\s*>', 'mg'), '\n<$1>');
	content = content.replace(new RegExp('\\s*</('+blocklist+')>\\s*', 'mg'), '</$1>\n');
	content = content.replace(new RegExp('<li>', 'g'), '\t<li>');

	// Unmark special paragraph closing tags
	content = content.replace(new RegExp('</p#>', 'g'), '</p>\n');
	content = content.replace(new RegExp('\\s*(<p[^>]+>.*</p>)', 'mg'), '\n$1');

	// Trim any whitespace
	content = content.replace(new RegExp('^\\s*', ''), '');
	content = content.replace(new RegExp('\\s*$', ''), '');

	// Hope.
	return content;

}
