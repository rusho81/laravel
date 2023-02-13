<?php
$person = array(
    "first_name" => "Faisal",
    "last_name"  => "Ahmed",
    "address"    => "123 Main Street",
    "city"       => "Beverly Hills",
    "state"      => "CA",
    "zip_code"   => "90210",
);

foreach ( $person as $attribute => $data ) {
    $attr_nice = ucwords( str_replace( "_", " ", $attribute ) );
    echo "{$attr_nice}: {$data}";
    echo PHP_EOL;
}
print_r($person);

echo PHP_EOL;
$prices = array( "Brand New Computer" => 2000,
    "1 month of Lynda.com"               => 25,
    "Learning PHP"                       => null );

foreach ( $prices as $item => $price ) {
    echo "{$item}: ";
    if ( is_int( $price ) ) {
        echo "$" . $price;
    } else {
        echo "priceless";
    }
   echo PHP_EOL;
}
