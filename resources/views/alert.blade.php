<div id="flasher-alerts" class="fixed -right-72 top-20 w-72">
    @foreach(\Flash::getMessages() as $key => $message)
        @if ($key === 'success')
            <div class="bg-green-700 text-white mb-4 p-4 w-full transition-transform duration-500 delay-150" data-flasher-alert>
                TEST!!!
            </div>
        @elseif ($key === 'error')
            <div class="bg-red-700 text-white mb-4 p-4 w-full transition-transform duration-500 delay-150" data-flasher-alert>
                TEST!!!
            </div>
        @endif
    @endforeach
</div>
