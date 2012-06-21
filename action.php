<?
$html = "";
$html .= "<div id=footer class='ui-bar-a ui-footer' data-position=fixed>";
$html .=   "<h1 class=ui-title>Footer part</h1>";
$html .=   "<div id=navbar>";
$html .=     "<ul>";
$html .=       "<li><a href=# data-icon=refresh>Refresh</a></li>";
$html .=       "<li><a href=# data-icon=info>Help</a></li>";
$html .=       "<li><a href=# data-icon=delete>Close</a></li>";
$html .=     "</ul>";
$html .=   "</div>";
$html .= "</div>";
echo utf8_encode ($html);
?>