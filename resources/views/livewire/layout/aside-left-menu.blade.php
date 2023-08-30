<div class="ml-2 mt-2 h-screen">
    <div class="bg-white h-[86vh] shadow-md rounded-lg flex flex-col items-start gap-3 p-6">
        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="flex gap-3 items-center w-full">
           
            <span class="material-symbols-sharp"> grid_view </span>
            {{ __('Dashboard') }}
           
        </x-nav-link>
        <x-nav-link href="{{ route('post.index') }}" :active="request()->routeIs('post.index')" class="flex gap-3 items-center w-full">
           
            <span class="material-symbols-sharp"> campaign </span>
            {{ __('Posts') }}
        </x-nav-link>
        <x-nav-link href="{{ route('qna.index') }}" :active="request()->routeIs('qna.index')" class="flex gap-3 items-center w-full">
           
            <span class="material-symbols-sharp"> psychology_alt </span>
            {{ __('Question & Answer') }}
        </x-nav-link>
        
    </div>
</div>
