<?php
echo "<title>".$site_title."</title>";

echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
echo "<meta name=\"robots\" content=\"noindex,nofollow\">\n";
echo "<meta name=\"author\" content=\"".$site_author."\">\n";

echo "<link rel=\"stylesheet\" href=\"css/mdc-fonts-dl.css\">\n";
//echo "<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">\n";
echo "<link rel=\"stylesheet\" href=\"css/mdc-icons.css\">\n";
echo "<link rel=\"stylesheet\" href=\"node_modules/material-components-web/dist/material-components-web.css\">\n";
$material_js_init = "<script src=\"node_modules/material-components-web/dist/material-components-web.js\"></script>\n";
echo "<script src=\"js/jquery.min.js\"></script>\n";
echo "<link rel=\"stylesheet\" href=\"css/google-mdc.css\">\n";
echo "<link rel=\"stylesheet\" href=\"css/style.css\">\n";
//echo "<script src=\"https://d3js.org/d3.v4.min.js\"></script>\n";

?>