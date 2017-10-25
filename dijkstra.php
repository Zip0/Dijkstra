<?php

echo ('This is where I show how I solve the Dijkstra algorithm. <br />'
        . 'It uses an associative array with pointers because of <br />'
        . 'vertex and edge sparsity and possible future modification <br />'
        . 'into two way unequidistant edges.<br />');
$vertices = array(
    'a' => array(
        'b' => 5,               //starting point
        'c' => 3,
        'd' => 9),
    'b' => array(
        'a' => 5,
        'c' => 1,
        'e' => 7,
        'f' => 3),
    'c' => array(
        'a' => 3,
        'b' => 1,
        'e' => 3,
        'd' => 1),
    'd' => array(
        'a' => 9,
        'c' => 1,
        'e' => 4,
        'g' => 6),
    'e' => array(
        'b' => 7,
        'c' => 3,
        'd' => 4,
        'g' => 1,
        'h' => 2,
        'f' => 5),
    'f' => array(
        'b' => 3,
        'e' => 5,
        'h' => 4),
    'g' => array(
        'd' => 6,
        'e' => 1,
        'h' => 11),
    'h' => array(                  //ending point
        'e' => 2,
        'f' => 4,
        'g' => 11)
);

$previous_route = INF;
$visited = array();

foreach ($vertices as $vertex => $distances) {
//    echo(',');
//    print_r(array_keys($distances, min($distances))[0]);
//    print_r(min($distances));
    
    $current_route = min($distances);
    
    if ($previous_route > $current_route) {
        $shortest_route = $current_route;
        echo('<br />current');
    }else{
        $shortest_route = $previous_route;
        echo('<br />previous');
    }
    
    $previous_route = $shortest_route;
    array_push($visited,$vertex);
    print_r($shortest_route);
//    print_r($visited);
    var_dump($visited);
    
//    if (is_array($distances)) {
//        foreach ($distances as $destination => $distance) {
//            
//            echo('...');
//            print_r($destination);
//            print_r($distance);
//            
//            
//        }
//    }
}
exit;