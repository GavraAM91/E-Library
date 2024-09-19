<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <div
                                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                <a href="{{ route('books.create') }}"><button type="button"
                                        class="flex items-center mb-4 justify-center text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Add Books
                                    </button></a>
                                <thead class="text-xs text-white uppercase bg-gray-50 dark:bg-white dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            image
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Title Books
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            author name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            description
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            category
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            date created
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                @foreach ($books as $book)
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-white dark:border-gray-700 text-black">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-black">
                                                {{-- {{ $book->image }} --}}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $book->title }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $book->author_name }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $book->description }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $book->category['name'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $book->created_date }}
                                            </td>
                                        </tr>
                                    </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
