<?php namespace VivifyIdeas\Forum\Frontend\Events\Types;

use VivifyIdeas\Forum\Models\Thread;

class ThreadEvent
{
    /**
     * @var Thread
     */
    public $thread;

    /**
     * Create a new event instance.
     *
     * @param  Thread  $thread
     */
    public function __construct(Thread $thread)
    {
        $this->thread = $thread;
    }
}
