<?php
function STR_REPLACE_INTERNATIONAL($FROM, $TO, $NUMBER, $RANGE) {
  $FROM = '/'.preg_quote($FROM, '/').'/';
  return preg_replace($FROM, $TO, $NUMBER, $RANGE);
}

function STR_REPLACE_RESTORE($FROM, $TO, $NUMBER, $RANGE) {
  $FROM = '/'.preg_quote($FROM, '/').'/';
  return preg_replace($FROM, $TO, $NUMBER, $RANGE);
}
