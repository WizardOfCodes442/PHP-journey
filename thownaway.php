<?php 
    //multi dimensional array in php
    $products = array(
        array( 'TIR', 'Tires', 100),
        array('OIL', 'Oil', 10),
        array('SPK', 'Spark Plugs' 4)
    );

    // a two dimensional array is different from a one dimensional array
    //in that , each element has two indices : a row and a column 
    // to display the contents of this array , you could manually access each 
    // element in order like this

    echo '|' .$product[0][0]. '|' .$products[0][1]. '|' .$product[0][2]. '|<br/>';
    echo '|' .$product[1][0]. '|' .$product[1][1].  '|' .$product[1][2]. '|<br/>';
    echo '|' .$product[2][0]. '|' .$product[2][1].  '|' .$product[2][2]. '|<br/>';

    // alternatively you could place a for loop inside another for loop
    // to achieve the same result

    for ($row =0; $row < 3; $row++) {
        for ($column = 0; $column < 3; $count++) {
            echo '|' .$products[$row][$column];
        }
        echo '|<br/>';
    }

    // you might prefer to create column names instead of numbers
    // to store the same set of products, with the columns named as they are

    $products = array(
        array('Code' => 'Tires', 'Description' => 'Tires', 'Price' => 100),
        array('Code'=> 'Oil', 'Description' => 'Oil', 'Price'=> 10),
        array('Code'=> 'SPK', 'Description' =>'Spark Plugs', 'Price' =>4) 
    );

    // this array is easier to work with, if you want to retrieve a single value.
    // here is one way to write code to display this array
    for ($row = 0; $row < 3; $row++) {
        echo '|' .$products[$row]['Code']. '|' .$products[$row]['Description']. '|' .$products[$row]['Price']. '|<br>';
    }
?>