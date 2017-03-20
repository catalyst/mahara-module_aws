# mahara-module-aws

A mahara plugin containing Amazon's SDK for PHP.

To use the sdk, simply include the autoloader contained within this plugin.

<pre>
require_once($CFG->docroot . '/module/aws/sdk/aws-autoloader.php');
</pre>

If you are writing a plugin that will use this SDK, it is recommended that you add this to the plugin's version.php:

<pre>
$plugin->dependencies = array(
    'module_aws' => 2017030100
);
</pre>


