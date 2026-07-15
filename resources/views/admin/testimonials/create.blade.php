@extends('admin.layouts.app')

@section('title','Create Testimonial')
@section('page-title','Create Testimonial')

@section('content')

<div class="max-w-4xl mx-auto">

<div class="flex justify-end mb-3">
                <a
                    href="{{ route('admin.testimonials.index') }}"
                    class="px-3 py-1 rounded-xl border hover:bg-gray-50">

                      ← Back

                </a>

</div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200">

        <div class="px-6 py-4 border-b">

            <h2 class="text-xl font-semibold text-[#081628']">
                Add Testimonial
            </h2>

        </div>

        <form
            action="{{ route('admin.testimonials.store') }}"
            method="POST"
            class="p-8 space-y-4 -mt-4">

            @csrf

            <div>

                <label class="block mb-2 font-medium">
                    Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full border rounded-lg px-3 py-2">

            </div>

            <div>

                <label class="block mb-2 font-medium">
                    Designation
                </label>

                <input
                    type="text"
                    name="designation"
                    value="{{ old('designation') }}"
                    class="w-full border rounded-lg px-3 py-2">

            </div>

            <div>

                <label class="block mb-2 font-medium">
                    Testimonial
                </label>

               <textarea
                 name="testimonial"
                 rows="5"
                 class="w-full border rounded-lg px-3 py-2">{{ old('testimonial') }}
               </textarea>

            </div>

            <div class="flex justify-end gap-4">

                <a
                    href="{{ route('admin.testimonials.index') }}"
                    class="px-4 py-2 border rounded-lg">

                    Cancel

                </a>

                <button
                    type="submit"
                    class="bg-[#002868] text-white px-4 py-2 rounded-lg">

                    Save Testimonial

                </button>

            </div>

        </form>

    </div>

</div>

@endsection