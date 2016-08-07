<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

c::set('smartypants', true);
*/


c::set('markdown.extra', true);
c::set('home', 'twins');
c::set('debug', true);

/*

---------------------------------------
Relative Date Configuration
---------------------------------------

https://github.com/distantnative/kirby-relativedate

*/

c::set('relativedate.threshold', 604800);
c::set('relativedate.length', 1);
c::set('relativedate.fuzzy', true);
