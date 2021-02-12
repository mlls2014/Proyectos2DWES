<!doctype html>
  <head>
    <!-- ... --->
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
   <div class=" flex items-center justify-center ">
        
      <form id="form" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method='post' action = '{{route('post.update',['post'=>$post['id']])}}'>
         @csrf
         {{ method_field('PUT') }}
          <br>
          <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">Editar el Post</h1>
          <br>
         
          @include('post._fields')
          
          <div class="flex items-center justify-between">
              <button id="submit"
                  class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                  type="submit">
                  Editar Post
              </button>
          </div>

          <div class="mb-4">


      </form>
      
  </div>
</body>
</html>