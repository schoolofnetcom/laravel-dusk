@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Páginas</div>

                <div class="panel-body">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <strong>Título:</strong> {{$result->title}}
                    </li>
                    <li class="list-group-item">
                      <strong>Conteúdo:</strong> {{$result->body}}
                    </li>
                  </ul>
                </div>
                <div class="panel-footer">
                  <a href="/pages" class="btn btn-default">voltar</a>
                  <a href="/pages/{{ $result->id }}/edit" class="btn btn-primary">edit</a>
                  <form action="/pages/{{ $result->id }}" method="post" style="display: inline-block">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="remover" class="btn btn-danger">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
