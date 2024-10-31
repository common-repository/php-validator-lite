=== PHP Pseudo Compiler ===
Contributors: manojtd
Donate link: http://buy.thulasidas.com/php-validator
Tags: compiler, developer tool, debug, plugin checker, phc, hhvm, phalanger, hip hop
Requires at least: 4.2
Tested up to: 4.6
Stable tag: 2.80
License: GPL2 or later

PHP Pseudo Compiler is a validation tool for PHP developers (and a quality checker for end users) to locate undefined functions and methods.

== Description ==

> <strong>Sunset Edition</strong><br>
> This update of the plugin is the last publicly released version. We do not expect to make any serious changes or add new features to it from now on.
>
> We may not always be able to provide prompt support for this plugin on the WordPress.org forums. If you would like to have professional support or extra/custom features, consider buying the [Pro version](http://buy.thulasidas.com/php-validator "Pseudo-compiler plugin for PHP to find undefined functions and methods, $4.95").

*PHP Pseudo Compiler* is a developer tool. It scans the file you specify and determines whether you have undefined functions or methods.

Why not just run the PHP code, you say? Well, PHP is not a compiled language. It looks for functions during runtime. So if you have a segment of code not covered by your normal testing, and you have an undefined function in there, you will never know of the undefined function until it hits production when the particular conditions activating that particular code segment are met. This tool will prove especially useful during large scale refactoring.

> Live Demo
>
> PHP Pseudo Compiler has a beautifully designed admin interface, which is feature-rich, user-friendly and functional. Please visit this fully operational [live demo site](http://demo.thulasidas.com/php-validator "Play with PHP Pseudo Compiler Pro") to see it in action, (and to check your code without installing it locally).

 **Now available in your language using Google Translate.**

= Features =

* Modern Admin Interface: PHP Pseudo Compiler sports a modern and beautiful admin interface based on the twitter bootstrap framework.
* Admin Interface Tour: A slick tour will take you around the admin page and familiarize you with its features.
* Generous Help: Whenever you need help, the information and hint is only a click away in PHP Pseudo Compiler. (In fact, it is only a mouseover away.)
Robust Security: Unbreakable authentication (using hash and salt), impervious to SQL injection etc.
* WordPress Integration: PHP Pseudo Compiler comes with built-in WordPress integration. It works as a WordPress plugin if uploaded to the wp-content/plugins folder of your blog. What's more, you can switch to the standalone mode from the WordPress plugin admin page of this application, while still using the WordPress authentication mechanism and database.

= Pro Version =

In addition to the fully functional Lite version, *PHP Pseudo Compiler*  also has a [Pro version](http://buy.thulasidas.com/php-validator "Pseudo-compiler plugin for PHP to find undefined functions and methods, $4.95") with many more features. These features are highlighted by a red icon in the menus of the lite version.

* *Upload and Check PHP packages*: In the *Pro* version, you can upload a package as a zip file and check for missing function/method definitions.
* *WordPress Support*: The *Pro* version can load and check any plugin on your server, and recognizes WordPress functions.
* *Skinnable Admin Interface*: In the *Pro* version, you can select the color schemes of your admin pages from nine different skins.
* *Advanced Options*: The Pro version lets you configure advanced options like suppressing duplicates, displaying all detected tokens, ability to do dynamic code analysis etc.
* *Execution Parameters*: Ability to specify the maximum execution time and memory size for large compilation jobs.

== Upgrade Notice ==

Compatibility with WP4.6. Many accumulated fixes and changes. Releasing the sunset version.

== Screenshots ==

1. PHP Pseudo Compiler admin page, with quick start, help and support info.
2. PHP Pseudo Compiler - how to launch it.
3. Options page.
4. PHP Pseudo Compiler output.
5. Advanced Options in the Pro version showing a dark theme.

== Installation ==

To install it as a WordPress plugin, please use the plugin installation interface.

1. Search for the plugin PHP Pseudo Compiler from your admin menu Plugins -> Add New.
2. Click on install.

It can also be installed from a downloaded zip archive.

1. Go to your admin menu Plugins -> Add New, and click on "Upload Plugin" near the top.
2. Browse for the zip file and click on upload.

Once uploaded and activated,

1. Visit the PHP Pseudo Compiler plugin admin page to configure it.
2. Take a tour of the plugin features from the PHP Pseudo Compiler admin menu Tour and Help.

If you would like to temporarily switch to the standalone mode of the plugin, click on the "Standalone Mode" button near the top right corner of PHP Pseudo Compiler screens. You can install it permanently in standalone mode (using its own database and authentication) by uploading the zip archive to your server.

1. Upload the contents of the archive `php-validator` to your server.
2. Browse to the location where your uploaded the package (`http://yourserver/php-validator`, for instance) using your web browser, and click on the green "Launch Installer" button.
3. Follow wizard to visit the admin page, login, configure basic options.

== Frequently Asked Questions ==

= What does this program do? =

*PHP Pseudo Compiler* is a developer tool. It scans the file you specify and determines whether you have undefined functions or methods.

= What do I enter in "List of Files"? =

You enter the path names of the files you would like to validate. Note that *PHP Pseudo Compiler* runs on your server, and the files need to be accessible by your web server. Please specify the files relative to your `wp-content/plugins` directory, or by typing in their full path names. You can enter multiple file names separated by commas.

= What do I enter in "Folder Location"? =

*PHP Pseudo Compiler* can recursively load an entire folder on your server to validate the files therein. Specify a path relative to your `wp-content/plugins`  location (as shown in the help bubble), or as an absolute path.

= What about "Upload Application"? =

Using this file upload method, you can upload an entire PHP application (as a ZIP file) to your server and validate it by pseudo-compiling it. The uploaded ZIP file will be unpacked into a temporary folder and scanned for undefined functions and methods. Since the temporary locations have random names and cannot execute PHP files through external invocations, the security risk is believed to be non-existent.

= How do I use the "Select a Plugin" dropdown menu? =

Similar to the file upload method, you can validate any plugin installed on your WordPress server (both active and inactive ones) by pseudo-compiling it. Select a plugin and wait for the output.

= What is the purpose of the "Execute the Files" option? =

The uploaded files are parsed and examined statically by default. If you would like to do dynamic analysis by executing the files, please check here. Please note that executing uploaded files may have side effects, and it may be a security hole as well. For that reason, this Pro option self-disables after each execution. Dynamic analysis is of limited value when analyzing object-oriented projects because of the inherent statefulness of the code.


== Change Log ==

* V2.80: Compatibility with WP4.6. Many accumulated fixes and changes. Releasing the sunset version. [Oct 12, 2016]
* V2.70: Compatibility with WP4.5. [Apr 12, 2016]
* V2.66: Improvements in the Google Translator interface. Compatibility with multisite installaton of subdomain type. [Feb 27, 2016]
* V2.65: Minor interface and documentation changes. [Feb 25, 2016]
* V2.64: Changes in the DB interface to handle the case where native drivers are not installed. Restricting Google Translate not to translate user-editable strings. Optimizing screenshots. [Feb 7, 2016]
* V2.63: Adding diagnostic information on the update page. [Jan 20, 2015]
* V2.62: Adding a dev-friendly include to introduce local settings, if any. [Dec 30, 2015]
* V2.61: Refactoring changes in admin footer rendering. [Dec 15, 2015]
* V2.60: Compatibility with WordPress 4.4. [Dec 5, 2015]
* V2.53: Making the admin menu dynamic (optionally) in standalone mode. Fixing a DB error handling bug. Improving Windows IIS compatibility. [Nov 29, 2015]
* V2.52: Warning about PHP V5.4 requirement on the admin page. [Nov 8, 2015]
* V2.51: Enforcing PHP V5.4 requirement at activation time. [Oct 27, 2015]
* V2.50: Admin pages in your language using Google translation. [Oct 22, 2015]
* V2.42: Improving the speed of admin page loading. [Sep 30, 2015]
* V2.41: Killing the option to allow update checks. [Sep 26, 2015]
* V2.40: Changes to make the plugin work on nginx and Microsoft servers. [Sep 20, 2015]
* V2.33: Removing an unused ajax handler. [Sep 17, 2015]
* V2.32: Ensuring usability on touch-screen devices. Removing an unused class and file. [Sep 17, 2015]
* V2.31: Reinstating the option to force the admin page loading, moving to a less colorful default theme. [Sep 14, 2015]
* V2.30: Adding better error handling on invalid requests, adding a link to the plugin admin page on WP plugins page, adding the ability to rerun the installer. [Sep 12, 2015]
* V2.20: Removing WP core file loading and refactoring header and menus. [Sep 4, 2015]
* V2.11: Refactoring changes, code clean up and fixing some W3 validation errors. [Aug 23, 2015]
* V2.10: Releasing a live demo site. [Aug 21, 2015]
* V2.05: Adding warnings about undetectable methods. [Aug 20, 2015]
* V2.04: Documentation and refactoring changes only. [Aug 18, 2015]
* V2.03: Making the compiler more robust. [Aug 17, 2015]
* V2.02: Updating a screenshot, further minor fixes. [Aug 17, 2015]
* V2.01: Bug fix in the AJAX error handler. [Aug 17, 2015]
* V2.00: Major rewrite of the whole code base using the twitter bootstrap framework. Compatibility with WordPress V4.3. [Aug 15, 2015]
* V1.30: Minor fixes. Compatibility with WordPress V4.0. [Sep 8, 2014]
* V1.21: Minor refactoring changes. [Mar 25, 2014]
* V1.20: Compatibility checks for WordPress V3.8. Adding more help on admin page. [Dec 20, 2013]
* V1.10: Compatibility checks for WordPress V3.7. [Nov 11, 2013]
* V1.03: Bug fixes (Fatal error: Call-time pass-by-reference has been removed). [Jan 28, 2013]
* V1.02: Renaming the plugin to drop the word Lite. [May 12, 2012]
* V1.01: Minor code changes. [April 20, 2012]
* V1.00: Initial release. [April 3, 2012]
