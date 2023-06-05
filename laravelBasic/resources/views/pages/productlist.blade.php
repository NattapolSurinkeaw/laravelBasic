@extends ('layouts.main')

@section('content')
<div class="w-10/12 m-20 m-auto">
<a href="create" class="p-4 bg-red-400 rounded-xl my-10">create</a>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg m-10">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Action</span>
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $product->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product->price }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product->quantity }}
                    </td>
                    <td class="px-6 py-4">
                        @if ($product->image)
                        <img src="{{ asset('images/' . $product->image) }}" alt="Product Image" width="100">
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <span class="mx-4">
                            <a href="{{ route('products.edit', $product->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </span>
                        <span>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                        </form>
                        </span>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>

</div>
@endsection