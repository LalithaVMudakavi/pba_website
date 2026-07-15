@php

$images = $listing->files->filter(function ($file) {
    return in_array(strtolower($file->file_type), [
        'jpg',
        'jpeg',
        'png',
        'webp',
        'gif'
    ]);
});

$documents = $listing->files->reject(function ($file) {
    return in_array(strtolower($file->file_type), [
        'jpg',
        'jpeg',
        'png',
        'webp',
        'gif'
    ]);
});

@endphp

@extends('admin.layouts.app')

@section('title','Business Details')

@section('page-title','Business Details')

@section('content')

<div class="max-w-7xl mx-auto space-y-6">

    <!-- Header -->
    <div class="bg-white rounded-2xl border shadow-sm p-8">

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

            <div>

                <div class="flex items-center gap-3 mb-3">

                    <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold uppercase">
                        {{ $listing->category->name }}
                    </span>

                    @if($listing->featured)
                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                            Featured
                        </span>
                    @endif

                </div>

                <h1 class="text-3xl font-bold text-[#081628]">
                    {{ $listing->title }}
                </h1>

                <p class="text-gray-500 mt-2 flex items-center gap-2">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="16"
                         height="16"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2">

                        <path d="M12 21s-6-5.686-6-11a6 6 0 0 1 12 0c0 5.314-6 11-6 11z"/>
                        <circle cx="12" cy="10" r="2"/>

                    </svg>

                    {{ $listing->location }}

                </p>

            </div>

            <div class="flex gap-3">

                <a
                    href="{{ route('admin.listings.index') }}"
                    class="px-4 py-2 rounded-xl border hover:bg-gray-50">

                      ← Back

                </a>

                <a
                    href="{{ route('admin.listings.edit',$listing) }}"
                    class="px-4 py-2 rounded-xl bg-[#002868] text-white hover:bg-[#00184d]">

                    Edit Business

                </a>

            </div>

        </div>

    </div>

    <!-- Business Overview -->
    <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-5">

        <div class="bg-white border rounded-2xl p-6 shadow-sm">
            <p class="text-sm text-gray-500">Category</p>
            <h3 class="font-semibold text-lg mt-2">
                {{ $listing->category->name }}
            </h3>
        </div>

        <div class="bg-white border rounded-2xl p-6 shadow-sm">
            <p class="text-sm text-gray-500">Location</p>
            <h3 class="font-semibold text-lg mt-2">
                {{ $listing->location }}
            </h3>
        </div>

        <div class="bg-white border rounded-2xl p-6 shadow-sm">
            <p class="text-sm text-gray-500">Asking Price</p>
            <h3 class="font-bold text-2xl text-[#002868] mt-2">
                ${{ number_format($listing->price) }}
            </h3>
        </div>

        <div class="bg-white border rounded-2xl p-6 shadow-sm">
            <p class="text-sm text-gray-500">Cash Flow</p>
            <h3 class="font-bold text-2xl text-green-600 mt-2">
                ${{ number_format($listing->cash_flow) }}
            </h3>
        </div>

    </div>

    <!-- Description -->
    <div class="bg-white border rounded-2xl shadow-sm p-6">

        <h2 class="text-xl font-semibold text-[#081628] mb-1">
            Business Description
        </h2>

        <div class="text-gray-700 whitespace-pre-line -mt-4">
            {{ $listing->description }}
        </div>

    </div>

    <!-- Files & Images -->
    @if($listing->files->count())

    <div class="bg-white border rounded-2xl shadow-sm p-8">

        <div class="flex items-center justify-between mb-8">

            <h2 class="text-xl font-semibold text-[#081628]">
                Files & Images
            </h2>

            <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-sm font-medium">
                {{ $listing->files->count() }} Files
            </span>

        </div>

        <div class="space-y-3">

            @foreach($listing->files as $file)

            @php
                $extension = strtolower($file->file_type);
                $isImage = in_array($extension,['jpg','jpeg','png','webp','gif']);
            @endphp

            <div class="flex items-center justify-between border rounded-xl p-3 hover:bg-gray-50 transition">

                <div class="flex items-center gap-4">

                    @if($isImage)

                        <img
                            src="{{ asset('storage/'.$file->file_path) }}"
                            class="w-12 h-12 rounded-xl object-cover border">

                    @else

                        <div class="w-12 h-12 rounded-xl bg-slate-100 flex items-center justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="26"
                                 height="26"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2">

                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <path d="M14 2v6h6"/>

                            </svg>

                        </div>

                    @endif

                    <div>

                        <h4 class="font-semibold text-gray-800">
                            {{ $file->file_name }}
                        </h4>

                        <p class="text-sm text-gray-500 mt-1">
                            {{ strtoupper($extension) }}
                            •
                            {{ number_format($file->file_size / 1024,1) }} KB
                        </p>

                    </div>

                </div>

                 <!-- View -->
            <div class="flex items-center gap-2">
                
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