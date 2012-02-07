<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Load jQuery from CDN
 * 
 * @param string $source
 * @param boolean $minified
 * @return string 
 */
if ( ! function_exists('load_jquery'))
{
	function load_jquery($source = 'google', $minified = TRUE, $version = "1.7.1")
	{
		if (!in_array($source, array('google', 'jquery')))
		{
			return FALSE;
		}

		if ($source == 'google')
		{
			$url = "https://ajax.googleapis.com/ajax/libs/jquery/" . $version . "/jquery" . ($minified ? ".min" : "") . ".js";
		}
		else
		{
			$url = "http://code.jquery.com/jquery" . ($minified ? ".min" : "") . ".js";
		}
		return "<script src=\"" . $url . "\"></script>\n";
	}
}

// ------------------------------------------------------------------------

/**
 * Load js or css files
 * 
 * @param array $files
 * @param string $type
 * @param string $directory
 * @return string
 */
if ( ! function_exists('load_files'))
{
	function load_files($files, $type = 'js', $directory = '')
	{
		if (!in_array($type, array('js', 'css')))
		{
			return FALSE;
		}

		$directory = $directory ? $directory : $type;
		$html = "";
		foreach ($files as $file)
		{
			$filemtime = filemtime($directory . '/' . $file);
			if ($type == 'js')
			{
				$html .= "<script src=\"" . site_url($directory . '/' . $file . ($filemtime ? "?" . $filemtime : "")) . "\"></script>\n";
			}
			else
			{
				$html .= "<link href=\"" . site_url($directory . '/' . $file . ($filemtime ? "?" . $filemtime : "")) . "\"  media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />\n";
			}
		}
		return $html;
	}
}


/* End of file assets_helper.php */
/* Location: ./application/helpers/assets_helper.php */