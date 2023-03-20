<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Recipe') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-success-status class="mb-4" :status="session('message')"/>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('add_recipe') }}" method="POST">
                    @csrf
                    <div>
                        <x-input-label for="recipeName" :value="__('Recipe Name')" />
                        <x-text-input id="recipeName" class="block mt-1 w-full" type="text" name="recipeName" :value="old('recipeName')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="image" :value="__('Image')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="text" name="image" :value="old('image')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="ingredients" :value="__('Ingredients')" />
                        <x-text-input id="ingredients" class="block mt-1 w-full" type="text" name="ingredients" :value="old('ingredients')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="instructions" :value="__('Instructions')" />
                        <x-text-input id="instructions" class="block mt-1 w-full" type="text" name="instructions" :value="old('instructions')" required autofocus />
                    </div>
                    <div>
                        <x-primary-button class="ml-3">
                            {{ __('Save Recipe') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
