@extends ('layout')
@section('title', 'Página principal - aluno')
@section ('content')

    <div id="wrapper" >
        <div id="page" class="container">
            <h1> Documentação</h1>
            <div class="grid-container">
                <div class="grid-child">
                    <h3>Dados FCT - 10ºano<br>(caso exista)</h3>

                    <p>Nota: <!--TODO adicionar uma nota automáticamente-->  </p>
                    <p>Empresa: <!--TODO adicionar a empresa automáticamente-->  </p>

                    <label for="concluiu">Concluiu</label>
                    <input type="checkbox" id="concluiu" name="concluiu10" >
                </div>
                <div class="grid-child">
                    <h3>Dados FCT - 11ºano</h3>

                    <p>Nota:  </p>
                    <p>Empresa:  </p>

                    <label for="concluiu">Concluiu</label>
                    <input type="checkbox" id="concluiu" name="concluiu10" >
                </div>
                <div class="grid-child">
                    <h3>Dados FCT - 12ºano</h3>

                    <p>Nota:  </p>
                    <p>Empresa:  </p>

                    <label for="concluiu">Concluiu</label>
                    <input type="checkbox" id="concluiu" name="concluiu10" >
                </div>
            </div>
        </div>
    </div>
@endsection
