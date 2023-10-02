<?php

namespace App\Livewire;

use App\Enums\Type;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Spatie\Enum\Laravel\Rules\EnumRule;

class UpdatePost extends Component
{
    public Post $post;

    public function rules(): array
    {
        return [
            'post.title' => ['required'],
            'post.type' => new EnumRule(Type::class),
        ];
    }

    public function render(): View
    {
        return view('livewire.update-post');
    }
}
