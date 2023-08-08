        <article class="flex lg:flex-row flex-col no-wrap bg-white">
            <aside class="flex flex-col lg:border-l-2 lg:border-t-2 lg:border-b-2 border-gray-800 lg:w-[30%]">
                <div class="inline-block flex flex-col">
                    <div class="relative flex flex-col items-center inline-block rounded-full bg-blue-200 p-2 m-auto">
                        <img id="img" class="w-[8rem] h-[8rem] rounded-full" src="https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg" alt="Rounded avatar">
                        <button class="absolute top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2 w-[100%] h-[100%] bg-gray-300 rounded-full opacity-0 hover:opacity-75">TutorConnect</button>
                    </div>
                    <label for="img" class="border-2 border-gray-200 border-dashed -mt-200 text-center my-2">{{Auth::user()->name}}</label>
                </div>
                <a href="{{url('/profil')}}" class="{{request()->is('profil')?'text-white bg-gray-600':''}} text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Informations du profil</a>
                <a href="{{url('/editAccount')}}" class="{{request()->is('editAccount')?'text-white bg-gray-600':''}} text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Sécurité du compte</a>
                <a href="{{url('/editParcours')}}" class="{{request()->is('editParcours')?'text-white bg-gray-600':''}} text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Parcours académique</a>
                <a href="{{url('/editParcourspro')}}" class="{{request()->is('editParcourspro')?'text-white bg-gray-600':''}} text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Parcours professionnel</a>
                <a href="{{url('/editCompetences')}}" class="{{request()->is('editCompetences')?'text-white bg-gray-600':''}} text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Compétences</a>
                @if (Auth::user()->role!="etudiant")
                <a href="{{url('/editDisponibilite')}}" class="{{request()->is('editDisponibilite')?'text-white bg-gray-600':''}} text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Disponiblités</a>
                <a href="#" class="text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Tarifs</a>
                @endif
                <a href="{{url('/deleteAccount')}}" class="{{request()->is('deleteAccount')?'text-white bg-gray-600':''}} text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Retrait du compte</a>
            </aside>
            <div class="lg:w-[70%] border-2 border-gray-800">
                <header class="text-center">
                    <h1 class="text-xl font-semibold sm:text-2xl">Profil Public</h1>
                    <p>Renseignez des informations sur vous.</p>
                </header>
                <div class="text-center border-t-2 border-gray-800 overflow-auto h-[66vh]">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        @if (request()->is('profil'))
                            @include('profile.partials.update-profile-information-form')
                        @endif
                        @if (request()->is('editAccount'))
                            @include('profile.partials.update-password-form')
                        @endif
                        @if (request()->is('deleteAccount'))
                            @include('profile.partials.delete-user-form')
                        @endif
                        @if (request()->is('editCompetences'))
                            @include('profile.partials.competences')
                        @endif
                        @if (request()->is('editParcours'))
                            @include('profile.partials.editParcours')
                        @endif
                        @if (request()->is('editParcourspro'))
                            @include('profile.partials.editParcourspro')
                        @endif
                        @if (request()->is('editDisponibilite'))
                            @include('profile.partials.editDisponibilite')
                        @endif

                    </div>
                </div>
            </div>
        </article>
