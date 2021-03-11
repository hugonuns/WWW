@extends ('layout')
@section('title', 'Página principal - professor')
@section ('content')

    <div id="wrapper" >
        <div id="page" class="container">
            <div class="dropdown">
                <button class="button">ano letivo</button>
                <!-- TODO foreach para precorrer a bd pelos anos letivos existentes-->
                <div class="dropdown-content">
                    <a href="#">X</a>
                    <a href="#">Y</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="button">registar visita</button>
            </div>
            <div class="dropdown">
                <button class="button">registar aluno</button><!-- TODO para ultimo-->
            </div>
        </div>

        <!--<7?= alunoController::getListaAluno(true); ?>-->
        <div id="page" class="container">
        <table class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telemovel</th>
                <th>
                    <a href="{{ route('alunos.create') }}" class="btn btn-info btn-sm" >Novo</a>
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ $aluno->telemovel }}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
                            @csrf
                            <input type="hidden" name="_method" value="delete" >
                            <button class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Nenhum registro encontrado para listar</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        </div>
    </div>

@endsection

