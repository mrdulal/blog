<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>




    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <form action="#" method="#POST">
                <div class="grid grid-cols-3 gap-4">
                    <div
                        class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg border sm:rounded-lg col-span-2 py-3 px-3">
                        <div class="mb-3">
                            <label for="title"
                                class="block text-lg mb-2 font-medium leading-6 text-gray-900">Title</label>
                            <input type="text" name="title" id="title"
                                class="block w-full rounded-md py-2 px-3 h-14 text-gray-900   bg-white border-gray-300  placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Enter Title">
                        </div>
                        <div class="mb-3">
                            <label for="content"
                                class="block text-lg mb-2 font-medium leading-6 text-gray-900">Content</label>
                            <textarea name="content" id="content" cols="30" rows="10" placeholder="Enter Content"
                                class="block w-full rounded-md py-2 pl-3 pr-20 text-gray-900   bg-white border-gray-300  placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>



                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg border sm:rounded-lg px-3 py-3">
                        {{-- Image upload --}}
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                        800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>

                    </div>
                    <div class="mb-3">
                        <button type="submit"
                            class="bg-gray-900 px-7 py-3 rounded-lg text-white fw-bold">Publish</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</x-app-layout>
