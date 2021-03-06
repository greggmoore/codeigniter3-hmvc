<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Code Igniter
*
* An open source application development framework for PHP 4.3.2 or newer
*
* @package		CodeIgniter
* @author		Rick Ellis
* @copyright	Copyright (c) 2006, pMachine, Inc.
* @license		http://www.codeignitor.com/user_guide/license.html
* @link			http://www.codeigniter.com
* @since        Version 1.0
* @filesource
*/

// ------------------------------------------------------------------------

/**
* RhinoCMS Menu Helpers
*
* @package		CodeIgniter
* @subpackage	Helpers
* @category		Helpers
* @author       Philip Sturgeon < email@philsturgeon.co.uk >
*/

// ------------------------------------------------------------------------

function admin_active_parent($module, $current, $is_parent = 0)
{
	$module = $module ? $module : 'index' ;
			
	if(in_array($module, $current))
	{

		$class = '';
		
		if($is_parent == 1)
		{
			return ' class="selected"';
		}
		
		return ' class="selected"'; 
		
	}
		else
	{
		if($is_parent == 1)
		{
			return ' class="selected"';
		}
		
		return FALSE ;
		
	}
}

function admin_active_child($module, $current_module , $current_page , $page )
{
	$module = $module ? $module : 'index' ;
	
	
	if(in_array($module, $current_module))
	{
		
		if($current_page == $page)
		{
			
			return ' class="active"'; 
		}
	}
	
	return FALSE;
}