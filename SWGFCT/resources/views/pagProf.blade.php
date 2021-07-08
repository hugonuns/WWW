<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($orientadores as $orientador)
                        @if(Auth::user()->id === $orientador->u_id)
                            <form method="GET" action="{{ route('visita.index') }}" >
                                <input class="my-2 w-36 flex flex-col items-center px-4 py-2 bg-white text-xs text-black shadow-lg tracking-wide border border-black cursor-pointer hover:bg-white hover:text-indigo-400 hover:border-indigo-400" type="submit" name='submit' value='Registar Visita'>
                            </form>
                            @break
                        @endif
                    @endforeach
                    <table class="table table-bordered table-striped table-sm">
                        <th>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telemovel</th>
                            </tr>
                        </th>
                        <tb>
                        @forelse($alunos as $aluno)
                            <tr>
                                <td>{{ $aluno->nome }}</td>
                                <td>{{ $aluno->email }}</td>
                                <td>{{ $aluno->telemovel }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">Nenhum registro encontrado para listar</td>
                            </tr>
                        @endforelse
                        </tb>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
