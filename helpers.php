<?php

/**
 * Renders view, passing in values.
*/
function render($view, $values = [])
{
    // if view exists, render it
    if (file_exists("{$view}"))
    {
      // extract variables into local scope
      extract($values);

      // render view (between header and footer)
      // require("../views/header.html");
      require("{$view}");
      // require("../views/footer.html");
      exit;
    }

    // else err
    else
    {
      trigger_error("Invalid view: {$view}", E_USER_ERROR);
    }
}

// https://davidwalsh.name/php-redirect-function
function redirect($url, $permanent = false) {
	if($permanent) {
		header('HTTP/1.1 301 Moved Permanently');
	}
	header('Location: '.$url);
	exit();
}

?>