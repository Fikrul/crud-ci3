<?php
	defined('BASEPATH') OR exit('Akses langsung tidak diperbolehkan');
	//echo validation_errors();
?>

<section class="container-fluid">
	<div class="row">
		<div class="form-input clearfix">
			<div class="col-md-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Karyawan</div>
					<div class="panel-body">
						<!-- <form action="<?php //echo base_url('home/tambahmobil'); ?>" method="post" class="form-horizontal"> -->
						
						<?php echo form_open('home/updatekaryawan/'.$db->id_kar, ['class' => 'form-horizontal', 'method' => 'post']); ?>
							<div class="form-group <?php echo (form_error('id_kar') != '') ? 'has-error has-feedback' : '' ?>">
								<label for="id_kar" class="control-label col-sm-2">NIP Karyawan </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="id_kar" value="<?php echo set_value('id_kar', $db->id_kar); ?>" readonly>
									<?php echo (form_error('id_kar') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
									<?php echo form_error('id_kar'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_kar" class="control-label col-sm-2">Nama </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="nama_kar" value="<?php echo set_value('nama_kar', $db->nama_kar); ?>">
									<?php echo form_error('nama_kar'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="lahir" class="control-label col-sm-2">Tanggal Lahir </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="lahir" value="<?php echo set_value('lahir', $db->lahir); ?>">
									<?php echo form_error('lahir'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan_kar" class="control-label col-sm-2">Jabatan </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="jabatan_kar" value="<?php echo set_value('jabatan_kar', $db->jabatan_kar); ?>">
									<?php echo form_error('jabatan_kar'); ?>
								</div>
							</div>

							<!--<div class="form-group">
								<label for="gender" class="control-label col-sm-2">No. Polisi </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="gender" value="<?php echo set_value('gender', $db->gender); ?>">
									<?php echo form_error('gender'); ?>
								</div>
							</div>-->

							<div class="form-group">
								<label for="gender" class="control-label col-sm-2">Jenis Kelamin: </label>
								<div class="col-sm-10">
							 		<select value="<?php echo set_value('gender', $db->gender); ?>" name="gender" class="form-control">
									    <option value="">Pilih Salah Satu</option>
									    <option value="Laki-laki">Laki-laki</option>
									    <option value="Perempuan">Perempuan</option>
									</select>	
								</div>
							</div>

							<div class="form-group">
								<div class="btn-form col-sm-12">
									<a href="<?php echo base_url('home/lihatdata'); ?>"><button type="button" class='btn btn-default'>Batal</button></a>
									<button type="submit" class='btn btn-primary'>Simpan</button>
								</div>
							</div>
						<?php echo form_close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>