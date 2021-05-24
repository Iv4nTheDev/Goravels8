<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Student List
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('lessons.create') }}" class="bg-black hover:bg-yellow-700 text-yellow-400 font-bold py-2 px-4 rounded">Add User</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                <tr>
                                    <th scope="col" width="50" class="text-center px-6 py-3 bg-gray-200 text-left text-xs font-medium text-black uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="text-center  px-6 py-3 bg-gray-200 text-left text-xs font-medium text-black uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="text-center  px-6 py-3 bg-gray-200 text-left text-xs font-medium text-black uppercase tracking-wider">
                                        Year-Level
                                    </th>
                                    <th scope="col" class="text-center  px-6 py-3 bg-gray-200 text-left text-xs font-medium text-black uppercase tracking-wider">
                                        Course
                                    </th>
                                    <th scope="col" class="text-center  x-6 py-3 bg-gray-200 text-left text-xs font-medium text-black uppercase tracking-wider">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-600">
                                @foreach ($lessons as $lesson)
                                    <tr>
                                        <td class="text-center  px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $lesson->id }}
                                        </td>

                                        <td class="text-center  px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $lesson->name }}
                                        </td>

                                        <td class="text-center  px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $lesson->year_level }}
                                        </td>

                                        <td class="text-center  px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $lesson->course }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center  ">
                                            <a href="{{ route('lessons.show', $lesson->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                                            <a href="{{ route('lessons.edit', $lesson->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                            <form class="inline-block" action="{{ route('lessons.destroy', $lesson->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>