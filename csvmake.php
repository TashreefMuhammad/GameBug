<?php
function input_validation($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function CSV_read_contact($FilePath)
{
    $allValue = array();
    if (!file_exists($FilePath)) {
        $file = fopen($FilePath, "a+");
        fclose($file);

    }
    $file = fopen($FilePath, "r");
    while (!feof($file)) {
        array_push($allValue, fgetcsv($file));
    }
    array_pop($allValue);
    fclose($file);
    return $allValue;
}
function CSV_write_contact($FilePath,$value = array())
{
    $list = array($value );
    $file = fopen($FilePath, "a+");

    foreach ($list as $line) {
        fputcsv($file, $line);
    }

    fclose($file);
}
$csvPath = "contacts.csv";
?>
