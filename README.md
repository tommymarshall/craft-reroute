# Reroute Craft Plugin

Manage 301 redirects in the control panel.

![Reroute screenshot](http://cl.ly/image/3m471U0O0Z10/Screen%20Shot%202013-12-10%20at%208.04.19%20AM.png)

## Planned Features

* Regex matching
* 301/302 Options

## Testing Reroute

**Requirements**

* PHPUnit
* [Composer](http://getcomposer.org)

After installing Reroute you can then proceed to test it. First we have to build a autoloadable file that will include our class dependencies. To do so just `cd` to `plugins/reroute/` and run `composer install`.

This will build a vendor folder which is referenced in our `tests/bootstrap.php` file. This will get included before our tests run and creates a fake Craft instance.

After the composer is complete, cd to the `tests` folder of Reroute (`reroute/tests/`) And run:

`phpunit --bootstrap=bootstrap.php RerouteServiceTest.php`
