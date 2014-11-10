<?php  

// if ( ! defined('base_path')) exit('No direct script access allowed');

if ( ! function_exists('css_url'))
{
	function css_url($name)
	{
		return URL::to('/') . 'assets/css/' . $name . '.css';
	}
}

if ( ! function_exists('js_url'))
{
	function js_url($name)
	{
		return URL::to('/') . 'assets/javacript/' . $name . '.js';
	}
}

if ( ! function_exists('img_url'))
{
	function img_url($name)
	{
		return URL::to('/') . 'assets/images/' . $name;
	}
}

if ( ! function_exists('img'))
{
	function img($name, $alt = '')
	{
		return '<img src="' . img_url($name) . '" alt="' . $alt . '" />';
	}
}

if ( ! function_exists('doc_url'))
{
	function doc_url($name)
	{
		return URL::to('/') . 'assets/documents/' . $name;
	}
}

if ( ! function_exists('site_url'))
{
	function site_url($name)
	{
		return URL::to('/') . '/index.php/' . $name;
	}
}