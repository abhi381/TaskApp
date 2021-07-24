<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use App\Models\RememberedLoginModel;

class DeleteExpiredRememberedLogin extends BaseCommand
{
    protected $group       = 'Auth';
    protected $name        = 'auth:cleanup';
    protected $description = 'Clears Expired Remember Login records.';

    public function run(array $params)
    {
        $model = new RememberedLoginModel;

        $rows = $model->deleteExpired();

        echo "$rows rows deleted.\n";
    }
}