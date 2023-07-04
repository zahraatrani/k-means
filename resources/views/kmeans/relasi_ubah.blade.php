@extends('layouts.master')
@section('content')

<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{$title}}</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="dropdown-item" href="#">Settings 1</a>
							</li>
							<li><a class="dropdown-item" href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<?php 
				foreach ($rows_kriteria as $row) {
					$KRITERIA[$row->id_kriteria]['kode']=$row->kode_kriteria;
					$KRITERIA[$row->id_kriteria]['nama']=$row->nama_kriteria;
				}
				?>
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/relasi_ubah_simpan/{{$id_alternatif_kunci}}" method="post" enctype="multipart/form-data">
					{{csrf_field() }}

					@foreach($rows as $row)
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="n_toko">{{$KRITERIA[$row->id_kriteria]['nama']}} <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" required="required" class="form-control" name="{{$row->ID}}" value="{{$row->nilai}}">
						</div>
					</div>
					@endforeach


					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<a class="btn btn-primary" href="/k_rel_alternatif">Cancel</a>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection