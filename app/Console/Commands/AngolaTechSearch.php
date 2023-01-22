<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AngolaTechSearch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'search:go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Procura todas as empresas de tecnologias em Angola e pega as tecnologias que elas usam';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo 'Command::SUCCESS;';
    }
}
