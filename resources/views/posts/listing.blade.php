<div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
    <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                <div class="flex-none md:flex">
                    <h4 class="font-medium flex-1 self-center mb-2 md:mb-0">Add Posts</h4>
                    <div class="dropdown inline-block">
                        <a href="{{ route('posts.create') }}">
                            <x-primary-button>Add</x-primary-button>
                        </a>
                    </div>
                </div><!--end header-title-->
                <div class="grid grid-cols-1 p-4">
                    <div class="sm:-mx-6 lg:-mx-8">
                        <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                            <table class="table-fixed w-full">
                                <thead class="bg-gray-50 border-b dark:bg-slate-700/20">
                                    <tr>
                                        <th scope="col" colspan="2"
                                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Title
                                        </th>
                                        <th scope="col" colspan="5"
                                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Content
                                        </th>
                                        <th scope="col" colspan="1"
                                            class="p-3 text-xs text-center font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr
                                            class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                            <td colspan="2"
                                                class="p-3 text-sm text-gray-500 whitespace-wrap dark:text-gray-400 break-all">
                                                {{ $post->title }}
                                            </td>
                                            <td colspan="5"
                                                class="p-3 text-sm text-gray-500 whitespace-wrap dark:text-gray-400 break-all">
                                                {{ $post->content }}
                                            </td>
                                            <td colspan="1"
                                                class="p-3 text-sm  text-center text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <a href="#">Edit</a>
                                                
                                            </td>
                                        </tr>
                                    @endforeach

                                    {{ $posts->links() }}
                                </tbody>
                            </table>
                            @if ($posts->isEmpty())
                                <div class="p-3">
                                    <div class="p-3">
                                        <p class="text-center pt-4 text-custom-gray font-semibold-600 "> No
                                            Posts available.</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div><!--end col-->
    </div>
</div>
