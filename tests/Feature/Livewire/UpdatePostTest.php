<?php

use App\Livewire\UpdatePost;
use App\Models\Post;
use Livewire\Livewire;

it('renders successfully', function () {
    $post = Post::factory()->create();

    Livewire::test(UpdatePost::class, ['post' => $post])
        ->assertStatus(200);
});
