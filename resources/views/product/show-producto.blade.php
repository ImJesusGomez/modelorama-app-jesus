<x-app-layout>
  <div class="mb-10">
    <nav class="border-blue-200 bg-blue-50 dark:bg-blue-800 dark:border-blue-700">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://img.freepik.com/vector-gratis/dibujado-mano-concepto-dia-internacional-cerveza_23-2148575018.jpg?size=338&ext=jpg&ga=GA1.1.1826414947.1724630400&semt=ais_hybrid" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Modelorama</span>
        </a>
        <div >
              <a href="{{ route('producto.index') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><< Regresar</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="margin: 0 auto;">
    <a href="{{ route('producto.show', $productDetail->id)}}">
        <img class="rounded-t-lg" src="https://www.republicacervecerashop.com.mx/cdn/shop/articles/cerveza-artesanal_2000x.jpg?v=1703130948" alt="" />
    </a>
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $productDetail->name }}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span class="font-bold">Desc:</span> {{$productDetail->desc}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span class="font-bold">Price:</span> ${{$productDetail->price}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> <span class="font-bold">Product Number:</span> #{{$productDetail->product_number}}</p>
        <a href="{{ route('producto.edit', $productDetail->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Editar
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
          </a>
          <form id="delete-form" action="{{ route('producto.destroy', $productDetail->id) }}" method="POST" style="display: inline;">
            @method('delete')
            @csrf
            <button type="button" onclick="confirmDelete(event)" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 ml-5">
              Eliminar
              <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
            </button>
          </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function confirmDelete(event) {
      event.preventDefault();
      Swal.fire({
        title: '¿Estás seguro?',
        text: "No podrás revertir las modificacones!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById('delete-form').submit();
            Swal.fire({
              title: "Eliminado!",
              text: "Tu producto ha sido eliminado!",
              timer: 10000
            });
        }
      });
    }
  </script>
</x-app-layout>
