<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recipes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


{{-- <h1>Please let this work</h1>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class ="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Recipe Name</th>
                        <th>Image</th>
                        <th>Ingredients</th>
                        <th>Instructions</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($recipes as $recipe)
                    <tr>
                        <td>{{ $recipe->recipeName }}</td>
                        <td>{{ $recipe->image }}</td>
                        <td>{{ $recipe->ingredients }}</td>
                        <td>{{ $recipe->instructions }}</td>
                        <td>
                            <a href="{{ url('/') }}" class="btn btn-primary">Update</a>
                        </td>
                        <td>
                            <a href="{{ url('/') }}" class="btn btn-danger">Delete</a>
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
</div> --}}