<?php

namespace Pavlusha\Facade;

class Auth
{
    public function __construct(
        protected EncryptSystem $encryptSystem = new EncryptSystem(),
        protected CloudStorage $cloudStorage = new CloudStorage(),
        protected Database $database = new Database()
    )
    {
    }

    public function registerObject(array $data)
    {
        $hashedData = $this->encryptSystem->encrypt($data);

        $this->cloudStorage->saveToCloud();
        $this->database->saveToDatabase();

        echo "Hashed data: {$hashedData}";
    }
}
