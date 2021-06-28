(function() {
	var hbspt = window.hbspt = window.hbspt || {};
	hbspt.forms = hbspt.forms || {};
	hbspt._wpFormsQueue = [];
	hbspt.enqueueForm = function(formDef) {
		if (hbspt.forms && hbspt.forms.create) {
			hbspt.forms.create(formDef);
		} else {
			hbspt._wpFormsQueue.push(formDef);
		}
	}
	if (!window.hbspt.forms.create) {
		Object.defineProperty(window.hbspt.forms, 'create', {
			configurable: true,
			get: function() {
				return hbspt._wpCreateForm;
			},
			set: function(value) {
				hbspt._wpCreateForm = value;
				while (hbspt._wpFormsQueue.length) {
					var formDef = hbspt._wpFormsQueue.shift();
					if (!document.currentScript) {
						var formScriptId = '<?php echo esc_html( AssetsManager::FORMS_SCRIPT ); ?>-js';
						hubspot.utils.currentScript = document.getElementById(formScriptId);
					}
					hbspt._wpCreateForm.call(hbspt.forms, formDef);
				}
			},
		});
	}
})();