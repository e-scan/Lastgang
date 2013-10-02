<?php
$rated_json = $_POST ["data"];
$JSONArray = json_decode ( $rated_json, true ); // returns null if not decoded
                                                // Values can now be accessed like standard PHP array
if ($JSONArray !== null) {
	$key = $JSONArray ["key"];
	$value = $JSONArray ["value"];
}

return "hello";

?>