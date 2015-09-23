<?php
  /*
   *  Format the date to be user-friendly.
   */
  date_default_timezone_set('UTC');
  function formatDate($date) {

    return date('F j, Y, g:i a', strtotime($date));
  }

  /*
   *  Shorten blog post preview for easier scrolling
   */
  function shortenText($text, $chars = 450) {
    // make sure there's at least one space
    $text = $text." ";
    // actually shorten the text
    $text = substr($text, 0, $chars);
    // start from the back and then find the last space character
    $text = substr($text, 0, strrpos($text, ' '));
    // put a '...' after to show they can continue
    $text = $text."...";
    return $text;
  }
