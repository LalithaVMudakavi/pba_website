@extends('admin.layouts.app')

@section('title', 'Edit Business')

@section('page-title', 'Edit Business')

@section('content')

<div class="max-w-5xl mx-auto">

<div class="flex justify-end mb-3">
                <a
                    href="{{ route('admin.listings.index') }}"
                    class="px-3 py-1 rounded-xl border hover:bg-gray-50">

                      ← Back

                </a>

</div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
            
        <div class="px-8 py-4 border-b">

            <h2 class="text-xl font-semibold text-[#081628]">
                Edit Business
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Update the details of this business listing.
            </p>

        </div>

        <form
            action="{{ route('admin.listings.update', $listing) }}"
            method="POST"
             enctype="multipart/form-data"
            class="p-8 space-y-6 -mt-6">

            @csrf
            @method('PUT')

            <!-- Business Title -->
            <div>

                <label class="block mb-2 font-medium">
                    Business Title
                </label>

                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $listing->title) }}"
                    class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#002868]">

            </div>

            <!-- Category & Location -->
            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <label class="block mb-2 font-medium">
                        Category
                    </label>

                    <select
                        name="category_id"
                        class="w-full border rounded-lg px-3 py-2">

                        @foreach($categories as $category)

                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id', $listing->category_id) == $category->id ? 'selected' : '' }}>

                                {{ $category->name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div>

                    <label class="block mb-2 font-medium">
                        Location
                    </label>

                    <input
                        type="text"
                        name="location"
                        value="{{ old('location', $listing->location) }}"
                        class="w-full border rounded-lg px-3 py-2">

                </div>

            </div>

            <!-- Price & Cash Flow -->
            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <label class="block mb-2 font-medium">
                        Asking Price ($)
                    </label>

                    <input
                        type="number"
                        name="price"
                        value="{{ old('price', $listing->price) }}"
                        class="w-full border rounded-lg px-3 py-2">

                </div>

                <div>

                    <label class="block mb-2 font-medium">
                        Cash Flow ($)
                    </label>

                    <input
                        type="number"
                        name="cash_flow"
                        value="{{ old('cash_flow', $listing->cash_flow) }}"
                        class="w-full border rounded-lg px-3 py-2">

                </div>

            </div>

            <!-- Description -->
            <div>

                <label class="block mb-2 font-medium">
                    Description
                </label>

                <textarea
                    name="description"
                    rows="3"
                    class="w-full border rounded-lg px-3 py-2">{{ old('description', $listing->description) }}</textarea>

            </div>

        <!-- Upload New Files -->

<div>

    <label class="block mb-3 font-medium">

        Upload More Documents / Images

    </label>

    <label
        id="dropZone"
        for="files"
        class="flex flex-col items-center justify-center
               w-full h-40
               border-2 border-dashed border-gray-300
               rounded-xl
               cursor-pointer
               hover:border-[#002868]
               hover:bg-blue-50
               transition">

        <!-- Upload Icon -->

        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-12 h-12 text-[#002868] mb-3"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 16V4m0 0-4 4m4-4 4 4M4 20h16"/>

        </svg>

        <p class="font-medium">

            Drag & Drop Files

        </p>

        <p class="text-sm text-gray-500">

            or Click to Browse

        </p>

        <p class="text-xs text-gray-400 mt-2">

            Images, PDF, Word, Excel, TXT

        </p>

        <input
            id="files"
            type="file"
            name="files[]"
            multiple
            class="hidden">

    </label>

</div>

<!-- New Selected Files -->

<div
    id="previewContainer"
    class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6">
</div>

@if($listing->files->count())

<div class="mt-4 border-t border-gray-200 pt-4">

    <div class="flex items-center justify-between mb-4">

        <div>
            <h3 class="text-lg font-semibold text-[#081628]">
                Uploaded Files & Images
            </h3>

            <p class="text-xs text-gray-500">
                Manage all files attached to this business.
            </p>
        </div>

        <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-sm font-medium">
            {{ $listing->files->count() }} Files
        </span>

    </div>

    <div class="space-y-2">

        @foreach($listing->files as $file)

        @php
            $extension = strtolower($file->file_type);
            $isImage = in_array($extension,['jpg','jpeg','png','webp']);
        @endphp

        <div
            class="group flex items-center justify-between gap-4 bg-white border border-gray-200 rounded-2xl p-3 shadow-sm hover:shadow-md hover:border-blue-200 transition">

            <!-- Left Side -->

            <div class="flex items-center gap-4 min-w-0">

                @if($isImage)

                    <img
                        src="{{ asset('storage/'.$file->file_path) }}"
                        alt="{{ $file->file_name }}"
                        class="w-12 h-12 rounded-xl object-cover border">

                @else

                    <div
                        class="w-12 h-12 rounded-xl bg-slate-100 flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="20"
                             height="20"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             class="text-slate-500">

                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <path d="M14 2v6h6"/>
                        </svg>

                    </div>

                @endif

                <div class="min-w-0">

                    <h4 class="font-semibold text-gray-800 truncate">
                        {{ $file->file_name }}
                    </h4>

                    <div class="flex flex-wrap items-center gap-2 mt-1">

                        <span
                            class="px-2 py-1 rounded-full bg-slate-100 text-xs font-medium text-slate-600">

                            {{ strtoupper($extension) }}

                        </span>

                        <span class="text-xs text-gray-500">

                            {{ number_format($file->file_size / 1024,1) }} KB

                        </span>

                    </div>

                </div>

            </div>

            <!-- Right Side Buttons -->

            <div class="flex items-center gap-2">

                <!-- View -->

                <a
                    href="{{ route('admin.files.view', $file->id) }}"
                    target="_blank"
                    class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-slate-100 text-slate-700 hover:bg-slate-200 transition"
                    title="View">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="16"
                         height="16"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round">

                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"/>
                        <circle cx="12" cy="12" r="3"/>

                    </svg>

                </a>

                <!-- Download -->

                <a
                    href="{{ asset('storage/'.$file->file_path) }}"
                    download
                    class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-blue-100 text-blue-700 hover:bg-blue-200 transition"
                    title="Download">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="16"
                         height="16"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round">

                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <polyline points="7 10 12 15 17 10"/>
                        <line x1="12" y1="15" x2="12" y2="3"/>

                    </svg>

                </a>

                <!-- Delete -->

                <button
                    type="button"
                    onclick="deleteFile({{ $file->id }})"
                    class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-red-100 text-red-600 hover:bg-red-200 transition"
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

            </div>

        </div>

        @endforeach

    </div>

</div>

@endif


{{-- ========================================= --}}
{{-- Featured Business --}}
{{-- ========================================= --}}

<div class="mt-2  border-gray-200 pt-4">

        <label class="flex items-start gap-4 cursor-pointer">

            <input
                type="hidden"
                name="featured"
                value="0">

            <input
                type="checkbox"
                name="featured"
                value="1"
                class="mt-1 w-5 h-5 rounded text-[#002868]"
                {{ old('featured', $listing->featured) ? 'checked' : '' }}>

            <div>

                <h4 class="font-semibold text-[#081628]">
                    Featured Business
                </h4>

            </div>

        </label>

    </div>


{{-- ========================================= --}}
{{-- Action Buttons --}}
{{-- ========================================= --}}

<div class="mt-6 border-gray-200 pt-6">

    <div class="flex flex-col sm:flex-row justify-end gap-3">

        <a
            href="{{ route('admin.listings.index') }}"
            class="px-4 py-2 rounded-lg border">

            Cancel
        </a>

        <button
            type="submit"
             class="bg-[#002868] hover:bg-[#00184d] text-white px-4 py-2 rounded-lg">

            Update Business
        </button>

    </div>

</div>

</form>

    </div>

</div>

@endsection

<script>

document.addEventListener("DOMContentLoaded", function () {

const input = document.getElementById("files");

const preview = document.getElementById("previewContainer");

const dropZone = document.getElementById("dropZone");

let selectedFiles = [];

function renderFiles(){

    preview.innerHTML="";

    selectedFiles.forEach((file,index)=>{

        const card=document.createElement("div");

        card.className="relative border rounded-xl p-3 bg-white shadow";

        let content="";

        if(file.type.startsWith("image/")){

            const url=URL.createObjectURL(file);

            content=`
                <img
                    src="${url}"
                    class="h-28 w-full object-cover rounded-lg mb-2">
            `;

        }else{

            let icon="📄";

            if(file.name.endsWith(".pdf")) icon="📕";

            if(file.name.endsWith(".doc") || file.name.endsWith(".docx")) icon="📘";

            if(file.name.endsWith(".xls") || file.name.endsWith(".xlsx")) icon="📗";

            if(file.name.endsWith(".txt")) icon="📑";

            content=`
                <div class="h-28 flex items-center justify-center text-5xl">
                    ${icon}
                </div>
            `;

        }

        card.innerHTML=`

            <button
                type="button"
                onclick="removeFile(${index})"
                class="absolute top-2 right-2 w-7 h-7 rounded-full bg-red-600 text-white">

                ✕

            </button>

            ${content}

            <h4 class="text-sm font-medium truncate">

                ${file.name}

            </h4>

            <p class="text-xs text-gray-500">

                ${(file.size/1024).toFixed(1)} KB

            </p>

        `;

        preview.appendChild(card);

    });

}

window.removeFile=function(index){

    selectedFiles.splice(index,1);

    const dt=new DataTransfer();

    selectedFiles.forEach(f=>dt.items.add(f));

    input.files=dt.files;

    renderFiles();

}

input.addEventListener("change",()=>{

    selectedFiles=[...input.files];

    renderFiles();

});

dropZone.addEventListener("dragover",(e)=>{

    e.preventDefault();

    dropZone.classList.add("border-[#002868]","bg-blue-50");

});

dropZone.addEventListener("dragleave",()=>{

    dropZone.classList.remove("border-[#002868]","bg-blue-50");

});

dropZone.addEventListener("drop",(e)=>{

    e.preventDefault();

    dropZone.classList.remove("border-[#002868]","bg-blue-50");

    selectedFiles=[...e.dataTransfer.files];

    const dt=new DataTransfer();

    selectedFiles.forEach(f=>dt.items.add(f));

    input.files=dt.files;

    renderFiles();

});
});

</script>

<script>
function deleteFile(id)
{
    if (!confirm('Delete this file?')) {
        return;
    }

    fetch(`/admin/files/${id}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {

        if (data.success) {

            alert(data.message);

            location.reload();
        }

    })
    .catch(error => {
        console.error(error);
        alert('Something went wrong');
    });
}
</script>