<?php

namespace App\Model\DataStorage;

class CSVStorag extends CrudEntity
{

    function get()
    {

        $this->checkFileExists();
        $array = file($this->file_name);
        $res = [];
        foreach ($array as $row) {
            $res[] = explode(';', $row);
        }

        return $res;
        // $pass = realpath($this->file_name);
        // echo $pass;
        // return fgetcsv(realpath($this->file_name));

    }

    function write_file(array $data_array)
    {
        
        $csv ='';
        foreach ($data_array as $row) {
            $csv .= implode(';', $row); 
        }
        $csv .= "\n";
        file_put_contents($this->file_name, $csv);

    }

}

?>