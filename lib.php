<?php
/**
 * @package    mahara
 * @subpackage module.aws
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 */

defined('INTERNAL') || die();

/**
 * The "Module" plugin type is a generic plugin type for plugins that don't fit into
 * any of the other plugin types. It allows for encapsulation, as well as access to the
 * standard plugin APIs.
 */
abstract class PluginModuleAws extends PluginModule {
    public static function get_plugintype_name() {
        return 'aws';
    }

}
