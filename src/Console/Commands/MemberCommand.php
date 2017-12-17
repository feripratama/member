<?php namespace Bantenprov\Member\Console\Commands;

use Illuminate\Console\Command;

/**
 * The MemberCommand class.
 *
 * @package Bantenprov\Member
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class MemberCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:member';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\Member package';

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
        $this->info('Welcome to command for Bantenprov\Member package');
    }
}
