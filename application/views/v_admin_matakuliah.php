  <div class="content-wrapper ">
    <section class="content-header">
      <h1>
        Input Matakuliah
      </h1>
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">
						<a class="btn-sm btn-primary" href="<?php echo base_url("admin/matakuliah_tambah");?>"><i class="fa fa-plus"></i> <span>Tambah</span></a>
					</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example2" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th width="40px">No</th>
					  <th>Nama Matakuliah</th>
					  <th width="120px">Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach($tbl_admin_matakuliah as $data){
						  echo "<tr>
						  <td>".$no."</td>
						  <td>".$data->matakuliah_nama."</td>
						  <td>
						  <a class='btn-sm btn-warning' href='".base_url("admin/matakuliah_ubah/".$data->matakuliah_id)."'>Ubah</a>
						  <a onclick=\"return confirm('Yakin untuk dihapus?')\" class='btn-sm btn-danger' href='".base_url("admin/matakuliah_aksi_hapus/".$data->matakuliah_id)."'>Hapus</a></td>
						  </tr>";
						  $no++;
					}
					?>
					</tbody>
				  </table>
				</div>
				<!-- /.box-body -->
			  </div>
		</div>
      </div>
    </section>
	
	<section class="content-header">
      <h1>
        Daftar Kelas Mahasiswa
      </h1>
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">
						<a class="btn-sm btn-primary" href="<?php echo base_url("admin/matakuliah_users_tambah");?>"><i class="fa fa-plus"></i> <span>Tambah</span></a>
					</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th width="40px">No</th>
					  <th>NIM</th>
					  <th>Nama Mahasiswa</th>
					  <th>Nama Matakuliah</th>
					  <th width="120px">Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach($tbl_admin_matakuliah_users as $data){
						  echo "<tr>
						  <td>".$no."</td>
						  <td>".$data->user_name."</td>
						  <td>".$data->user_fullname."</td>
						  <td>".$data->matakuliah_nama."</td>
						  <td>
						  <a class='btn-sm btn-warning' href='".base_url("admin/matakuliah_users_ubah/".$data->matakuliah_users_id)."'>Ubah</a>
						  <a onclick=\"return confirm('Yakin untuk dihapus?')\" class='btn-sm btn-danger' href='".base_url("admin/matakuliah_users_aksi_hapus/".$data->matakuliah_users_id)."'>Hapus</a></td>
						  </tr>";
						  $no++;
					}
					?>
					</tbody>
				  </table>
				</div>
				<!-- /.box-body -->
			  </div>
		</div>
      </div>
    </section>
  </div>