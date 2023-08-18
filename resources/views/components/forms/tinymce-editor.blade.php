<div>
    <x-input-label for="contenu_blog" :value="__('Mettez ici le contenu de votre blog (tel qu\'il sera présenté)')" />
    <textarea name="contenu_blog" cols="30" rows="5" id="blog_editor" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">{{old('contenu_blog', $user->contenu_blog->description??'')}}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('contenu_blog')" />
</div>
