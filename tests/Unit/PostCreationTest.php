<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;


class PostCreationTest extends TestCase
{

    // use RefreshDatabase;

    public function testPostCreation()
   {

    
       // Create a new post and save it to the database
       $post = Post::create([
           'content' => 'Sample Post Title',
           'tags' => 'Sample Post Description',
           'image' => 'sample_image.jpg',
           'user_id' => 1,
       ]);

       // Retrieve the post from the database and assert its existence
       $createdPost = Post::find($post->id);
       $this->assertNotNull($createdPost);
       $this->assertEquals('Sample Post Title', $createdPost->content);
   }
}
