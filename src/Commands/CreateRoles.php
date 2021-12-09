<?php

namespace Smylmrz\Dashboard\Commands;

use Illuminate\Console\Command;
use Smylmrz\Dashboard\Services\Roles;

class CreateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roles:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates basic roles for the users';

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
    public function handle(Roles $roles)
    {
        // if(!Schema::hasTable('roles')) {
        //     throw new Exception('Roles table not found. Please run the migrations.');
        // } 

        $roles->create();

    }
}
