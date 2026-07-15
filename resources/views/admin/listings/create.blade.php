@extends('admin.layouts.app')

@section('title','Create Business')

@section('page-title','Create Business')

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

                Add New Business

            </h2>

            <p class="text-sm text-gray-500 mt-1">

                Fill in the details below to create a new business listing.

            </p>

        </div>

        <form
            action="{{ route('admin.listings.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="p-8 space-y-4 -mt-6">

            @csrf

            <div>

                <label class="block mb-2 font-medium">

                    Business Title

                </label>

                <input
                    type="text"
                    name="title"
                    value="{{ old('title') }}"
                    class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#002868]">

            </div>

            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <label class="block mb-2 font-medium">

                        Category

                    </label>

                    <select
                        name="category_id"
                        class="w-full border rounded-lg px-3 py-2">

                        @foreach($categories as $category)

                            <option value="{{ $category->id }}">

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
                        value="{{ old('location') }}"
                        class="w-full border rounded-lg px-3 py-2">

                </div>

            </div>

            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <label class="block mb-2 font-medium">

                        Asking Price ($)

                    </label>

                    <input
                        type="number"
                        name="price"
                        value="{{ old('price') }}"
                        class="w-full border rounded-lg px-3 py-2">

                </div>

                <div>

                    <label class="block mb-2 font-medium">

                        Cash Flow ($)

                    </label>

                    <input
                        type="number"
                        name="cash_flow"
                        value="{{ old('cash_flow') }}"
                        class="w-full border rounded-lg px-3 py-2">

                </div>

            </div>

            <div>

                <label class="block mb-2 font-medium">

                    Description

                </label>

                <textarea
                    name="description"
                    rows="3"
                    class="w-full border rounded-lg px-3 py-2">{{ old('description') }}</textarea>

            </div>


    <div>

    <label class="block mb-3 font-medium text-gray-700">

        Documents / Images

    </label>

    <label
        id="dropZone"
        for="files"
        class="flex flex-col items-center justify-center
               w-full h-44
               border-2 border-dashed border-gray-300
               rounded-xl
               cursor-pointer
               transition
               hover:border-[#002868]
               hover:bg-blue-50">

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
                d="M12 16V4m0 0l-4 4m4-4 4 4M4 20h16"/>

        </svg>

        <p class="font-medium text-gray-700">

            Drag & Drop Files Here

        </p>

        <p class="text-sm text-gray-500 mt-1">

            or Click to Browse

        </p>

        <p class="text-xs text-gray-400 mt-2">

            Images • PDF • Word • Excel • TXT

        </p>

        <input
            id="files"
            type="file"
            name="files[]"
            multiple
            class="hidden">

    </label>

</div>

<!-- Progress -->

<div
    id="progressContainer"
    class="hidden mt-4">

    <div class="w-full h-2 rounded-full bg-gray-200 overflow-hidden">

        <div
            id="progressBar"
            class="h-full bg-[#002868] w-0 transition-all duration-300">

        </div>

    </div>

</div>

<!-- Preview -->

<div
    id="previewContainer"
    class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6">

</div>

  <div>

                <label class="inline-flex items-center gap-3 mt-2">

                    <input
    type="hidden"
    name="featured"
    value="0">

<input
    type="checkbox"
    name="featured"
    value="1"
    class="rounded">

                    <span>

                        Featured Business

                    </span>

                </label>

            </div>

            <div class="flex justify-end gap-4">

                <a
                    href="{{ route('admin.listings.index') }}"
                    class="px-4 py-2 rounded-lg border">

                    Cancel

                </a>

                <button
                    type="submit"
                    class="bg-[#002868] hover:bg-[#00184d] text-white px-4 py-2 rounded-lg">

                    Save Business

                </button>

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

const progress = document.getElementById("progressContainer");

const progressBar = document.getElementById("progressBar");

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

document.querySelector("form").addEventListener("submit",()=>{

    progress.classList.remove("hidden");

    let value=0;

    const interval=setInterval(()=>{

        value+=10;

        progressBar.style.width=value+"%";

        if(value>=100){

            clearInterval(interval);

        }

    },100);

});
});

</script>