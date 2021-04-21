@extends ('layout')
@section('title', 'Página principal - admin')
@section ('content')

    <div id="wrapper" >
        <div id="page" class="container">
            <!-- Message -->
            @if(Session::has('message'))
                <p >{{ Session::get('message') }}</p>
            @endif

            <!-- Form -->
            <form method='post' action='/uploadFile?para={{$entidadeAction}}' enctype='multipart/form-data' >
                {{ csrf_field() }}
                <p>Import tabela {{$entidadeStr}}</p>
                <input type='file' name='file' >
                <input type='submit' name='submit' value='Import'>
            </form>
        </div>

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
@endsection
