<?php
$hostname = gethostname();

echo "<html><body style='background-color: green;'><h1>PHP-FPM Container</h1>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Container Hostname: " . $hostname . "</p></body></html>";
?>
