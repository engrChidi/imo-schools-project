<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Logic\Activation\ActivationRepository;


class DeleteExpiredActivations extends Command
{
    protected $activationRepository;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'imoschools:delete-expired-activations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete activation records older than 72 hours.';

    /**
     * Create a new command instance.
     *
     * DeleteExpiredActivations constructor.
     * @param ActivationRepository $activationRepository
     */
    public function __construct(ActivationRepository $activationRepository)
    {
        parent::__construct();
        $this->activationRepository = $activationRepository;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->activationRepository->deleteExpiredActivations();
    }
}
