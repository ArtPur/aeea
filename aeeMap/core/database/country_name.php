<?php
$country_name = $_POST["country_name"];

if (empty($country_name)) {
    echo 'No country_name received!';
}
else {
    echo 'Got ' . $country_name;
}
?>