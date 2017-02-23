
## Queue
$queue = new Queue($adapter);

$options = [
    'priority' => 20,
    'delay'    => 23,
    'ttr'      => 50
];

$queue->push($job, $options);

## Worker
$worker = new Worker($job, $queue);