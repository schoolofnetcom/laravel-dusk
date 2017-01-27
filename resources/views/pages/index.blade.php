@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Páginas</div>

                <div class="panel-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>título</th>
                          <th class="text-right">+ detalhes</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($result as $page)
                        <tr>
                          <td>{{ $page->id }}</td>
                          <td>{{ $page->title }}</td>
                          <td class="text-right">
                            <a href="/pages/{{ $page->id }}" class=" btn btn-default btn-xs" id="btnVer{{ $page->id }}">ver</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                  <a href="/pages/create" id="btnNovo" class="btn btn-success">novo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
