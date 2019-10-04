// Bulk redirect all HTTP to HTTPS
<?php
  // Require HTTPS across all sites
  // if the HTTPS is not found to be "on"
  if (!isset($_SERVER["HTTPS"]) || $_SERVER ["HTTPS"] !="on")
  {
    // Tell browser to redirct to the HTTPS url
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    // Prevent the rest of the script from executing
  exit;
}
?>
