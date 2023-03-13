<?php
$filename = 'data.csv';
$file = fopen($filename, 'w');

$header = array('Name', 'Email', 'Phone');
fputcsv($file, $header);

$data = array(
  array('John Doe', 'johndoe@example.com', '555-555-1212'),
  array('Jane Smith', 'janesmith@example.com', '555-555-2121'),
);

foreach ($data as $row) {
  fputcsv($file, $row);
}

fclose($file);
