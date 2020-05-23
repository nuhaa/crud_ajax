
<form class="" action="#!" style="display:none" id="formAdd" method="post">
  <input type="hidden" name="_token" id="_token" value="<?= _token() ?>">
  <div class="card card-body">
    <div class="alert alert-danger" style="display:none" id="alert" role="alert"></div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" id="nama" placeholder="ex: codingae">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">NIK</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nik" id="nik" placeholder="ex: 1234567890123xxx (16 Digit)">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki_laki" checked>
          <label class="form-check-label">
            Laki-laki
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
          <label class="form-check-label">
            Perempuan
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Alamat</label>
      <div class="col-sm-10">
        <textarea name="alamat" rows="2" cols="20" class="form-control" placeholder="Isikan Alamat Pegawai"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <button type="button" name="button" class="btn btn-primary" id="simpan_pegawai">Simpan</button>
      </div>
    </div>
  </div>
</form>
