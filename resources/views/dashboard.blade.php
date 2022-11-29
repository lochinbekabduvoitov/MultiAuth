<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           HI.. <span>{{Auth::user()->name}}</span>
        </h2>

    </x-slot>

    <div class="py-12">
       Uka nima gap
    </div>
</x-app-layout>
