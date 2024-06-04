<?php

namespace App\Console\Commands;

use App\Models\Account;
use App\Models\Company;
use Illuminate\Console\Command;

class CreateAccountCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:account {name} {company_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create account ';

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
     * @return int
     */
    public function handle()
    {
        $companyName = $this->argument('company_name');
        $compId = Company::where('name',  $companyName)->first();
        $compId=$compId->id;
        Account::firstOrCreate(['name' => $this->argument('name'),
            'company_id' => $compId]);
        $this->info("Account {$this->argument('name')} created");
        return 0;
    }
}
