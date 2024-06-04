<?php

namespace App\Console\Commands;

use App\Models\Account;
use App\Models\Token;
use App\Models\Tokentype;
use Illuminate\Console\Command;

class CreateTokenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:token {account_name} {tokentype_name} {token}';

    protected $description = 'Create token {account_name} {tokentype_name} {token}';

    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $accId = Account::where('name', $this->argument('name'))->first()->id;
        $tokenTypeId = Tokentype::where('name', $this->argument('tokentype_name'))->first()->id;
        $token = $this->argument('token');

        if (!$accId || !$tokenTypeId) {
            $this->error('Account or token not found');
            return 1;
        }
        Token::firstOrCreate([
            'account_id'=> $accId,
            'tokentype_id' => $tokenTypeId,
            'token'=>$token
        ]);
        return 0;
    }
}
