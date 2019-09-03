<?php

namespace App\Model\DataStorage;

class CSVStorag extends CrudEntity
{

    function get()
    {

        // $this->checkFileExists('<?php return [];');
        // return include($this->file_name);

    }

    function write_file(array $data_array)
    {
        foreach ($data_array as $value) {
            $str .= $value.";"; 
        }
        $str .= "\n";
        file_put_contents($this->file_name, $str, FILE_APPEND);

    }

}

?>