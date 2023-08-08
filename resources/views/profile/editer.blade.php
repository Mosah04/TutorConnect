        <article class="flex lg:flex-row flex-col no-wrap bg-white">
            <aside class="flex flex-col lg:border-l-2 lg:border-t-2 lg:border-b-2 border-gray-800 lg:w-[30%]">
                <div class="inline-block flex flex-col">
                    <div class="relative flex flex-col items-center inline-block rounded-full bg-blue-200 p-2 m-auto">
                        <img id="img" class="w-[8rem] h-[8rem] rounded-full" src="{{asset('storage/usersImages/'.((Auth::user()->image==null)?'userProfile.png':Auth::user()->image))}}" alt="Rounded avatar">
                            <button data-modal-target="userImage-modal" data-modal-toggle="userImage-modal" id="selectButton" type="button" class="absolute top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2 w-[100%] h-[100%] bg-gray-300 rounded-full opacity-0 hover:opacity-75">Changer la photo de profil</button>
                            <div id="userImage-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button id="userImageClose" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="userImage-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl text-center font-medium text-gray-900 dark:text-white">Photo de profil</h3>
                                            <div class="inline-flex items-center justify-center w-full">
                                                <img id="previewImage" class="w-[15rem] h-[15rem] rounded-full border border-gray-500" src="{{asset('storage/usersImages/'.((Auth::user()->image==null)?'userProfile.png':Auth::user()->image))}}" alt="Rounded avatar">
                                            </div>
                                            <form class="space-y-3 mt-6 flex flex-col" action="{{url('/changerPhoto')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <label for="userImage" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Changer la photo de profil</label>
                                                <input type="file" name="userImage" id="userImage" class="hidden" required>
                                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                const fileInput = document.getElementById('userImage');
                                const previewImage = document.getElementById('previewImage');
                                const imageClose = document.getElementById('userImageClose');
                                var lastSrc = previewImage.src;

                                fileInput.addEventListener('change', function() {
                                    var file = fileInput.files[0];
                                    if (file) {
                                        const reader = new FileReader();

                                        reader.onload = function(e) {
                                            previewImage.src = e.target.result;
                                        };

                                        reader.readAsDataURL(file);
                                    }
                                });

                                imageClose.addEventListener('click', function () {
                                    previewImage.src = lastSrc;
                                    fileInput = null;
                                })

                            </script>
                    </div>
                    <label for="img" class="border-2 border-gray-200 border-dashed -mt-200 text-center my-2">{{Auth::user()->name}}</label>
                </div>
                <a href="{{url('/profil')}}" class="{{request()->is('profil')?'text-white bg-gray-600':''}} text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Informations du profil</a>
                <a href="{{url('/editAccount')}}" class="{{request()->is('editAccount')?'text-white bg-gray-600':''}} text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Sécurité du compte</a>
                <a href="#" class="text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Parcours académique</a>
                <a href="#" class="text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Parcours professionnel</a>
                <a href="{{url('/editCompetences')}}" class="{{request()->is('editCompetences')?'text-white bg-gray-600':''}} text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Compétences</a>
                @if (Auth::user()->role!="etudiant")
                <a href="#" class="text-center py-2 hover:text-white hover:bg-gray-600 transition-background duration-200 ease-in-out">Disponiblités</a>
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
                    </div>
                </div>
            </div>
        </article>
