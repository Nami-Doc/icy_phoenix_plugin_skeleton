<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*
* @Extra credits for this file
* OOHOO < webdev@phpbb-tw.net >
* Stefan2k1 and ddonker from www.portedmods.com
* CRLin from http://mail.dhjh.tcc.edu.tw/~gzqbyr/
* Lopalong
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'PLUGIN_MYPLUGIN' => 'My Plugin !',
));

?>