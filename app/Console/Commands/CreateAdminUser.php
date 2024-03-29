<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:user {email} {senha}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para criar um usuário admin para testes';

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
        $this->info($this->description);

        $email = $this->argument('email');
        $senha = $this->argument('senha');

        $count = User::where('email', '=', $email)->count();

        if ($count === 0) {
            $this->line('<fg=blue>Usuário em criação: '. $email);
            $admin = User::create([
                'email'=>$email, 
                'senha'=>$senha,
            ])->assignRole('Super admin');;
            $admin->save();

            $this->line('<fg=blue>Email já utilizado: '. $email);
        } else {
            $this->line('<bg=yellow;fg=red>Email já utilizado: '. $email. ' <bg=yellow>');
        }

        return Command::SUCCESS;
    }
}
