<?php
namespace utility;
//namespace MyProject\mvcName;
class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {
        $tableGen = '<!DOCTYPE html>';
        $tableGen .= '<html lang="en">';
        $tableGen .= '<head>';
        $tableGen .= '<meta charset="utf-8">';
        $tableGen .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
        $tableGen .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
        $tableGen .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
        $tableGen .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>';


        $tableGen .= '<center><table border="4"  class="table table-striped">';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th>' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
                    $id1=$value;
                }
                    $tableGen .= '<td>' . $value . '</td>';
            }
            $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $id1 . '"><span class="glyphicon glyphicon-pencil">edit</span></a></td>';
            $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=edit&id=' . $id1 . '"> <span class="glyphicon glyphicon-trash">delete</span></a></td>';
            $id1='';
            $tableGen .= '</tr>';
        }
        $tableGen .= '</table></center>';
        return $tableGen;
    }
    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="1" cellpadding="10"><tr>';
        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}
?>
