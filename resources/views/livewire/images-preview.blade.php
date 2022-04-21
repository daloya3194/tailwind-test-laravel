<div>
    <div class="flex justify-center">
        <img class="h-96 hover:scale-125 object-cover" src="{{ $src }}" alt="vsd">
    </div>
    <div class="flex justify-center gap-3 mt-3">
        <div class="p-0.5 hover:border border-amber-700 @if($src == 'https://images.unsplash.com/photo-1549740425-5e9ed4d8cd34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwzOTU0NTB8fGVufDB8fHx8&w=1000&q=80') border border-amber-700 @endif" wire:click="setUrl('https://images.unsplash.com/photo-1549740425-5e9ed4d8cd34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwzOTU0NTB8fGVufDB8fHx8&w=1000&q=80')">
            <img class="h-20 cursor-pointer" src="https://images.unsplash.com/photo-1549740425-5e9ed4d8cd34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwzOTU0NTB8fGVufDB8fHx8&w=1000&q=80" alt="vsd">
        </div>
        <div class="p-0.5 hover:border border-amber-700 @if($src == 'https://www.ariase.com/uploads/modules/ae94556520f96b01ef3c69efb3cacabe.jpeg') border border-amber-700 @endif" wire:click="setUrl('https://www.ariase.com/uploads/modules/ae94556520f96b01ef3c69efb3cacabe.jpeg')">
            <img class="h-20 cursor-pointer" src="https://www.ariase.com/uploads/modules/ae94556520f96b01ef3c69efb3cacabe.jpeg" alt="vsd">
        </div>
        <div class="p-0.5 hover:border border-amber-700 @if($src == 'https://www.sony.de/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960') border border-amber-700 @endif" wire:click="setUrl('https://www.sony.de/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960')">
            <img class="h-20 cursor-pointer" src="https://www.sony.de/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960" alt="vsd">
        </div>
    </div>
</div>
