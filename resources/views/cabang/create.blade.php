@extends('layouts.admin')
@section('konten')
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data Cabang</h1>
                    </div>
                </div>
            </div>
        </div>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  <div class="panel-body">
			  	<form action="{{ route('cabang.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('kode_cabang') ? ' has-error' : '' }}">
			  			<label class="control-label">Kode Cabang</label>	
			  			<input type="text" name="kode_cabang" class="form-control"  required>
			  			@if ($errors->has('kode_cabang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_cabang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_cabang') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Cabang</label>	
			  			<input type="text" name="nama_cabang" class="form-control"  required>
			  			@if ($errors->has('nama_cabang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_cabang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('uang_makan') ? ' has-error' : '' }}">
			  			<label class="control-label">Uang Makan</label>	
			  			<input type="text" name="uang_makan" class="form-control"  required>
			  			@if ($errors->has('uang_makan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('uang_makan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection