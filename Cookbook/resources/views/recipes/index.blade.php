<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recipes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class ="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr >
                                        <th scope="col" class="px-6 py-4">Recipe Name</th>
                                        <th scope="col" class="px-6 py-4">Image</th>
                                        <th scope="col" class="px-6 py-4">Ingredients</th>
                                        <th scope="col" class="px-6 py-4">Instructions</th>
                                        <th scope="col" class="px-6 py-4">Update</th>
                                        <th scope="col" class="px-6 py-4">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($recipes as $recipe)
                                    <tr class="border-b font-medium dark:border-neutral-500">
                                        <td class="whitespace-nowrap px-6 py-4">{{ $recipe->recipeName }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $recipe->image }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $recipe->ingredients }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $recipe->instructions }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <a href="{{ url('/') }}">
                                                <x-primary-button class="mt-4">{{ __('Update') }}</x-primary-button>
                                            </a>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <a href="{{ url('/') }}">
                                                <x-danger-button class="mt-4">{{ __('Delete') }}</x-danger-button>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4"> No Record Found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


