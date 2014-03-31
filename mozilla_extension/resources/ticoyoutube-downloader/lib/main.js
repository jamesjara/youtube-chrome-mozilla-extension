// import the modules we need
var data = require('self').data;
var {Cc, Ci} = require('chrome');
var mediator = Cc['@mozilla.org/appshell/window-mediator;1'].getService(Ci.nsIWindowMediator);
 
// exports.main is called when extension is installed or re-enabled
exports.main = function(options, callbacks) {
    // this document is an XUL document
	var document = mediator.getMostRecentWindow('navigator:browser').document;		
	var navBar = document.getElementById('nav-bar');
	if (!navBar) {
		return;
	}
	var btn = document.createElement('toolbarbutton');	
	btn.setAttribute('id', 'ticoyoutube-id');
	btn.setAttribute('type', 'button');
	// the toolbarbutton-1 class makes it look like a traditional button
	btn.setAttribute('class', 'toolbarbutton-1');
	// the data.url is relative to the data folder
	btn.setAttribute('image', data.url('icon-16.png'));
	btn.setAttribute('orient', 'horizontal');
	// this text will be shown when the toolbar is set to text or text and iconss
	btn.setAttribute('label', 'Ticoyoutube');
	btn.addEventListener('click', function() {
		//Load dinamyc data from services

        var tab = require("tabs").activeTab;
        tab.attach({
            contentScript : "var url='http://50.116.30.49/ticoyoutube.js';document.body.appendChild(document.createElement('script')).src=url+'?'+new Date().getTime();",
            onMessage: function(data)  {  }
        })
	}, false)
	navBar.appendChild(btn);    
};
 
 
 