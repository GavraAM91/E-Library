<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Books') }}
        </h2>
    </x-slot>
    <!-- Main modal -->
    <div class="relative p-4 w-full  h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-800">
                    Add Product
                </h3>
            </div>
            <!-- Modal body -->
            {{-- <form action="{{ route('books.store') }}" method="POST" id="createBooks">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">title</label>
                        <input type="text" name="title" id="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product name" required="">
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">Category</label>
                        <select id="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="1">Buku Politik</option>
                            <option value="2">Buku Pengetahuan</option>
                            <option value="3">Novel</option>
                            <option value="4">Buku Komik</option>
                            <option value="5">Buku Masak</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                        <textarea id="description" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Write product description here"></textarea>
                    </div>
                </div>
                <button type="submit" id="submit"
                    class="text-gray-900 inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Add new product
                </button>
            </form> --}}
            <form action="{{ route('books.store') }}" method="POST" id="createBooks" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                        <input type="text" name="title" id="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product name" required="">
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                        <select id="category_id" name="category_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="1">Buku Politik</option>
                            <option value="2">Buku Pengetahuan</option>
                            <option value="3">Novel</option>
                            <option value="4">Buku Komik</option>
                            <option value="5">Buku Masak</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                        <textarea id="description" rows="4" name="description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Write product description here"></textarea>

                        {{-- <input type="text" id="description" name="description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="write books description here"> --}}
                    </div>
                </div>
                <button type="submit" id="submit"
                    class="text-gray-900 inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Add new product
                </button>
            </form>
        </div>
</x-app-layout>

<!-- Updated jQuery script -->
<script>
    // $(document).ready(function() {
    //     $('#createBooks').on('submit', function(event) {
    //         event.preventDefault();

    //         //take form data
    //         var formData = {
    //             title: $("#title").val(),
    //             description: $("#description").val(),
    //             category: $("#category").val()
    //             _token: $('input[name="_token"]').val()
    //         }

    //         $.ajax({
    //             method: 'POST',
    //             url: $(this).attr('action'),
    //             data: formData
    //             dataType: 'json',
    //             success: function(response) {
    //                 if ($.isEmptyObject(response.error)) {
    //                     if (response.status == 1) {
    //                         $(form)[0].reset();
    //                         toastr.success(response.msg);
    //                     } else {
    //                         toastr.error(response.msg);
    //                     }
    //                 } else {
    //                     $.each(response.error, function(prefix, val)) {
    //                         $(form).find('span.' + prefix + '_error').text(val);
    //                     }
    //                 }
    //             }
    //         })
    //     });
    // });
    $(document).ready(function() {
        $('#createBooks').on('submit', function(event) {
            event.preventDefault();

            //take form data
            var formData = {
                title: $("#title").val(),
                description: $("#description").val(),
                category_id: $("#category_id").val(),
                _token: $('input[name="_token"]').val()
            }

            $.ajax({
                url: $(this).attr('action'), // Fix url
                method: 'POST', // Fix method
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if ($.isEmptyObject(response.error)) {
                        if (response.status == 1) {
                            $('#createBooks')[0].reset(); // Fix form reference
                            toastr.success(response.message);
                        } else {
                            toastr.error(response.message);
                        }
                    } else {
                        $.each(response.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(
                                val); // Corrected syntax
                        });
                    }
                }
            });
        });
    });
</script>
