<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('room') }}
            {{ $room->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" x-data="{


                    usersHere: []
                }"
                    x-init= "
                    Echo.join('room.{{ $room->id }}')
                         .here((users)=>{
                            usersHere = users
                        })
                        .joining(user=> {
                            usersHere.push(user)
                        })
                        .leaving(user=> {
                            usersHere = usersHere.filter(u => u.id !== user.id)
                        })
                    ">
                    <div>
                        <h2 class="font-semibold text-lg"> Users Here</h2>



                        <template x-for="user in usersHere" :key="user.id">

                            <div class="p-2 m-2 bg-gray-100 rounded-lg">
                                <span x-text="user.name"></span>
                                <span class="text-gray-500 text-sm" x-text="user.email"></span>
                            </div>

                        </template>

                    </div>


                </div>


            </div>
        </div>
    </div>
</x-app-layout>
