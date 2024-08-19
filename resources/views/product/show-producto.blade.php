<x-app-layout>
  <p class="text-6xl text-gray-700 dark:text-white">Numero de Producto: </p>
  <p class="text-4xl font-thin text-gray-900 dark:text-white">{{$productDetail->product_number}}</p>
  <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
  <p class="text-6xl text-gray-700 dark:text-white">Nombre: </p>
  <p class="text-4xl font-thin text-gray-900 dark:text-white">{{$productDetail->name}}</p>
  <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
  <p class="text-6xl text-gray-700 dark:text-white">Descripción: </p>
  <p class="text-4xl font-thin text-gray-900 dark:text-white">{{$productDetail->desc}}</p>
  <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
  <p class="text-6xl text-gray-700 dark:text-white">Precio: </p>
  <p class="text-4xl font-thin text-gray-900 dark:text-white">{{$productDetail->price}}</p>
  <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
</x-app-layout>