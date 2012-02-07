#About this helper
This is a simple CodeIgniter helper. You can use it to load jQuery from cdn's or load js and css files into your views.

#Installation
Simply copy / upload <code>assets_helper.php</code> to your <code>application/helpers</code> folder.
After that you have to load this helper whenever you need it (or alternatively you can put it in the <code>application/config/autoload.php</code> file.
In your controller just add the following line:
<code>$this->load->helper('assets');</code>

#Usage
There are two different function in the helper.

##load_jquery()

  	load_jquery();
The code above loads the 1.7.1 minified version of jQuery from Google.
This function has 3 parameters
<code>$cdn</code> Default is google (you can use jquery).
<code>$minified</code> Default is TRUE (it loads the minified version of jQuery).
<code>$version</code> You can choose a version (default is 1.7.1). It works only if you choose Google's cdn.

	load_jquery('google', FALSE, '1.6.2');

##load_files()

	load_files(array('reset.css', 'style.css'), 'css', 'css/new-theme');
The code above load two stylesheets (reset.css and style.css) from the css/new-theme directory into your view.

	load_files(array('jquery.someplugin.js'));
This one loads one js file (jquery.someplugin.js) from the js directory.

That's all. Feel free to contribute. :)

