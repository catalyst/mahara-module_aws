# AWS SDK - Moodle Plugin

A mahara plugin containing Amazon's SDK for PHP.

To use the SDK, simply include the autoloader contained within this plugin.

```php
require_once(get_config('docroot') . '/module/aws/sdk/aws-autoloader.php');
```

If you are writing a plugin that will use this SDK, it is recommended that you add this to the plugin's version.php:

```php
$plugin->dependencies = array(
    'module_aws' => 2017030100
);
```

## Why does this exist? ##

There is a growing collection of various mahara plugins that require these AWS libraries in order to work.
We don't want to have multiple copies of these libraries bundled into each plugin, firstly because they
are quite large, but also because it can cause issues with library namespaces and php auto loading.

Plugins that depend on this library are:

https://github.com/catalyst/mahara-module_objectfs

## Supported Mahara Versions

This plugin requires Mahara 17.04 and above

## Installation

You can get the latest version of this plugin from https://github.com/catalyst/mahara-module_aws.

```bash
git clone https://github.com/catalyst/mahara-module_aws.git htdocs/module/aws
```

# Crafted by Catalyst IT


This plugin was developed by Catalyst IT Australia:

https://www.catalyst-au.net/

![Catalyst IT](/pix/catalyst-logo.png?raw=true)


# Contributing and Support

Issues, and pull requests using github are welcome and encouraged!

https://github.com/catalyst/mahara-module_aws/issues

If you would like commercial support or would like to sponsor additional improvements
to this plugin please contact us:

https://www.catalyst-au.net/contact-us
