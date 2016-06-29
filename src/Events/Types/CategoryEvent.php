<?php namespace VivifyIdeas\Forum\Frontend\Events\Types;

use VivifyIdeas\Forum\Models\Category;

class CategoryEvent
{
    /**
     * @var Category
     */
    public $category;

    /**
     * Create a new event instance.
     *
     * @param  Category  $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
}
