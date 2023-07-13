@extends('layouts.master')
@section('content')


<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>{{$title}}</h2>
      <ul class="nav navbar-right panel_toolbox">
         <li>
          <a href="/k_alternatif_tambah"  class="text-success"><i class=" fa fa-database "></i> Tambah Barang</a>
        </li>
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">

      <table id="historipelanggan" class="table table-striped table-bordered" style="width:100%">
       <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no=1; ?>

            @foreach ($rows as $row)
                <tr>
                    <td>{{$no++ }}</td>
                    <td>{{ $row->kode_alternatif }}</td>
                    <td>{{ $row->nama_alternatif }}</td>
                    <td>{{ $row->stock }}</td>
                    <td>{{ $row->satuan }}</td>
                    <td class="nw"> 
                      <a class="btn btn-xs btn-warning" href="/k_alternatif_ubah/{{$row->kode_alternatif}}"><span class="glyphicon glyphicon-edit"></span></a>

                        <a class="btn btn-xs btn-danger" href="/k_alternatif_hapus/=<?= $row->id_alternatif ?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection