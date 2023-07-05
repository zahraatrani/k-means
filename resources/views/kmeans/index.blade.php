@extends('layouts.master')
@section('content')

<?php
$stop = false;
$centroid = array();
$groups = array();

$jumlah = 3;
$maksimum=200;

foreach ($rows_kriteria as $row) {
  $KRITERIA[$row->id_kriteria]['kode']=$row->kode_kriteria;
  $KRITERIA[$row->id_kriteria]['nama']=$row->nama_kriteria;
}

foreach ($rows_alternatif as $row) {
  $ALTERNATIF[$row->id_alternatif]['kode']=$row->kode_alternatif;
  $ALTERNATIF[$row->id_alternatif]['nama']=$row->nama_alternatif;
}

$no = 1;
$anggota_baru["1"]="Banyak Terjual";
$anggota_baru["2"]="Terjual";
$anggota_baru["3"]="Jarang Terjual";
foreach($rows_centroid as $row){
    $centroid[$anggota_baru[$no]]= $row->id_alternatif;
    $no++;
}

// print_r($centroid);
foreach ($rows_data as $row) {
  $data[$row->id_alternatif][$row->id_kriteria]=$row->nilai;
}

function get_pusat_centroid($centroid = array(), $data = array()){
    $arr = array();
    foreach($centroid as $key => $val){
        $arr[$key] = $data[$val];
    }
    return $arr;
}

function get_jarak($row_data, $row_pusat_centroid){
    $result = 0;
    foreach($row_data as $key => $val){
        $result += pow($val - $row_pusat_centroid[$key], 2);
    }
    return sqrt($result);
}

function get_jarak_centroid($pusat_centroid = array(), $data = array()){
    $arr = array();

    foreach($data as $key => $val){
        foreach($pusat_centroid as $k => $v){
            $arr[$key][$k] = get_jarak($data[$key], $pusat_centroid[$k]);
        }
    }
    return $arr;
}

function get_keanggotaan($jarak_centroid = array()){
    $arr = array();
    foreach($jarak_centroid as $key => $val){
        $arr_min = array_keys($val, min($val));  
        if(count($arr_min)>1)      
            $arr_min = array_reverse($arr_min);
        $arr[$key] = $arr_min[0];
    }
    return $arr;
}


function get_pusat_centroid_baru($data, $keanggotaan){
    $arr = array();
    foreach($data as $key => $val){
        foreach($val as $k => $v){
            $arr[$keanggotaan[$key]][$k][]= $v;    
        }        
    }
    $pembagi = count($data);
    $result = array();
    foreach($arr as $key => $val){
        foreach($val as $k => $v){
            $result[$key][$k] = array_sum($v) / count($v);    
        }
    }
    return $result;
}
$pusat_centroid = get_pusat_centroid($centroid, $data); 


?>
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>{{$title}}</h2>
      <ul class="nav navbar panel_toolbox">


      </ul>
      <div class="clearfix"></div>
  </div>
  <div class="x_content">
     <form class="form-inline">
        {{csrf_field() }}
        <div class="form-group">
            <div class="form-group">
              <input type="date" name="tanggal_awal" class="form-control"/>
          </div>
          <div class="form-group">
              <input type="date" name="tanggal_akhir" class="form-control"/>
          </div>
      </div>
      <div class="form-group" style="margin-left: 5px;">
        <button type="submit" class="btn btn-default btn-success">Proses</button>
    </div>
</form>
<?php if(!empty($_GET['tanggal_awal'])):?>
    <div id="hasil" class="panel panel-default">
        <h3>Hasil Perhitungan</h3>
        <div class="panel-body">        
            <h3>Histori Penjualan</h3>
            <table class="table table-striped table-bordered" style="width:100%">
             <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Qty</th>
              </tr>
          </thead>
          <?php $no=1; ?>

          @foreach ($rows_penjualan as $row)
          <tr>
            <td>{{$no++ }}</td>
            <td>{{ $row->tanggal }}</td>
            <td>{{ $row->kode_alternatif }}</td>
            <td>{{ $row->nama_alternatif }}</td>
            <td>{{ $row->qty }}</td>
      </tr>
      @endforeach
  </table>
  <div >                        
    <?php               
    $iterasi = 1;
    while(!$stop && $iterasi <= $maksimum):        
        $jarak_centroid = get_jarak_centroid($pusat_centroid, $data);     
        $keanggotaan = get_keanggotaan($jarak_centroid);                                                                                                             
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Iterasi <?=$iterasi?></h3>
            </div>
            <div class="panel-body">Pusat centroid</div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead><tr>
                        <th>Nama</th>
                        <?php                         
                        foreach($KRITERIA as $key => $val):?>
                            <th><?=$val['nama']?></th>
                        <?php endforeach?>
                    </tr></thead>
                    <?php foreach($pusat_centroid as $key => $val):?>
                        <tr>
                            <td><?=$key?></td>                            
                            <?php foreach($val as $k => $v):?>
                                <td><?=round($v, 4)?></td>
                            <?php endforeach?>
                        </tr>
                    <?php endforeach?>
                </table>
            </div>
            <div class="panel-body">Jarak Terhadap Pusat centroid</div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead><tr>
                        <th>Nama</th>
                        <?php                         
                        foreach($KRITERIA as $key => $val):?>
                            <th><?=$val['nama']?></th>
                        <?php endforeach?>
                        <?php foreach($pusat_centroid as $key => $val):?>
                            <th><?=$key?></th>
                        <?php endforeach?>
                        <th>Group</th>
                    </tr></thead>
                    <?php foreach($jarak_centroid as $key => $val):?>
                        <tr>
                            <td><?=$ALTERNATIF[$key]['kode']?></td>
                            <?php foreach($data[$key] as $k => $v):?>
                                <td><?=$v?></td>
                            <?php endforeach?>
                            <?php foreach($val as $k => $v):?>
                                <td><?=round($v, 4)?></td>
                            <?php endforeach?>
                            <td><?=$keanggotaan[$key]?></td>
                        </tr>                    
                    <?php endforeach?>
                </table>
            </div>

            <div class="panel-body">
                <?php
                if($iterasi==$maksimum && $groups != $keanggotaan){
                    $stop = true;
                    $ket = "Karena iterasi ($iterasi) sudah mencapai maksimum iterasi, maka iterasi dihentikan.";
                } else if($groups == $keanggotaan){
                    $stop = true; 
                    $ket = "Karena group baru (".implode(',', $keanggotaan).") = group sebelumnya (".implode(',', $groups)."), maka iterasi dihentikan.";   
                } else {
                    $iterasi++;
                    $ket = "Karena group baru (".implode(',', $keanggotaan).") <> group sebelumnya (".implode(',', $groups)."), maka iterasi dilanjutkan.";                    
                    $pusat_centroid = get_pusat_centroid_baru($data, $keanggotaan);                    
                    $groups = $keanggotaan;
                }                                    
                ?>
                <?=$ket?>
            </div>
        </div>
    <?php endwhile;
    $arr = array(); 
            // foreach($keanggotaan as $key => $val){
            //     $arr[$val]++;
            // }
            // $chart = array();
            // foreach($arr as $key => $val){
            //     $chart[] = array(
            //         'name' => $key,
            //         'y' => $val,
            //     );
            // }                
    ?>                
</div>                                       
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">    
        <thead><tr>
            <td>Kode</td>
            <td>Nama</td>
            <td>Cluster</td>
        </tr></thead>             
        <?php 

        foreach($ALTERNATIF as $key => $val):
        
        ?>    
            <tr>
                <td><?=$val['kode']?></td>
                <td><?=$val['nama']?></td> 
                <td><?=$keanggotaan[$key]?></td>                        
            </tr>
        <?php endforeach?>
    </table>
</div>
<div class="panel-body">

</div>
</div>

<?php endif;?>
</div>
</div>
</div>


@endsection