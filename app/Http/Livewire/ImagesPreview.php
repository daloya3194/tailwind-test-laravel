<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImagesPreview extends Component
{
    public $src = 'https://images.unsplash.com/photo-1549740425-5e9ed4d8cd34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwzOTU0NTB8fGVufDB8fHx8&w=1000&q=80';

    public $name;

    public function render()
    {
        return view('livewire.images-preview');
    }

    public function setUrl($url) {
        $this->src = $url;
    }
}
