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

c::set("license", "K2-PERSONAL-5229ce532ad1f3548290f8bbf2425ebb");

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set("home", "work");
c::set("ssl", true);

c::set("roles", array(
	array(
		"id"      => "admin",
		"name"    => "Admin",
		"default" => true,
		"panel"   => true
	),
	array(
		"id"      => "editor",
		"name"    => "Editor",
		"panel"   => true
	),
	array(
		"id"      => "external",
		"name"    => "External",
		"panel"   => false
	)
));