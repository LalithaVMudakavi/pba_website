@extends('admin.layouts.app')

@section('title','Edit Category')

@section('page-title','Edit Category')

@section('content')

<div class="max-w-3xl mx-auto">

<div class="flex justify-end mb-3">
                <a
                    href="{{ route('admin.categories.index') }}"
                    class="px-3 py-1 rounded-xl border hover:bg-gray-50">

                      ← Back

                </a>

</div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200">

        <form
            action="{{ route('admin.categories.update',$category) }}"
            method="POST"
            class="p-8 space-y-6">

            @csrf
            @method('PUT')

            <div>

                <label class="block mb-2 font-medium">

                    Category Name

                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name',$category->name) }}"
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

                    Update Category

                </button>

            </div>

        </form>

    </div>

</div>

@endsection