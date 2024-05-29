<?php

namespace Tests\Unit;

use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostModelFunctionalityTest extends TestCase
{
    public function test_attributes_are_set_correctly()
   {
       // create a new post instance with attributes
       $post = new Post([
           'content' => 'Sample Post Title',
           'tags' => 'Sample Post Description',
           'image' => 'sample_image.jpg',
       ]);

       // check if you set the attributes correctly
       $this->assertEquals('Sample Post Content', $post->content);
       $this->assertEquals('Sample Post Tags', $post->tags);
       $this->assertEquals('sample_image.jpg', $post->image);
   }

   public function test_non_fillable_attributes_are_not_set()
   {
       // Attempt to create a post with additional attributes (non-fillable)
       $post = new Post([
           'title' => 'Sample Post Title',
           'description' => 'Sample Post Description',
           'image' => 'sample_image.jpg',
           'author' => 'John Doe',
       ]);

       // check that the non-fillable attribute is not set on the post instance
       $this->assertArrayNotHasKey('author', $post->getAttributes());
   }
}
