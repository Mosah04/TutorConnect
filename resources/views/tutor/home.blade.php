@extends('layouts.tutor')
@section('main')
<div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
    <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Nos tuteurs</h2>
        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">TutorConnect vous présente une liste complète de tuteurs prêts à vous aider </p>
    </div>
       

        <div class="py-8 px-4 text-center">
            {{-- <div class="mb-8 bg-green-300 py-2">
                <h2 class="mb-2 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Trouvez des tuteurs</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">TutorConnect vous présente une liste de tuteurs prêts à vous aider </p>
            </div> --}}
            @if ($tuteurs)
            <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($tuteurs as $tuteur)
                <div class="text-center text-gray-500 dark:text-gray-400 p-3 rounded-lg hover:bg-white hover:shadow-lg hover:shadow-gray-800 transition-hover duration-500 ease-out border border-gray-500">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{asset('storage/usersImages/'.$tuteur->image)}}" alt="Image du tuteur">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">{{$tuteur->name}}</a>
                    </h3>
                    <p>{{$tuteur->specialite->nom??""}}</p>
                    <p>Note</p>
                </div>
                @endforeach
            </div>
            @endif

        </div>

    {{-- <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <div class="text-center bg-gray-50 text-gray-500 rounded-1g dark:text-gray-400">
            <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
            <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                <a href="#">NOM DU TUTEUR</a>
            </h3>
            <p>SPACIALITE DU TUTEUR</p>
            <p>NOTE SUR LE TUTEUR</p>
        </div>

        <div class="text-center bg-gray-50 text-gray-500 rounded-1g dark:text-gray-400">
          <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
          <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              <a href="#">NOM DU TUTEUR</a>
          </h3>
          <p>SPACIALITE DU TUTEUR</p>
          <p>NOTE SUR LE TUTEUR</p>
      </div>

      <div class="text-center bg-gray-50 text-gray-500 rounded-1g dark:text-gray-400">
          <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
          <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              <a href="#">NOM DU TUTEUR</a>
          </h3>
          <p>SPACIALITE DU TUTEUR</p>
          <p>NOTE SUR LE TUTEUR</p>
      </div>

      <div class="text-center bg-gray-50 text-gray-500 rounded-1g dark:text-gray-400">
          <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
          <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              <a href="#">NOM DU TUTEUR</a>
          </h3>
          <p>SPACIALITE DU TUTEUR</p>
          <p>NOTE SUR LE TUTEUR</p>
      </div>

      <div class="text-center bg-gray-50 text-gray-500 rounded-1g dark:text-gray-400">
          <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
          <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              <a href="#">NOM DU TUTEUR</a>
          </h3>
          <p>SPACIALITE DU TUTEUR</p>
          <p>NOTE SUR LE TUTEUR</p>
      </div>

      <div class="text-center bg-gray-50 text-gray-500 rounded-1g dark:text-gray-400">
          <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
          <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              <a href="#">NOM DU TUTEUR</a>
          </h3>
          <p>SPACIALITE DU TUTEUR</p>
          <p>NOTE SUR LE TUTEUR</p>
      </div>

      <div class="text-center bg-gray-50 text-gray-500 rounded-1g dark:text-gray-400">
          <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
          <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              <a href="#">NOM DU TUTEUR</a>
          </h3>
          <p>SPACIALITE DU TUTEUR</p>
          <p>NOTE SUR LE TUTEUR</p>
      </div>

      <div class="text-center bg-gray-50 text-gray-500 rounded-1g dark:text-gray-400 ">
          <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
          <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              <a href="#">NOM DU TUTEUR</a>
          </h3>
          <p>SPACIALITE DU TUTEUR</p>
          <p>NOTE SUR LE TUTEUR</p>
      </div>
    </div> --}}
</div>
<div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
    <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Quel sera votre prochain sujet d'apprentissage ?</h2>
    </div>
    <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800    dark:border-gray-700">
            <a href="#">
                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://img-c.udemycdn.com/course/240x135/4045058_f063.jpg" alt="Bonnie Avatar">
            </a>
            <div class="p-5">
                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Titre du cours</a>
                </h3>
                <span class="text-gray-500 dark:text-gray-400">Nom du tuteur</span>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Note évaluative</p>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Gratuit /Payant</p>
            </div>
        </div>
        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://img-c.udemycdn.com/course/240x135/1342580_e500_4.jpg" alt="Jese Avatar">
            </a>
            <div class="p-5">
                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Titre du cours</a>
                </h3>
                <span class="text-gray-500 dark:text-gray-400">Nom du tuteur</span>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Note évaluative<</p>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Gratuit /Payant</p>
            </div>
        </div>

        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800    dark:border-gray-700">
            <a href="#">
                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://img-c.udemycdn.com/course/240x135/4045058_f063.jpg" alt="Bonnie Avatar">
            </a>
            <div class="p-5">
                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Titre du cours</a>
                </h3>
                <span class="text-gray-500 dark:text-gray-400">Nom du tuteur</span>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Note évaluative</p>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Gratuit /Payant</p>
            </div>
        </div>
        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://img-c.udemycdn.com/course/240x135/1342580_e500_4.jpg" alt="Jese Avatar">
            </a>
            <div class="p-5">
                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Titre du cours</a>
                </h3>
                <span class="text-gray-500 dark:text-gray-400">Nom du tuteur</span>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Note évaluative<</p>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Gratuit /Payant</p>
            </div>
        </div>
        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800    dark:border-gray-700">
            <a href="#">
                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://img-c.udemycdn.com/course/240x135/4045058_f063.jpg" alt="Bonnie Avatar">
            </a>
            <div class="p-5">
                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Titre du cours</a>
                </h3>
                <span class="text-gray-500 dark:text-gray-400">Nom du tuteur</span>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Note évaluative</p>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Gratuit /Payant</p>
            </div>
        </div>
        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://img-c.udemycdn.com/course/240x135/1342580_e500_4.jpg" alt="Jese Avatar">
            </a>
            <div class="p-5">
                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Titre du cours</a>
                </h3>
                <span class="text-gray-500 dark:text-gray-400">Nom du tuteur</span>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Note évaluative<</p>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Gratuit /Payant</p>
            </div>
        </div>
        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://img-c.udemycdn.com/course/240x135/1342580_e500_4.jpg" alt="Jese Avatar">
            </a>
            <div class="p-5">
                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Titre du cours</a>
                </h3>
                <span class="text-gray-500 dark:text-gray-400">Nom du tuteur</span>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Note évaluative<</p>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Gratuit /Payant</p>
            </div>
        </div>
        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800    dark:border-gray-700">
            <a href="#">
                <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://img-c.udemycdn.com/course/240x135/4045058_f063.jpg" alt="Bonnie Avatar">
            </a>
            <div class="p-5">
                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Titre du cours</a>
                </h3>
                <span class="text-gray-500 dark:text-gray-400">Nom du tuteur</span>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Note évaluative</p>
                <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Gratuit /Payant</p>
            </div>
        </div>
    </div>
</div>
<div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Suivez les actualités educatives en direct</h2>
</div>
<article class="py-6 px-6 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-4">
    <div class="flex items-center justify-between mb-3 text-gray-500">
        <span class="text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publié</font></font> <time datetime="1677146503000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">il y a 5 min</font></font></time></span>
    </div>

    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="/blog/state-of-flowbite-2022/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Délibération: découvrez les résultats du BAC 2023 </font></font></a></h2>

    <p class="mb-5 text-gray-500 dark:text-gray-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apprenez-en plus sur les résultats, les réalisations et les plans pour l'avenir en lisant nos blgs.</font></font>
    </p>

    <div class="flex items-center justify-between"><a class="flex items-center space-x-2" href="/blog/author/zoltan/"><img class="rounded-full w-7 h-7" src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp" alt="Photo de profil de Zoltán Szőgyényi"><span class="font-medium dark:text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kpakpato press</font></font></span></a><a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500" href="/blog/state-of-flowbite-2022/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En savoir plus</font></font><svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
    </div>
</article>

    <article class="py-6 px-6 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-4">
        <div class="flex items-center justify-between mb-3 text-gray-500">
            <span class="text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publié</font></font> <time datetime="1677146503000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">il y a 5 min</font></font></time></span>
        </div>

        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="/blog/state-of-flowbite-2022/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Délibération: découvrez les résultats du BAC 2023 </font></font></a></h2>

        <p class="mb-5 text-gray-500 dark:text-gray-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apprenez-en plus sur les résultats, les réalisations et les plans pour l'avenir en lisant nos blgs.</font></font>
        </p>

        <div class="flex items-center justify-between"><a class="flex items-center space-x-2" href="/blog/author/zoltan/"><img class="rounded-full w-7 h-7" src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp" alt="Photo de profil de Zoltán Szőgyényi"><span class="font-medium dark:text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kpakpato press</font></font></span></a><a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500" href="/blog/state-of-flowbite-2022/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En savoir plus</font></font><svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
        </div>
    </article>
    <article class="py-6 px-6 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-4">
        <div class="flex items-center justify-between mb-3 text-gray-500">
            <span class="text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publié</font></font> <time datetime="1677146503000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">il y a 5 min</font></font></time></span>
        </div>

        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="/blog/state-of-flowbite-2022/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Délibération: découvrez les résultats du BAC 2023 </font></font></a></h2>

        <p class="mb-5 text-gray-500 dark:text-gray-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apprenez-en plus sur les résultats, les réalisations et les plans pour l'avenir en lisant nos blgs.</font></font>
        </p>

        <div class="flex items-center justify-between"><a class="flex items-center space-x-2" href="/blog/author/zoltan/"><img class="rounded-full w-7 h-7" src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp" alt="Photo de profil de Zoltán Szőgyényi"><span class="font-medium dark:text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kpakpato press</font></font></span></a><a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500" href="/blog/state-of-flowbite-2022/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En savoir plus</font></font><svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
        </div>
    </article>

        <article class="py-6 px-6 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-4">
            <div class="flex items-center justify-between mb-3 text-gray-500">
                <span class="text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publié</font></font> <time datetime="1677146503000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">il y a 5 min</font></font></time></span>
            </div>

            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="/blog/state-of-flowbite-2022/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Délibération: découvrez les résultats du BAC 2023 </font></font></a></h2>

            <p class="mb-5 text-gray-500 dark:text-gray-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apprenez-en plus sur les résultats, les réalisations et les plans pour l'avenir en lisant nos blgs.</font></font>
            </p>

            <div class="flex items-center justify-between"><a class="flex items-center space-x-2" href="/blog/author/zoltan/"><img class="rounded-full w-7 h-7" src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp" alt="Photo de profil de Zoltán Szőgyényi"><span class="font-medium dark:text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kpakpato press</font></font></span></a><a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500" href="/blog/state-of-flowbite-2022/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En savoir plus</font></font><svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a>
            </div>
        </article>
@endsection
