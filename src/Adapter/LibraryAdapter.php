<?php

namespace Pavlusha\Adapter;

class LibraryAdapter implements ClientDataInterface
{
    public function __construct(protected Library $library)
    {

    }

    public function getData(): array
    {
        return json_decode($this->library->getRawData(), true);
    }
}
