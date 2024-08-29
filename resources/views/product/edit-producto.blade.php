<x-app-layout>
  <div class="mb-10">
    <nav class="border-blue-200 bg-blue-50 dark:bg-blue-800 dark:border-blue-700">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="https://img.freepik.com/vector-gratis/dibujado-mano-concepto-dia-internacional-cerveza_23-2148575018.jpg?size=338&ext=jpg&ga=GA1.1.1826414947.1724630400&semt=ais_hybrid" class="h-8" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Modelorama</span>
        </a>
        <div>
          <a href="{{ route('producto.show', $productDetail->id)}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><< Regresar</a>
        </div>
      </div>
      </nav>
    </div>
    <div class="mt-8">
        <form action="{{ route('producto.update', $productDetail->id)}}" method="POST" class="max-w-sm mx-auto">
          @csrf @method('PATCH')
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                    Producto</label>
                <input type="text" id="name" name="name" value="{{old('name', $productDetail->name)}}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marca</label>
                <input type="text" id="branch" name="branch" value="{{old('branch', $productDetail->branch)}}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número de
                    Producto</label>
                <input type="text" id="product_number" name="product_number" value="{{old('product_number', $productDetail->product_number)}}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
                <input type="text" id="price" name="price" value="{{old('price', $productDetail->price)}}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="message"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                <textarea id="desc" name="desc" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Descripción del producto...">{{old('desc', $productDetail->desc)}}</textarea>
            </div>
            <div class="mb-5">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Guardar</button>
            </div>
        </form>
    </div>
</x-app-layout>