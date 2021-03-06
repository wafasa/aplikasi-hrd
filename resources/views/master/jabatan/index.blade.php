@extends('_layout.default')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>
          Master Jabatan
        </h3>
      </div>
      @if (Auth::user()->username == 'admin')
        <div class="col-md-6 text-right">
          <a href="{{ route('master::jabatan.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah</a>
        </div>
      @endif
    </div>
    <hr class="dashed mt20 mb20">
    @include('master.jabatan.table')
  </div>
@endsection
