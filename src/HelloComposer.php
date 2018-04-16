<?php

namespace Girol\HelloComposer; 

use Illuminate\Console\Command;

class HelloComposer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello:composer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dá um olar no terminal para o composer';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Olar Composer");
    }
}
