<div class="container">
<div class="card">
<div class="card-header text-center">
<h4>Edit Petugas</h4>
</div>
<div class="card-body">
<a href="<?php echo base_url().'petugas/anggota' ?>" class='btn btn-sm btnlight btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
<br/>
<br/>
<?php foreach($anggota as $p){ ?>
<form method="post" action="<?php echo base_url().'petugas/anggota_update';
?>">
<div class="form-group">
<label class="font-weight-bold" for="nama">Nama Lengkap</label>
<input type="hidden" value="<?php echo $p->id; ?>" name="id">
<input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required="required" value="<?php echo $p->nama;
?>">
</div>
<div class="form-group">
<label class="font-weight-bold" for="username">NIK</label>
<input type="number" class="form-control" name="nik" placeholder="Masukkan Nik" required="required" value="<?php echo $p->nik;
?>">
</div>
<div class="form-group">
<label class="font-weight-bold" for="password">Alamat</label>
<textarea type="text" class="form-control" name="alamat"
placeholder="Masukkan alamat" required="required"></textarea>

</div>
<input type="submit" class="btn btn-primary" value="Simpan">
</form>
<?php } ?>
</div>
</div>
</div>