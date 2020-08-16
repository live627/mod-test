<?php

/**
 * @package   Custom Form mod
 * @version   1.0.3
 * @author    John Rayes <live627@gmail.com>
 * @copyright Copyright (c) 2014, John Rayes
 * @license   http://opensource.org/licenses/MIT MIT
 */

function customform_actions(&$action_array)
{
	$action_array['form'] = array('CustomForm.php', 'CustomForm');
}

function customform_admin_areas(&$admin_areas)
{
	global $txt;

	loadLanguage('CustomForm');
	$admin_areas['config']['areas']['modsettings']['subsections']['customform'] = array($txt['customform_tabheader']);
}

function customform_modify_modifications(&$sub_actions)
{
	$sub_actions['customform'] = 'ModifyCustomFormSettings';
}