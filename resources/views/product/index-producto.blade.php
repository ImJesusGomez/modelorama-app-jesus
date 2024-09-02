<x-app-layout>
  <div class="container">
    <div class="mb-10">
      <nav class="border-blue-200 bg-blue-50 dark:bg-blue-800 dark:border-blue-700">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://img.freepik.com/vector-gratis/dibujado-mano-concepto-dia-internacional-cerveza_23-2148575018.jpg?size=338&ext=jpg&ga=GA1.1.1826414947.1724630400&semt=ais_hybrid" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Modelorama</span>
        </a>
      <div>
        <a href="{{ route('producto.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Agregar Producto</a>
      </div>
      </div>
      </nav>
    </div>
            <div class="mb-2"><a href="{{ route('producto.report')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 " > Inventario </a></div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-blue-700 dark:text-blue-400">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      Nombre
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Precio
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Descripción
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
                      ${{$product->price}}
                  </td>
                  <td class="px-6 py-4">
                      {{$product->desc}}
                  </td>
                  <td class="px-6 py-4">
                      <a href=" {{route('producto.edit', $product->id) }} " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
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