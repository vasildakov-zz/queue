<?php
namespace Queue\Queue\Adapter;

use Pheanstalk\Job as PheanstalkJob;
use Pheanstalk\Pheanstalk;



class BeanstalkdQueue
{
    /**
     * @var Pheanstalk
     */
    protected $pheanstalk;
    /**
     * @var string
     */
    protected $tubeName;

    public function __construct($pheanstalk, $name, $options = null)
    {
        $this->pheanstalk = $pheanstalk;
        $this->tubeName = $name;
        if (($options !== null) && $options->getTube()) {
            $this->tubeName = $options->getTube();
        }
    }
}