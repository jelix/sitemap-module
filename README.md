This is a module for Jelix, providing a Response object to generate a sitemap for
search engines.

This module is for Jelix 1.7.x and higher. See the jelix/jelix repository to see
its history before Jelix 1.7.


Installation
============

Install it by hands like any other Jelix modules, or use Composer if you installed
Jelix 1.7+ with Composer.

In your project:

```
composer require "jelix/sitemap-module"
```

Launch the configurator for your application to enable the module

```bash
php yourapp/dev.php module:configure jsitemap
```

And then launch the installer to activate the module

```bash
php yourapp/install/installer.php
```

Usage
=====

See http://docs.jelix.org/en/manual-1.7/.

Unit tests are in Testapp, in the jelix/jelix repository.