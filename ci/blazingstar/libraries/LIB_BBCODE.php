<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/******************************************************************************
 *
 *  @file         libraries/LIB_bbcode.php
 *  @version      1
 *  @created      17 September 09
 *  @last_update
 *  @author       Ragulan Rajaratnam <ragulan@me.com>
 *
 *  Copyright (c) 2009 Ragulan Rajaratnam <http://www.ragulan.co.uk>
 *
 *  @description: This library provides methods to convert html encoded data to
 *                bbcode and vice versa
 *
 *****************************************************************************/


class LIB_BBCode
{
  var $CI;

	function LIB_BBCode()
	{
		$this->CI = &get_instance();
	}

/******************************************************************************
 *
 *  Function to convert a bbcoded piece of text in to html encoded text
 *
 *****************************************************************************/
  function to_html($text, $limit = false) {
    // truncate text if needed and convert newlines to <br />
		if($limit) {
			$text = nl2br(substr($text, 0, $limit)) . ' ...';
		} else {
			$text = nl2br($text);
		}

		// convert [center]{text}[/center] to <span style='text-align: center'>{text}</span>
		$text = preg_replace('/\[center\](.*?)\[\/center\]/i', '<div style=\'text-align: center;\'>${1}</div>', $text);
		
		// convert [b]{text}[/b] to <strong>{text}</strong>
    $text = preg_replace('/\[b\](.*?)\[\/b\]/i', '<strong>${1}</strong>', $text);

    // convert [i]{text}[/i] to <em>{text}</em>
    $text = preg_replace('/\[i\](.*?)\[\/i\]/i', '<em>${1}</em>', $text);

    // convert [u]{text}[/u] to <span class='underline'>{text}</span>
    $text = preg_replace(
      '/\[u\](.*?)\[\/u\]/i',
      "<span class='underline'>$1</span>",
      $text
    );
		
		// convert [n] to <br />
    $text = preg_replace(
      '/\[n\]/i',
      "<br />",
      $text
    );

    // convert [size={number}]{text}[/size] to <span style='font-size: {number}px;'>{text}</span>
    $text = preg_replace(
      '/\[size=([1-9]{1,2})\](.*?)\[\/size\]/i',
      "<span style='font-size: $1px;'>$2</span>",
      $text
    );

    // convert [color={color}]{text}[/color] to <span style='color: {color};'>{text}</span>
    $text = preg_replace(
      '/\[color=(#[0-9a-fA-F]{6})\](.*?)\[\/color\]/i',
      "<span style='color: $1;'>$2</span>",
      $text
    );

		// convert [url]{url}[/url] to <a href='{url}'>{url}</a>
    $text = preg_replace(
      '/\[url\](.*?)\[\/url\]/i',
      "<a href='$1' title='$1'>$1</a>",
      $text
    );

		// convert [url={url}]{text}[/url] to <a href='{url}' title='{text}'>{text}</a>
    $text = preg_replace(
      '/\[url=(.*?)\](.*?)\[\/url\]/i',
      "<a href='$1' title='$2'>$2</a>",
      $text
    );

		// convert 	[img]{url}[/img] to <img src='{url}' alt='{url}' />
		$text = preg_replace(
      '/\[img\](.*?)\[\/img\]/i',
      "<img src='$1' alt='$1' />",
      $text
    );

    return $text;
  }

/******************************************************************************
 *
 *  Function to convert html encoded text in to bbcoded text
 *
 *****************************************************************************/
  function html_to_bbcode($text) {
    // convert <strong> tags to [b]
    $text = preg_replace('/<strong>(.*?)<\/strong>/i', '[b]${1}[b]', $text);

    // convert <em> to [i]
    $text = preg_replace('/<em>(.*?)<\/em>/i', '[b]${1}[b]', $text);

    // convert <br /> tags to new lines
    $text = preg_replace('/<br \/>/i', '', $text);

    // strip <p> tags
    $text = preg_replace('/<p>(.*?)<\/p>/i', '', $text);

    return $text;
  }
}
