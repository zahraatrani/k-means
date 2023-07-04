@extends('layouts.master')
@section('content')
@include('sweetalert::alert')
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>Data Alternatif Berhasil di Import dari data produk !</strong>
</div>
<a href="/k_alternatif">Kembali........</a>

@endsection