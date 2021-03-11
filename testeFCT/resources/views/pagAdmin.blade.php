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
            <form method='post' action='/uploadFile' enctype='multipart/form-data' >
                {{ csrf_field() }}
                <input type='file' name='file' >
                <input type='submit' name='submit' value='Import'>
            </form>
        </div>
    </div>
@endsection
