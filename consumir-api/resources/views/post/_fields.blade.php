<div class="mb-4">
   <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
       Título
   </label>
   <input
       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
       name="title" id="title" type="text" placeholder="Ingresa el título" required value="{{ old('title', $post['title'])  }}">
    @error('title')
    <div class="relative px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
       <span class="absolute inset-y-0 left-0 flex items-center ml-4">
         <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
       </span>
       <p class="ml-6">{{ $message }}</p>
     </div>                  
    @enderror
</div>

<div class="mb-4">

   <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
       Contenido
   </label>
   
   <textarea rows='4' class="bshadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="body" id="body" type="text" placeholder="Escriba el contenido aquí..." required>{{old('body', $post['body']) }}</textarea>
   @error('body')
   <div class="relative px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
    <span class="absolute inset-y-0 left-0 flex items-center ml-4">
      <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
    </span>
    <p class="ml-6">{{ $message }}</p>
   @enderror
 </div>