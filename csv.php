<?php
include "simple_html_dom.php";
$table=filter_input(INPUT_POST,'data');
$html = str_get_html($table);
header('content-type:application/csv;charset=UTF-8');
header('Content-Disposition: attachment; filename=convert.csv');
$fp = fopen("php://output", "w");
stream_filter_prepend($fp,'convert.iconv.utf-8/cp932');
foreach($html->find('tr') as $element)
{
    $td = array();
    foreach( $element->find('th') as $row)  
    {
        $td [] = $row->plaintext;
    }
    fputcsv($fp, $td);

    $td = array();
    foreach( $element->find('td') as $row)  
    {
        $td [] = $row->plaintext;
    }
    fputcsv($fp, $td);
}


fclose($fp);
$html->clear();

