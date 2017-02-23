<?php
namespace Queue\Job;

use Zend\Stdlib\MessageInterface;

/**
 * A job is a task inserted into a queue, and it contains metadata and content.
 */
interface JobInterface extends MessageInterface
{
    /**
     * Set the identifier of the job (it proxies to its metadata)
     *
     * @param  mixed $id
     * @return JobInterface
     */
    public function setId($id);


    /**
     * Get the identifier of the job (it proxies to its metadata)
     *
     * @return mixed
     */
    public function getId();


    /**
     * Execute the job
     *
     * @return void|int
     */
    public function execute();
}
