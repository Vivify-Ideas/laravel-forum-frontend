<?php namespace VivifyIdeas\Forum\Frontend\Events\Types;

use VivifyIdeas\Forum\Models\Post;

class PostEvent
{
    /**
     * @var Post
     */
    public $post;

    /**
     * Create a new event instance.
     *
     * @param  Post  $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
}
