<?php
namespace Queue\Worker;

interface WorkerInterface
{
    /**
     * Process jobs in the given queue. Some queuing systems accept various options when
     * popping jobs, so you can set the options array. Those options depends on the concrete worker
     *
     * @param  QueueInterface $queue
     * @param  array          $options
     * @return array          description of exit states from strategies that report it
     */
    public function processQueue(QueueInterface $queue, array $options = []);


    /**
     * Process a job that comes from the given queue
     *
     * @param  JobInterface   $job
     * @param  QueueInterface $queue
     * @return int Status of the job
     */
    public function processJob(JobInterface $job, QueueInterface $queue);
}
