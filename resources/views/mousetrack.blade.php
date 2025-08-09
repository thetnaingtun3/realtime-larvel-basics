<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 "

                     x-init="
                     const channel = Echo.private('app')
                     channel.listenForWhisper('typing',(event)=>{
                     console.log(event)
                    } )
                    setTimeout(()=>{
                   channel.whisper('typing',{
                   id:1
                   })
                    },2000)
                     "
                >
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 2a8 8 0 00-8 8v4a8 8 0 0016 0V10a8 8 0 00-8-8zm1 12a1 1 0 11-2 0V9a1 1 0 112 0v5zM9.293 5.293a1 1 0 011.414 0l3.586 3.586a1 1 0 01-1.414 1.414L10 7.414l-2.293 2.293a1 1 0 01-1.414-1.414l3.586-3.586z"/>
                        </svg>

                        <span></span>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
