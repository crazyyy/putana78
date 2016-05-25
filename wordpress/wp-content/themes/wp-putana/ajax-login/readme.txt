=== AJAX Login ===
Contributors: JonasEinarsson
Donate link: http://jonas.einarsson.net/ajaxlogin
Tags: ajax, login, logout, register, registration, lost, password, sidebar
Requires at least: 2.2
Tested up to: 2.2
Stable tag: 1.0

A plugin for wordpress which enables AJAX login, user registration and password retrieval.

== Description ==

AJAX Login means that the login process is executed without reloading the entire page. The user is alerted through messageboxes on errors, and the page is only reloaded when login succeeds. The same goes for registration and lost password retrieval!
This plugin adds a nice templated box on your Wordpress, either with a template tag or as a sidebar widget. In the default template the box contains functionality for logging in, registering as well as retrieving new passwords. If already logged in a logout link is displayed.

[plugin home page](http://jonas.einarsson.net/ajaxlogin)

The plugin uses the normal wordpress 2.2 authentication process as cut'n'pasted from wp-login.php.

= Features =
* Fake loading screen when switching between login, registration and lost password.
* Templating, make a copy of al_template.php to your theme directory and edit away!
* Configuration under Options/AJAX Login in the dashboard.

= NOT features (but might be on popular demand) =
* Fallback if client is non AJAX-compatible
* Custom registration/password e-mail

== Installation ==

1. Unzip and copy the "ajax-login" folder inside your "wp-content/plugins" folder. 
1. Go to your administration interface for plugins and activate "AJAX Login".
1. If you are using the dynamic sidebar (widgets) you can now drag and drop AJAX Login in the widgets administration. If not you can add the template tag "get_ajaxlogin()" in your templates, for example in sidebar.php

== Frequently Asked Questions ==

= Fake loading screen? What are you, stupid? =
Good question. My test users (as well as I) became confused when the switch was instant. The different screens do not differ enough. A loading screen for a second or so seem to make our brains re-interpret the content and avoid confusion.

= Fair enough, but I still don't want it, how do I turn it off? =
Just go to the options in your dashboard and set Fake loading screen timeout to 0.

= Can I customize the widget? =
Yes. Both the widget and the template tag "get_ajaxlogin()" by default use the al_template.php in the plugin directory.
To have your own just make a copy of al_template.php and put in your theme directory along with the other templates.