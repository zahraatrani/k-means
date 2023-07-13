{{-- @extends('layouts.master')
@section('content')

<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{$title}}</h2>
				<ul class="nav navbar-right panel_toolbox">

				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/barang/update/{{$id_alternatif}}" method="post" enctype="multipart/form-data">
					{{csrf_field() }}

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="n_toko">Kode Barang <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" required="required" class="form-control " name="kode" value="{{ $find->kode_alternatif }}">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="n_toko">Nama Barang <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" required="required" class="form-control " name="nama" value="{{ $find->nama_alternatif }}">
						</div>
					</div>


					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<a class="btn btn-primary" href="/barang">Cancel</a>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection --}}


{{-- 
@extends('layouts.master')
@section('content')

<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{$title}}</h2>
				<ul class="nav navbar-right panel_toolbox">

				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/barang/store" method="POST" enctype="multipart/form-data">
					{{csrf_field() }}

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="n_toko">Kode Barang <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">e
							<input type="text" required="required" class="form-control " name="kode_alternatif"value="{{ $find->kode_alternatif}}">>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="n_toko">Nama Barang <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" required="required" class="form-control " name="nama_alternatif" value="{{ $find->nama_alternatif }}">>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="n_toko">Stock<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" required="required" class="form-control " name="stock"value="{{ $find->stock}}">>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="n_toko">satuan<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" required="required" class="form-control " name="satuan" value="{{ $find->satuan }}">>
						</div>
					</div>


					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<a class="btn btn-primary" href="/barang">Cancel</a>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection --}}