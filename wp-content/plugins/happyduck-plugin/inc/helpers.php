<?php

/**
 * Helper function to return a theme image
 * @param $filename
 *
 * @return string
 */
function t_img($filename)
{
	return get_template_directory_uri() . '/img/' . $filename;
}

/**
 * Include a script in the inc folder
 * @param $filename
 *
 * @return string
 */
function t_include($filename)
{
	return get_template_directory_uri() . '/inc/' . $filename;
}

/**
 * Helper function to truncate text to a desired length,
 * cutting off text at the first white space beyond the
 * character count
 * @param $text
 * @param int $chars
 *
 * @return string
 */
function truncate($text, $chars = 25)
{
	if(strlen($text) <= $chars) return $text;

	$text = $text." ";
	$text = substr($text,0,$chars);
	$text = substr($text,0,strrpos($text,' '));
	$text = $text."...";

	return $text;
}

function clean_testimonial_quote($quote)
{
	$quote = trim($quote);
	$quote = ltrim($quote, '"');
	$quote = ltrim($quote, "'");
	$quote = rtrim($quote, '"');
	$quote = rtrim($quote, "'");

	return '&quot;' . $quote . '&quot;';
}

/**
 * A function to give an estimated article reading time
 * in minutes based on an article's word count
 *
 * @param $post_content
 *
 * @return float
 */
function reading_time($post_content)
{
	$word = str_word_count(strip_tags($post_content));
	$m = floor($word / 200); // 200 words per minute
	return ($m <= 1) ? 2 : $m;
}

function format_categories($categories)
{
	$string = '';
	$last_item = end($categories);

	foreach($categories as $category)
	{
		if($category == $last_item && count($categories) > 1)
		{
			$string .= 'and <a href="' . get_category_link($category->cat_ID) . '" class="text--bold">' . $category->name . '</a>';
		}
		elseif(count($categories) == 1)
		{
			$string .= '<a href="' . get_category_link($category->cat_ID) . '" class="text--bold">' . $category->name . '</a> ';
		}
		else
		{
			$string .= '<a href="' . get_category_link($category->cat_ID) . '" class="text--bold">' . $category->name . '</a>, ';
		}
	}

	return $string;
}


/**
 * Convert a timestamp to a "time ago" string
 *
 * @param $ptime
 *
 * @return string
 */
function time_ago( $date )
{
	date_default_timezone_set("Europe/London");

	$etime = time() - strtotime($date);

	if ($etime < 1)
	{
		return '0 seconds';
	}

	$a = array( 365 * 24 * 60 * 60  =>  'year',
	            30 * 24 * 60 * 60  =>  'month',
	            24 * 60 * 60  =>  'day',
	            60 * 60  =>  'hour',
	            60  =>  'minute',
	            1  =>  'second'
	);
	$a_plural = array( 'year'   => 'years',
	                   'month'  => 'months',
	                   'day'    => 'days',
	                   'hour'   => 'hours',
	                   'minute' => 'minutes',
	                   'second' => 'seconds'
	);

	foreach ($a as $secs => $str)
	{
		$d = $etime / $secs;
		if ($d >= 1)
		{
			$r = round($d);
			return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ago';
		}
	}

}