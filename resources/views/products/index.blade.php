@extends('layouts.apps')
@section('content')
    <main class="container max-w-5xl mx-auto mt-10">
        <section>
            {{-- Header Section --}}
            <div class="flex justify-between items-center mx-auto mb-6">
                <h1 class="dark:text-neutral-300 text-neutral-800 font-bold text-4xl">Products</h1>
                <button
                    class="dark:bg-sky-600 dark:text-neutral-200 text-neutral-100 bg-sky-500 rounded py-2 px-2 hover:bg-sky-700 transition-colors">Add
                    Product</button>
            </div>
            {{-- Table --}}
            <div class="bg-neutral-200 dark:bg-neutral-700 rounded p-4 border border-neutral-300 ">
                <div class="mb-2">
                    <div>
                        <ul>
                            <p class="dark:text-neutral-200">
                                All
                            </p>
                        </ul>
                    </div>
                </div>
                {{-- Table Query --}}
                <div>
                    <div
                        class="flex items-center border rounded border-gray-300 py-2 px-4 focus-within:border-neutral-400 transition-colors mb-5 dark:bg-neutral-800 dark:border-neutral-600">
                        <label for="search" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-neutral-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </label>
                        <input type="text" id="search"
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none dark:placeholder-neutral-600 dark:text-gray-300"
                            placeholder="Search...">
                    </div>
                </div>
                <div class="grid grid-cols-6 p-2 border-b border-gray-300 text-sm font-bold dark:text-gray-200">
                    <p>Images</p>
                    <p class="col-span-2">Name</p>
                    <p>Category</p>
                    <p>Inventory</p>
                    <p>Actions</p>
                </div>
                <div class="grid grid-cols-6 p-2 border-b border-gray-300 text-sm">
                  <img src="" alt="#">
                  <p class="col-span-2">Product Name</p>
                  <p>Category</p>
                  <p>Inventory</p>
                  {{-- Btns --}}
                  <div>

                  </div>
                </div>
        </section>
    </main>
@endsection
