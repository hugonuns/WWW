<x-app-layout>
    <div class="pt-12 pb-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-xl">Perfil</p>
                    @if ($message = Session::get('success'))
                        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 10000)">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 10000)">
                            <strong>Whoops!</strong> Houve algum problema com os dados importados.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Auth::user()->isAn('aluno'))
                        @foreach($alunos as $aluno)
                            @if(Auth::user()->id === $aluno->u_id)
                                <form class="mt-4" method="GET" action="{{ route('profile.edit',$aluno->id) }}" >
                                    <div class="grid md:grid-flow-col">
                                        <div>
                                            <x-label for="tel" :value="__('Nome:')" />
                                            <x-input id="tel" class="block mt-1 w-10/12" type="text" name="telemovel" value="{{$aluno->nome}}" disabled autofocus />
                                            <x-label for="Loc" :value="__('Nº. Processo:')" />
                                            <x-input id="Loc" class="block mt-1 w-10/12" type="text" name="localidade" value="{{$aluno->nProcesso}}" disabled autofocus />
                                            <x-label for="Res" :value="__('Nº. Aluno:')" />
                                            <x-input id="Res" class="block mt-1 w-10/12" type="text" name="residencia" value="{{$aluno->nAluno}}" disabled autofocus />
                                            <x-label for="Cp" :value="__('Email:')" />
                                            <x-input id="Cp" class="block mt-1 w-10/12" type="text" name="codigoPostal" value="{{$aluno->email}}" disabled autofocus />
                                            <x-label for="CcV" :value="__('Telemovel:')" />
                                            <x-input id="CcV" class="block mt-1 w-10/12" type="text" name="ccValidade" value="{{$aluno->telemovel}}" disabled autofocus />
                                        </div>
                                        <div>
                                            <x-label for="Loc" :value="__('Localidade:')" />
                                            <x-input id="Loc" class="block mt-1 w-10/12" type="text" name="localidade" value="{{$aluno->localidade}}" disabled autofocus />
                                            <x-label for="Res" :value="__('Residencia:')" />
                                            <x-input id="Res" class="block mt-1 w-10/12" type="text" name="residencia" value="{{$aluno->residencia}}" disabled autofocus />
                                            <x-label for="tel" :value="__('Nacionalidade:')" />
                                            <x-input id="tel" class="block mt-1 w-10/12" type="text" name="telemovel" value="{{$aluno->nacionalidade}}" disabled autofocus />
                                            <x-label for="Cp" :value="__('Naturalidade:')" />
                                            <x-input id="Cp" class="block mt-1 w-10/12" type="text" name="codigoPostal" value="{{$aluno->naturalidade}}" disabled autofocus />
                                            <x-label for="CcV" :value="__('Código Postal:')" />
                                            <x-input id="CcV" class="block mt-1 w-10/12" type="text" name="ccValidade" value="{{$aluno->codigoPostal}}" disabled autofocus />
                                        </div>
                                        <div>
                                            <x-label for="tel" :value="__('Cartão Cidadão:')" />
                                            <x-input id="tel" class="block mt-1 w-10/12" type="text" name="telemovel" value="{{$aluno->cc}}" disabled autofocus />
                                            <x-label for="CcV" :value="__('Cartão Cidadão - Validade:')" />
                                            <x-input id="CcV" class="block mt-1 w-10/12" type="text" name="ccValidade" value="{{$aluno->ccValidade}}" disabled autofocus />
                                            <x-label for="Loc" :value="__('Data Nascimento:')" />
                                            <x-input id="Loc" class="block mt-1 w-10/12" type="text" name="localidade" value="{{$aluno->dataNascimento}}" disabled autofocus />
                                        </div>
                                    </div>
                                    <x-button type="submit" class="mt-4" >{{ __('Editar') }}</x-button>
                                </form>
                                @break
                            @endif
                        @endforeach
                    @elseif(Auth::user()->isAn('prof'))
                        @foreach($orientadores as $orientador)
                            @if(Auth::user()->id === $orientador->u_id)
                                <form class="mt-4" method="GET" action="{{ route('profile.edit',$orientador->id) }}" >
                                    <div>
                                        <x-label for="tel" :value="__('Nome:')" />
                                        <x-input id="tel" class="block mt-1 w-1/4" type="text" name="orientNome" value="{{$orientador->orientNome}}" disabled autofocus />
                                        <x-label for="Loc" :value="__('Email:')" />
                                        <x-input id="Loc" class="block mt-1 w-1/4" type="text" name="orientEmail" value="{{$orientador->orientEmail}}" disabled autofocus />
                                        <x-label for="Res" :value="__('Telemovel:')" />
                                        <x-input id="Res" class="block mt-1 w-1/4" type="text" name="orientTm" value="{{$orientador->orientTm}}" disabled autofocus />
                                    </div>
                                    <x-button type="submit" class="mt-4" >{{ __('Editar') }}</x-button>
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

