@extends('layouts.master')
@section('content')


<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>{{$title}}</h2>
      <ul class="nav navbar-right panel_toolbox">

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
            <?php 
            foreach ($rows_kriteria as $row) {
              $KRITERIA[$row->id_kriteria]['kode']=$row->kode_kriteria;
              $KRITERIA[$row->id_kriteria]['nama']=$row->nama_kriteria;
            }

            foreach ($rows_alternatif as $row) {
              $ALTERNATIF[$row->id_alternatif]['kode']=$row->kode_alternatif;
              $ALTERNATIF[$row->id_alternatif]['nama']=$row->nama_alternatif;
            }


            foreach ($rows_data as $row) {
              $rows_data[$row->id_alternatif][$row->id_kriteria]=$row->nilai;
            }



            ?>
            <table class="table table-striped table-bordered" style="width:100%">
             <thead>
              <tr>
                <th>Nama Alternatif</th>
                @foreach($rows_kriteria as $row)
                <th>{{$row->nama_kriteria}}</th>
                @endforeach
                <th>Aksi</th>
              </tr>
            </thead>
           <tbody>
              @foreach($rows_data as $key => $value)
              <tr>
                 <th>{{$ALTERNATIF[$key]['nama']}}</th>
                @foreach($value as $k => $v)
                <td>{{$v}}</td>
                @endforeach
                <td>
                  <a href="/relasi_ubah/{{$key}}" class="btn btn-warning btn-sm">Ubah</a>
                </td>
              </tr>
              @endforeach
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection