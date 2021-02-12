<!doctype html>
  <head>
    <!-- ... --->
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
   
<div class="w-2/3 mx-auto">
   <div class="bg-white shadow-md rounded my-6">
      <button class="inline-flex items-center justify-center mr-2 mt-2  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
      <a href="{{ route('post.create')}}" class="text-grey-lighter font-bold py-1 px-3 rounded bg-green hover:bg-green-dark">Crear Post</a>
      </button>
<table class="text-left w-full border-collapse">
@foreach ($posts as $post)
<tr class="hover:bg-grey-lighter">
    <td class="py-4 px-6 border-b border-grey-light">
      <button class="inline-flex items-center justify-center  mr-3 mt-2  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
         <a class="text-grey-lighter font-bold py-1 px-3 rounded bg-green hover:bg-green-dark" href="{{ route('post.show',['post'=>$post['id']])}}">{{$post['id']}}</a>
       </button>
    </td>
    <td class="py-4 px-6 border-b border-grey-light">
       {{$post['title']}} 
    </td>
    <td class="py-4 px-6 border-b border-grey-light">
      <button class="inline-flex items-center justify-center  mr-2 mt-2  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
      <a href="{{ route('post.edit',['post'=>$post['id']])}}" class="text-grey-lighter font-bold py-1 px-3 rounded bg-green hover:bg-green-dark">Editar</a>
      </button>
    </td>
    <td class="py-4 px-6 border-b border-grey-light">  
       <form action="{{ route('post.destroy', ['post'=>$post['id']]) }}" method="POST">
         @csrf
         @method('DELETE')
         <button class="inline-flex items-center justify-center  mr-3 mt-2  text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
            <span  class="text-grey-lighter font-bold py-1 px-3 rounded bg-green hover:bg-green-dark">Borrar</span>
          </button>
         
       </form> 
   </td>
</tr>
@endforeach
</table>
   </div></div>
</body>
</html>
