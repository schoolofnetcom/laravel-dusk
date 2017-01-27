@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nova página</div>

                <div class="panel-body">
                  <form class="form-horizontal" action="/pages" method="post">
                    <legend>Nova página</legend>

                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="page-title" class="col-sm-2">Título</label>
                      <div class="col-sm-10">
                        <input id="page-title" type="text" name="title" placeholder="Título..." class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="page-body"class="col-sm-2">Conteúdo</label>
                      <div class="col-sm-10">
                        <textarea id="page-body" name="body" rows="8" class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="salvar" class="btn btn-success">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="panel-footer">
                  <a href="/pages" class="btn btn-default">voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
