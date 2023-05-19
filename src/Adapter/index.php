<?php

namespace Pavlusha\Adapter;

require '../../vendor/autoload.php';

function main(ClientDataInterface $data)
{
    print_r($data->getData());
}

$library = new Library();
$adapteeData = new LibraryAdapter($library);

main($adapteeData);
