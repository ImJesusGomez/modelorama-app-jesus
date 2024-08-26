<x-app-layout>
  Listado de productos
  <div class="container">
    <a href="{{ route('producto.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Agregar Producto</a>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      Nombre
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Descripción
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Precio
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Accion
                  </th>
              </tr>
          </thead>
      <tbody>
    @foreach($products as $product)
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      <a href="{{ route('producto.show', $product->id)}}">{{$product->name}}</a>
                  </th>
                  <td class="px-6 py-4">
                      {{$product->price}}
                  </td>
                  <td class="px-6 py-4">
                      {{$product->desc}}
                  </td>
                  <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  </td>
              </tr>
    @endforeach
            </tbody>
      </table>
      <div>
        {{ $products->links() }} 
        {{-- Mostrar fisicamente las paginas  --}}
      </div>
  </div>
  <br>
</x-app-layout>