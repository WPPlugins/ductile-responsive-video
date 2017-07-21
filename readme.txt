=== Ductile Responsive Video ===
Contributors: numeeja
Donate link: http://cubecolour.co.uk/wp
Tags: responsive, video, embed, elastic, ductile, simple, youtube,
Requires at least: 4.0
Tested up to: 4.8
Stable tag: 1.2.0
License: GPLv2

Adds a responsive display to video embeds.

== Description ==

* Filters default WordPress video embeds, adding styles to make them responsive.

= Usage: =

Just add the url of the video you want to embed on its own line as you normally would for a default WordPress video embed.

If you are using a responsive theme, when you adjust your browser width you should be able to watch your video resize to fit the width and retain the correct aspect ratio.

== Installation ==

1. Upload the plugin folder to your '/wp-content/plugins/' directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where is the plugin's admin page? =

There isn't one. This is a lightweight plugin with no options, so there is no need for an admin page.

= Does the WordPress universe really need another responsive video embeds plugin? =
There are already several plugins which achieve a similar result as this one. Some provide extra functionality like shortcodes, and some are fairly slimline but use client-side javascript to modify the default embed rather than a server-side function. I like plugins to be as lightweight as possible, so I think there's room for this one.

= How can I make it even more lightweight? =

You can copy the css rules from the plugin's stylesheet into your child theme's stylesheet and prevent the plugin's built-in styles from loading by adding the following line to your child theme's functions.php

`<?php wp_deregister_style( 'ductile-embed', 30 ); ?>`

Note 1: The code to prevent the stylesheet loading has changed with version 1.2.0 of the plugin. If you previously used version 1.1.0 or below and added the line given in the documentation to prevent the styles from loading, please change it to the line above.

Note 2: Since version 1.2.0 the plugin's styles are only loaded on pages which contain a media embed, so unless you want to customise the plugin's default styles, there is now probably little value in replacing the styles.

= What video services are supported? =

Ductile responsive video should work with any of the services listed on the WordPress embeds codex page. These include:
YouTube, Vimeo, WordPress.tv, Vine, Animoto, Blip, Cloudup, CollegeHumor, DailyMotion, Flickr, FunnyOrDie.com, Hulu, TED, VideoPress

= I am using the plugin it has saved me time or money and I love it, how can I show my appreciation? =

You can donate any amount via [my donation page](http://cubecolour.co.uk/wp/ "cubecolour donation page")

If you find the plugin useful I would also appreciate a review on the [plugin review page](http://wordpress.org/support/view/plugin-reviews/ductile-responsive-video/ "Ductile Responsive Video plugin reviews")

= Are there any other free plugins by the same author? =

Yes these are listed on the [cubecolour plugins page on WordPress.org](https://profiles.wordpress.org/numeeja/#content-plugins "cubecolour plugins on WordPress.org").

= Why is the plugin not working as I think it should? =

If the plugin is not working for you, please read the documentation carefully. If this does not address your issue, please post a question on the [plugin support forum](http://wordpress.org/support/plugin/ductile-responsive-video "Ductile Responsive Video plugin support forum") so we can at least have an opportunity to try to get it working before you leave a review.


= Why doesn't it work on my site? =

First check that you have embedded your video as outlined on the [Embeds usage page](https://codex.wordpress.org/Embeds "Ductile responsive video Embeds usage page on the WordPress.org codex". Do not embed your video by adding an iframe to your page editor as this does not create a valid WordPress embed.

The plugin has been tested and works for me as expected on the sites it has been tested on. If it is not working for you, the may be an incompatibility caused by some code on your theme or another plugin. Feel free to ask for help on the [Ductile responsive video plugin support page on WordPress.org](http://wordpress.org/support/plugin/ductile-responsive-video "Ductile responsive video plugin support page on WordPress.org").

= What levels of support are available? =

I offer free forum support for free cubecolour plugins where all communication takes place on the WordPress.org forums and a link is provided to the page on your site where I can see the issue without needing to enter a password. If the conditions of obtaining free support on the public forum are not compatible with the level of support required, you can request (non-free) support via email. This is charged in half-hour increments. The first half-hour must be prepaid and can be requested at: [cubecolour.co.uk/premium-support](http://cubecolour.co.uk/premium-support "cubecolour.co.uk/premium-support"). I do not have have time to respond to any support requests sent by any other method.

= I am using the plugin and love it, how can I show my appreciation? =

You can donate via [my donation page](http://cubecolour.co.uk/wp/ "cubecolour donation page"). If you find the plugin useful I would also appreciate a five star review on the [plugin review page](http://wordpress.org/support/view/plugin-reviews/ductile-responsive-video "Ductile responsive video review page")

== Screenshots ==

1. The video fits the width of the browser and retains its aspect ratio.

1. After resizing the browser window, or viewing on a mobile device, the video still fits the width of the browser and retains its aspect ratio.

== Changelog ==

= 1.2.0 =

* The stylesheet is now only enqueued when there is an embed on the page
* AMP compatibility
* Minified CSS in stylesheet
* Prevent direct access to the plugin's PHP file
* Prevent directory browsing
* Updated documentation

= 1.1.0 =

* Adds 20px margin below embedded videos

= 1.0.0 =

* Initial Version

== Upgrade Notice ==

= 1.2.0 =

* If you have previously added the code to prevent the plugin's built-in styles from loading, please see the documentation to see how this will need to be changed.
* The stylesheet is now only enqueued when there is an embed on the page
* AMP compatibility
* Minified CSS in stylesheet
* Prevent direct access to the plugin's PHP file
* Prevent directory browsing
* Updated documentation

= 1.1.0 =

* Adds 20px margin below embedded videos. This can be overidden in child theme CSS if required

= 1.0.0 =

* Initial Version