<?php

namespace Illuminate\Queue\Events;

use Illuminate\Queue\WorkerOptions;

class JobProcessed
{
    /**
     * The connection name.
     *
     * @var string
     */
    public $connectionName;

    /**
     * The job instance.
     *
     * @var \Illuminate\Contracts\Queue\Job
     */
    public $job;

    /**
     * The worker options.
     * 
     * @var \Illuminate\Queue\WorkerOptions
     */
    public $options;

    /**
     * Create a new event instance.
     *
     * @param  string  $connectionName
     * @param  \Illuminate\Contracts\Queue\Job  $job
     * @param  \Illuminate\Queue\WorkerOptions $options
     * @return void
     */
    public function __construct($connectionName, $job, WorkerOptions $options)
    {
        $this->job = $job;
        $this->connectionName = $connectionName;
        $this->options = $options;
    }
}
