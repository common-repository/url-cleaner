=== URL-cleaner ===
Contributors: verify
Donate link: http://www.janzikmund.cz/
Tags: url, slug, clean, characters
Requires at least: 3.0.1
Tested up to: 3.0.1
Stable tag: 1.0

Removes all characters other than letters a-z, numbers and hyphens (-) from newly generated article URL.

== Description ==

This simple WordPress plugin is used when generating article slug (= article name used in URL). It removes all characters other than letters a-z, numbers and hyphens (-). The plugin runs as the last one in the whole url-generating process, so first all standard replacements of diacritics and accents are performed, and then, if still some strange characters are present they are cut out.

So for example, without this plugin when you enter this as article title:

* Hi — I´mˇ Zéké ‹ Nickname

this is how the suggested URL will look like:

* hi-—-i´mˇ-zeke-‹-nickname

It is ugly and on some systems users won’t be able to open the page at all, because of 404 Error. So what this plugin does is, that it strips all weird non-text, non-numbers, not-hyphen charactes, making the title this:

* hi-im-zeke-nickname



== Installation ==

1. Upload plugin to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Does it work? =

I hope so :)


== Changelog ==

= 1.0 =
* First version.
