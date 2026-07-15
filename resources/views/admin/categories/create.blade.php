@extends('admin.layouts.app')

@section('title','Create Category')

@section('page-title','Create Category')

@section('content')

<div class="max-w-5xl mx-auto mt-20">

<div class="flex justify-end mb-3">
                <a
                    href="{{ route('admin.categories.index') }}"
                    class="px-3 py-1 rounded-xl border hover:bg-gray-50">

                      ← Back

                </a>

</div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
        
        <div class="px-8 py-4 border-b">

            <h2 class="text-xl font-semibold text-[#081628]">

                Add New Category

            </h2>

            <p class="text-sm text-gray-500 mt-1">

                Enter a name below to create a new category.

            </p>

        </div>
        

        <form
            action="{{ route('admin.categories.store') }}"
            method="POST"
            class="p-5 space-y-3">

            @csrf

            <div>

                <label class="block mb-3 font-medium">

                    Category Name

                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full border rounded-lg px-3 py-2">

            </div>

            <div class="flex justify-end gap-4">

                <a
                    href="{{ route('admin.categories.index') }}"
                    class="px-4 py-2 border rounded-lg">

                    Cancel

                </a>

                <button
                    type="submit"
                    class="bg-[#002868] text-white px-4 py-2 rounded-lg">

                    Save Category

                </button>

            </div>

        </form>

    </div>

</div>

@endsection