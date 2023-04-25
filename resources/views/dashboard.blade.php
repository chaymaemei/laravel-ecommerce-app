
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                              
    <div class="container text-center">
    <div class="col">
      <h1>Product Details </h1> <a href="/addproduct" class="btn btn-primary">Add product</a>
     

      <table class ="table">
        <thead>
          <tr>
            <th>#</th>
            <th>product name</th>
            <th>product description</th>
            <th>product price</th>
            <th>product image</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>nom</td>
            <td>description</td>
            <td>price</td>
            <td>img</td>
            <td>
            <a href="#" class="btn btn-info">Update</a>
            <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>nom2</td>
            <td>description2</td>
            <td>price2</td>
            <td>img2</td>
            <td>
            <a href="#" class="btn btn-info">Update</a>
            <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>nom3</td>
            <td>description3</td>
            <td>price3</td>
            <td>img3</td>
            <td>
            <a href="#" class="btn btn-info">Update</a>
            <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
                </div>
            </div>




        </div>
    </div>
</x-app-layout>
