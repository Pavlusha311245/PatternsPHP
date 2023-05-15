<?php

namespace Pavlusha\Adapter;

require '../../vendor/autoload.php';

function main(ClientDataInterface $data)
{
    var_dump($data->getData());
}

$library = new Library();
$adapteeData = new LibraryAdapter($library);

main($adapteeData);
