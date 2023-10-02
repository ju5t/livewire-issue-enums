<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UpdatePost extends Component
{
    public Post $post;

    public function render(): View
    {
        return view('livewire.update-post');
    }
}
