jQuery(function() {
	"use strict";

	function initReplyBox() {
		$("#replyBox").summernote({
			height: 280
		});

		$("#composeMailBox").summernote({
			height: 300
		});
	}


	function _init() {
		initReplyBox();
	}
	_init();

})