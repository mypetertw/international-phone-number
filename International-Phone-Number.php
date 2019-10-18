<?php
function STR_REPLACE_INTERNATIONAL($FROM, $TO, $NUMBER) {
  $FROM = '/'.preg_quote($FROM, '/').'/';
  return preg_replace($FROM, $TO, $NUMBER, 1);
}

function STR_REPLACE_FIRST($FROM, $TO, $NUMBER) {
  $FROM = '/'.preg_quote($FROM, '/').'/';
  return preg_replace($FROM, $TO, $NUMBER, 4);
}
