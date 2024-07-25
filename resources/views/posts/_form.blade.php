@csrf
<div class="mb-4">
    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
        Título
    </label>
    <input type="text" name="title" id="title" value="{{ old('title', isset($post) ? $post->title : '') }}"
    class="mt-1 block w-full rounded-md shadow-sm text-black"required>
</div>

<div class="mb-4">
    <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300 ">
        Contenido
    </label>
    <textarea name="content" id="content" rows="5"
    class="mt-1 block w-full rounded-md shadow-sm text-black" required>{{ old('content', isset($post) ? $post->body : '') }}</textarea>
</div>

<div class="flex justify-between">
    <a href="{{route('posts.index')}}" class="text-indigo-600">Volver</a>
    <input type="submit"
    value="enviar"
    class="bg-gray-800 text-white rounded px-4 py-2">

    </input>
</div>
