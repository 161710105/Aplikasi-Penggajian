@extends('layouts.admin')
@section('konten')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail Data&nbsp;{{ $karyawan->nama }} </h1>
                    </div>
                </div>
            </div>
            <div class="page-header float-right">
                    <div class="page-title">
                        <a href="{{ url()->previous() }}">Kembali</a>
                    </div>
                </div>
        </div>
<!-- <div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-body">
			  		<div class="form-group {{ $errors->has('nomor_induk') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Induk</label>	
			  			<input type="text" name="nomor_induk" class="form-control" value="{{ $karyawan->nomor_induk }}"  readonly>
			  			@if ($errors->has('nomor_induk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomor_induk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $karyawan->nama }}"  readonly>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Lahir</label>	
			  			<input type="text" name="tempat_lahir" class="form-control" value="{{ $karyawan->tempat_lahir }}"  readonly>
			  			@if ($errors->has('tempat_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Lahir</label>	
			  			<input type="date" name="tanggal_lahir" class="form-control" value="{{ $karyawan->tanggal_lahir }}"  readonly>
			  			@if ($errors->has('tanggal_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin</label>
			  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
			  			<input type="radio" name="jenis_kelamin" class="form-check-input"  value="Laki-laki" {{ $karyawan->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>Laki-laki
			  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  			<input type="radio" name="jenis_kelamin" class="form-check-input"  value="Perempuan" {{ $karyawan->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>Perempuan
			  			@if ($errors->has('jenis_kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('agama') ? ' has-error' : '' }}">
			  			<label class="control-label">Agama</label>	
			  			<input type="text" name="agama" class="form-control" value="{{ $karyawan->agama }}"  readonly>
			  			@if ($errors->has('agama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('agama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('status_pernikahan') ? ' has-error' : '' }}">
			  			<label class="control-label">Status Pernikahan</label>
			  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
			  			<input type="radio" name="status_pernikahan" class="form-check-input"  value="Kawin" {{ $karyawan->status_pernikahan == 'Kawin' ? 'checked' : '' }}>Kawin
			  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  			<input type="radio" name="status_pernikahan" class="form-check-input"  value="Belum Kawin" {{ $karyawan->status_pernikahan == 'Belum Kawin' ? 'checked' : '' }}>Belum Kawin
			  			@if ($errors->has('status_pernikahan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status_pernikahan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah_anak') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Anak</label>	
			  			<input type="number" name="jumlah_anak" class="form-control" value="{{ $karyawan->jumlah_anak }}"  readonly>
			  			@if ($errors->has('jumlah_anak'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_anak') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tunjangan_keluarga') ? ' has-error' : '' }}">
			  			<label class="control-label">Tunjangan Keluarga</label>	
			  			<input type="number" name="tunjangan_keluarga" class="form-control" value="{{ $karyawan->tunjangan_keluarga }}"  readonly>
			  			@if ($errors->has('tunjangan_keluarga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tunjangan_keluarga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<textarea name="alamat" class="form-control" id="alamat">{{ $karyawan->alamat }}</textarea>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nomor_telepon') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Telepon</label>	
			  			<input type="number" name="nomor_telepon" class="form-control" value="{{ $karyawan->nomor_telepon }}"  readonly>
			  			@if ($errors->has('nomor_telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomor_telepon') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('pendidikan_terakhir') ? ' has-error' : '' }}">
			  			<label class="control-label">Pendidikan Terakhir</label>	
			  			<input type="text" name="pendidikan_terakhir" class="form-control" value="{{ $karyawan->pendidikan_terakhir }}"  readonly>
			  			@if ($errors->has('pendidikan_terakhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pendidikan_terakhir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kode_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jabatan</label>	
			  			<select name="kode_jabatan" class="form-control">
			  				@foreach($jabatan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedJabatan == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_jabatan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kode_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kode_cabang') ? ' has-error' : '' }}">
			  			<label class="control-label">Cabang</label>	
			  			<select name="kode_cabang" class="form-control">
			  				@foreach($cabang as $data)
			  				<option value="{{ $data->id }}" {{ $selectedCabang == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_cabang }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kode_cabang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_cabang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kode_departemen') ? ' has-error' : '' }}">
			  			<label class="control-label">Departemen</label>	
			  			<select name="kode_departemen" class="form-control">
			  				@foreach($departemen as $data)
			  				<option value="{{ $data->id }}" {{ $selectedDepartemen == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_departemen }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kode_departemen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_departemen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('gaji_pokok') ? ' has-error' : '' }}">
			  			<label class="control-label">Gaji Pokok</label>	
			  			<input type="number" name="gaji_pokok" class="form-control" value="{{ $karyawan->gaji_pokok }}"  readonly>
			  			@if ($errors->has('gaji_pokok'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gaji_pokok') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal_diangkat') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Diangkat</label>	
			  			<input type="date" name="tanggal_diangkat" class="form-control" value="{{ $karyawan->tanggal_diangkat }}"  readonly>
			  			@if ($errors->has('tanggal_diangkat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_diangkat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal_keluar') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Keluar</label>	
			  			<input type="date" name="tanggal_keluar" class="form-control" value="{{ $karyawan->tanggal_keluar }}"  readonly>
			  			@if ($errors->has('tanggal_keluar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_keluar') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_bank') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Bank</label>	
			  			<input type="text" name="nama_bank" class="form-control" value="{{ $karyawan->nama_bank }}"  readonly>
			  			@if ($errors->has('nama_bank'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_bank') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nomor_rekening') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Rekening</label>	
			  			<input type="number" name="nomor_rekening" class="form-control" value="{{ $karyawan->nomor_rekening }}"  readonly>
			  			@if ($errors->has('nomor_rekening'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomor_rekening') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('rekening_atas_nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Rekening Atas Nama</label>	
			  			<input type="text" name="rekening_atas_nama" class="form-control" value="{{ $karyawan->rekening_atas_nama }}"  readonly>
			  			@if ($errors->has('rekening_atas_nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rekening_atas_nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  </div>
			</div>	
		</div>
	</div>
</div> -->
<div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3">Profile Card</strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <img class="rounded-circle mx-auto d-block" src="{{ asset ('images/admin.jpg') }}" alt="Card image cap">
                    <br>
                    <!-- <h6 class="text-sm-center mt-2 mb-1">{{ $karyawan->nomor_induk }}</h6>
                    <hr>
                    <h6 class="text-sm-center mt-2 mb-1">{{ $karyawan->nama }}</h6> -->
                    <center>
                    <table border="0">
					<tbody>
					<hr>
					<tr>
					<td>Nomor Induk</td>
					<td>&nbsp;:&nbsp;</td>
					<td>{{ $karyawan->nomor_induk }}</td>
					</tr>
					<tr>
					<td>Nama</td>
					<td >&nbsp;:&nbsp;</td>
					<td>{{ $karyawan->nama}}</td>
					</tr>
					<tr>
					<td>Tempat Lahir</td>
					<td>&nbsp;:&nbsp;</td>
					<td>{{ $karyawan->tempat_lahir}}</td>
					</tr>
					<tr>
					<td>Tanggal Lahir</td>
					<td>&nbsp;:&nbsp;</td>
					<td>{{ $karyawan->tanggal_lahir}}</td>
					</tr>
					<tr>
					<td>Jabatan</td>
					<td>&nbsp;:&nbsp;</td>
					@foreach($jabatan as $data)
					<td>{{ $data->nama_jabatan}}</td>
					@endforeach
					</tr>
					<tr>
					<td>Cabang</td>
					<td>&nbsp;:&nbsp;</td>
					@foreach($cabang as $data)
					<td>{{ $data->nama_cabang}}</td>
					@endforeach
					</tr>
					<tr>
					<td>Departemen</td>
					<td>&nbsp;:&nbsp;</td>
					@foreach($departemen as $data)
					<td>{{ $data->nama_departemen}}</td>
					@endforeach
					</tr>
					</tbody>
					</table>
				</center>
                </div>
                <hr>
                <div class="card-text text-sm-center">
                    <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                    <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                    <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                    <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-6">
                        <div class="card" style="width: 685px">
                            <div class="card-header">
                                <strong class="card-title">Profle Pribadi</strong>
                            </div>
                           <div class="card-body card-block">
                           	<div class="form-group">
                                    <label class=" form-control-label">Nomor Induk</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-barcode"></i></div>
                                        <input class="form-control" value="{{ $karyawan->nomor_induk}}" readonly>
                                    </div>
                                    
                                </div>
                           		<div class="form-group">
                                    <label class=" form-control-label">Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control" value="{{ $karyawan->nama}}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tempat Lahir</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                        <input class="form-control" value="{{ $karyawan->tempat_lahir}}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Lahir</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control" value="{{ $karyawan->tanggal_lahir }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jenis Kelamin</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-dot-circle-o"></i></div>
                                        <input class="form-control" value="{{ $karyawan->jenis_kelamin }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Agama</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-heart"></i></div>
                                        <input class="form-control" value="{{ $karyawan->agama }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Status Pernikahan</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-coffee"></i></div>
                                        <input class="form-control" value="{{ $karyawan->status_pernikahan }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jumlah Anak</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-smile-o"></i></div>
                                        <input class="form-control" value="{{ $karyawan->jumlah_anak }} Anak" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tunjangan Keluarga</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                        <input class="form-control" value="Rp.{{ $karyawan->tunjangan_keluarga }},-" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Alamat</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-location-arrow"></i></div>
                                        <input class="form-control" value="{{ $karyawan->alamat }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nomor Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" value="{{ $karyawan->nomor_telepon }}" readonly>
                                    </div>
                                        
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Pendidikan Terakhir</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-trophy"></i></div>
                                        <input class="form-control" value="{{ $karyawan->pendidikan_terakhir }}" readonly>
                                    </div>
                                        
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Gaji Pokok</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                        <input class="form-control" value="Rp.{{ $karyawan->gaji_pokok }},-" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Bank</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-bold"></i></div>
                                        <input class="form-control" value="{{ $karyawan->nama_bank }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nomor Rekening</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                        <input class="form-control" value="{{ $karyawan->nomor_rekening }}" readonly>
                                    </div>
                                    
                                </div>
                                    
                                <div class="form-group">
                                    <label class=" form-control-label">Rekening Atas Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input class="form-control" value="{{ $karyawan->rekening_atas_nama }}" readonly>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                </div>

@endsection