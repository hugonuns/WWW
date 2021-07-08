<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full"
                             type="password"
                             name="password"
                             required autocomplete="current-password" />
                </div>

                <div class="mt-4">
                    <x-label for="dataI" :value="__('Hora de')" />

                    <x-input id="dataI" class="block mt-1 w-full"
                             type="date"
                             name="dataI"
                             required />
                    <textarea id="textArea" class="resize-none block mt-1 w-full"
                             name="textArea"
                             required >
                    </textarea>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <div class="flex items-center justify-self-start">
                        <a class="underline text-base text-gray-600 hover:text-gray-900 mt-4 mr-4" href="{{ route('profile.index') }}">
                            {{ __('Cancelar') }}
                        </a>
                        <x-button type="submit" class="mt-4" >{{ __('Editar') }}</x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
