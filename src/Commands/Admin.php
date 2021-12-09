<?php

namespace Smylmrz\Dashboard\Commands;

use Illuminate\Console\Command;
use Smylmrz\Dashboard\Models\User;

class Admin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create {--name=} {--email=} {--password=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin user';

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
        $name     = $this->option('name') ?? 'Admin';
        $email    = $this->option('email') ?? 'admin@smyl.com';
        $password = $this->option('password') ?? 'password';

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'role_id' => 1
        ]);

        $this->info('Admin created successfully. Email:'. $email);
    }
}
