@extends('admin.layouts.app')

@section('title','Categories')

@section('page-title','Categories')

@section('content')

<div class="bg-white rounded-xl shadow-sm border border-gray-200">

    <div class="flex items-center justify-between px-6 py-5 border-b">

        <div>
            <h2 class="text-xl font-semibold text-[#081628]">
                Categories
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Manage all categories.
            </p>
        </div>

          <a
             href="{{ route('admin.categories.create') }}"
             class="inline-flex items-center gap-2 bg-[#002868] hover:bg-[#001b4f]
                   text-white px-4 py-2 rounded-lg transition">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 4v16m8-8H4"/>

            </svg>

            Add Category

        </a>

    </div>

    <table class="w-full">

        <thead class="bg-gray-50">

            <tr>

                <th class="px-6 py-4 text-left">
                    Name
                </th>

                <th class="px-6 py-4 text-left">
                    Slug
                </th>

                <th class="px-6 py-4 text-center">
                    Actions
                </th>

            </tr>

        </thead>

        <tbody>

            @forelse($categories as $category)

            <tr class="border-t">

                <td class="px-6 py-4">
                    {{ $category->name }}
                </td>

                <td class="px-6 py-4">
                    {{ $category->slug }}
                </td>

                <td class="px-6 py-4">

                    <div class="flex justify-center gap-3">

                     <a
                       href="{{ route('admin.categories.edit',$category) }}"
                       class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-blue-100 text-blue-700 hover:bg-blue-200 transition"
                       title="Edit">

                      <svg xmlns="http://www.w3.org/2000/svg"
                           width="16"
                           height="16"
                           viewBox="0 0 24 24"
                           fill="none"
                           stroke="currentColor"
                           stroke-width="2"
                           stroke-linecap="round"
                           stroke-linejoin="round">
                        <path d="M12 20h9"/>
                        <path d="M16.5 3.5a2.121 2.121 0 1 1 3 3L7 19l-4 1 1-4Z"/>
                      </svg>
                    </a>

                        <form
                            action="{{ route('admin.categories.destroy',$category) }}"
                            method="POST"
                            onsubmit="return confirm('Delete category?')">

                            @csrf
                            @method('DELETE')

                               <button
        type="submit"
        class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-red-100 text-red-600 hover:bg-red-200 transition"
        title="Delete">

        <svg xmlns="http://www.w3.org/2000/svg"
             width="16"
             height="16"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round">
            <path d="M3 6h18"/>
            <path d="M8 6V4h8v2"/>
            <path d="M19 6l-1 14H6L5 6"/>
            <path d="M10 11v6"/>
            <path d="M14 11v6"/>
        </svg>

    </button>

                        </form>

                    </div>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="3" class="text-center py-8">

                    No categories found.

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection