<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Imports\DataNccImport;
use App\Imports\DataUnitelImport;

class ImportExcel extends Command
{
    protected $signature = 'import:excel';

    protected $description = 'Laravel Excel importer';


    public function handle()
    {
        $this->output->title('Starting import');
        (new DataNccImport)->withOutput($this->output)->import();
        $this->output->success('Import successful');
    }
}
