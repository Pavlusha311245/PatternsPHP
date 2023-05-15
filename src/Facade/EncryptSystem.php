<?php

namespace Pavlusha\Facade;

class EncryptSystem
{
    public function encrypt(array $data): string
    {
        return sha1(json_encode($data));
    }
}
