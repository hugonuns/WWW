<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-xl">Campos Editáveis</p>
                    @if(Auth::user()->isAn('aluno'))
                        @foreach($alunos as $aluno)
                            @if(Auth::user()->id === $aluno->u_id)
                                <form class="mt-4" method="POST" action="{{ route('profile.update',$aluno->id) }}" >
                                    @csrf
                                    @method('PUT')
                                    <x-label for="tel" :value="__('Telemovel:')" />
                                    <x-input id="tel" class="block mt-1 w-1/3" type="text" name="telemovel" value="{{$aluno->telemovel}}" required autofocus />
                                    <x-label for="Loc" :value="__('Localidade:')" />
                                    <x-input id="Loc" class="block mt-1 w-1/3" type="text" name="localidade" value="{{$aluno->localidade}}" required autofocus />
                                    <x-label for="Res" :value="__('Residencia:')" />
                                    <x-input id="Res" class="block mt-1 w-1/3" type="text" name="residencia" value="{{$aluno->residencia}}" required autofocus />
                                    <x-label for="Cp" :value="__('Codigo Postal:')" />
                                    <x-input id="Cp" class="block mt-1 w-1/3" type="text" name="codigoPostal" value="{{$aluno->codigoPostal}}" required autofocus />
                                    <x-label for="CcV" :value="__('Cartão Cidadão - Validade:')" />
                                    <x-input id="CcV" class="block mt-1 w-1/3" type="text" name="ccValidade" value="{{$aluno->ccValidade}}" required autofocus />
                                    <div class="flex items-center justify-self-start">
                                        <x-button type="submit" class="mt-4 mr-4" >{{ __('Editar') }}</x-button>
                                        <a class="underline text-base text-gray-600 hover:text-gray-900 mt-3.5" href="{{ route('profile.index') }}">
                                            {{ __('Cancelar') }}
                                        </a>
                                    </div>
                                </form>
                                @break
                            @endif
                        @endforeach
                    @elseif(Auth::user()->isAn('prof'))
                        @foreach($orientadores as $orientador)
                            @if(Auth::user()->id === $orientador->u_id)
                                <form class="mt-4" method="POST" action="{{ route('profile.update',$orientador->id) }}" >
                                    @csrf
                                    @method('PUT')
                                    <x-label for="tel" :value="__('Nome:')" />
                                    <x-input id="tel" class="block mt-1 w-1/4" type="text" name="orientNome" value="{{$orientador->orientNome}}" required autofocus />
                                    <x-label for="Res" :value="__('Telemovel:')" />
                                    <x-input id="Res" class="block mt-1 w-1/4" type="text" name="orientTm" value="{{$orientador->orientTm}}" required autofocus />
                                    <div class="flex items-center justify-self-start">
                                        <x-button type="submit" class="mt-4 mr-4" >{{ __('Editar') }}</x-button>
                                        <a class="underline text-base text-gray-600 hover:text-gray-900 mt-3.5" href="{{ route('profile.index') }}">
                                            {{ __('Cancelar') }}
                                        </a>
                                    </div>
                                </form>
                                @break
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
