<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div x-data="{ show: false }" class="p-6 bg-white border-b border-gray-200" x-cloak>
                    <select class="w-64">
                        <option selected="selected" disabled="disabled" hidden>- Importar dados -</option>

                        @foreach ($tableArray as $key => $nomes)
                            <option @click="$dispatch('dropdown-select', { element: '{{$key}}' })">{{$nomes}}</option>
                        @endforeach

                    </select>
                    <div class="mt-6" x-data="{ selected: '' }" @dropdown-select.window="selected = $event.detail.element" x-cloak >
                        @foreach ($tableArray as $key => $nomes)
                        <div x-show="selected === '{{$key}}'">
                            <form method="post" action="/admin?para={{$key}}" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                <p>Import tabela - {{$nomes}}</p>
                                <label class="mt-3 w-36 flex flex-col items-center px-4 py-2 bg-white text-xs text-black shadow-lg tracking-wide border border-black cursor-pointer hover:bg-white hover:text-indigo-400 hover:border-indigo-400">
                                    <div x-data="{ fileName: 'Escolher ficheiro' }">
                                        <span x-text="fileName" class="leading-normal"></span>
                                        <input type='file' name='file' x-ref="file" @change="fileName = $refs.file.files[0].name" class="hidden" />
                                    </div>
                                </label>
                                <input class="mt-2 w-36 flex flex-col items-center px-4 py-2 bg-white text-xs text-black shadow-lg tracking-wide border border-black cursor-pointer hover:bg-white hover:text-indigo-400 hover:border-indigo-400" type="submit" name='submit' value='Importar'>
                            </form>
                        </div>
                        @endforeach
                    </div>

                    @if(Session::has('message'))
                        <div class="mt-4" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 10000)" x-cloak>
                        {{ Session::get('message') }}

                        @if(count($importData_arr))
                            <pre>
                            @foreach ($importData_arr as $data)
                                <div class="container">
                                <p>{{$data['existe']?'ja existe':'inserido'}}</p>
                                @php
                                    echo ($data['elem'])->toHtml();
                                @endphp
                                </div>
                            @endforeach
                            </pre>
                        @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
