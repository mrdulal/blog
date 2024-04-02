<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>

    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-7">

        {{-- Create Button --}}
        <span class="justify-end">
            <a href="{{ route('posts.create') }}"
                class="px-4 py-2 text-white bg-gray-800 rounded-md">{{ __('Create') }}</a>
        </span>

    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg border sm:rounded-lg">
                <div class="card">
                    {{-- table --}}
                    <div class="bg-gray w-full">
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                        Title</th>
                                                    {{-- <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase"></th> --}}
                                                    <th scope="col"
                                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                        Action</th>
                                                    {{-- <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                @foreach ($posts as $post)
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                            {{ $post->title }}</td>
                                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $post->content }}</td> --}}
                                                        <td
                                                            class="flex px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                            <a href="{{ route('posts.show', $post->id) }}"
                                                                class="px-2 py-2 text-white mx-1 bg-indigo-500 rounded-md">{{ __('Show') }}</a>
                                                            <a href="{{ route('posts.edit', $post->id) }}"
                                                                class="px-2 py-2 text-white mx-1 bg-gray-900 rounded-md">{{ __('Edit') }}</a>
                                                            <form action="{{ route('posts.destroy', $post->id) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="px-2 py-2 text-white mx-1 bg-red-700 rounded-md">{{ __('Delete') }}</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{-- Paginate --}}

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    {{-- end table --}}

                    {{-- pagination for {{ $posts->links() }} --}}
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
