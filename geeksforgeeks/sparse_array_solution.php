<?php

function matchingStrings($strings, $queries) {
    $occurrences = array_count_values($strings);
    echo "<pre>";
    print_r($occurrences);
    echo "</br>";
    print_r($queries);
    exit;

    $result = array();

    foreach ($queries as $q) {
        if (isset($occurrences[$q])) {
            $result[] = $occurrences[$q];
        } else {
            $result[] = 0;
        }
    }

    echo "<pre>";
    print_r($result);
    exit;
   
}

$strings = ['aba','baba','aba','xzxb'];
$queries = ['aba','xzxb','ab'];

matchingStrings($strings, $queries)

?>

