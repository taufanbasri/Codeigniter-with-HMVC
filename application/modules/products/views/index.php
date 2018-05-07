<div class="x_panel">
    <div class="x_title">
	    <h2><button type="button" class="add btn btn-primary"><i class="fa fa-plus-square"></i> Tambah Data </button></h2>
		<div class="clearfix"></div>
	</div>
	<table class="table table-striped table-responsive" id="datatables">
		<thead>
		    <tr>
		        <th>Nomor</th>
		        <th>Kode Produk</th>
		        <th>Nama Produk</th>
		        <th>Action</th>
		    </tr>
		</thead>
		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($datatables->result() as $row): ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $row->code; ?></td>
					<td><?php echo $row->name; ?></td>
					<td>
						<button type="button" class="btn btn-primary btn-xs" onclick="edit(<?= $row->id ?>)"><i class="fa fa-edit"></i></button>
						<button type="button" class="btn btn-primary btn-xs" onclick="del(<?= $row->id ?>)"><i class="fa fa-trash"></i></button>
					</td>
				</tr>
				<?php $no++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<div class="modal fade bs-example-modal-lg" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" style="width:500px;">
		<div class="modal-content">

			<div class="modal-header" style="background:cyan;">
				<h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
            </div>
			<div class="modal-body">
				<form class="form-horizontal form-label-left" id="form" name="form">
					<div class="form-group">
	                  <label class="control-label col-sm-3 col-sm-3 col-xs-12">Kode Produk</label>
	                  <div class="col-md-9 col-sm-9 col-xs-12">
	                    <input type="text" class="form-control" id="code" name="code" placeholder="Kode Produk" />
	                  </div>
	                </div>

					<div class="form-group">
	                  <label class="control-label col-sm-3 col-sm-3 col-xs-12">Nama Produk</label>
	                  <div class="col-md-9 col-sm-9 col-xs-12">
	                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Produk" />
	                  </div>
	                </div>
				</form>
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="save">Simpan</button>
            </div>
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-lg" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:500px;">
        <div class="modal-content">

            <div class="modal-header" style="background:cyan;">
                <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
            </div>
            <div class="modal-body">
            <form class="form-horizontal form-label-left" id="form" name="form">

                    <div class="form-group">
                      <label class="control-label col-sm-3 col-sm-3 col-xs-12">Kode Produk</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="kode produk" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3 col-sm-3 col-xs-12">Nama Produk</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama produk" />
                      </div>
                    </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="save">Simpan</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:500px;">
        <div class="modal-content">

            <div class="modal-header" style="background:cyan;">
                <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
            </div>
            <div class="modal-body">
            <form class="form-horizontal form-label-left" id="form2" name="form2">

                <div class="form-group">
                  <label class="control-label col-sm-3 col-sm-3 col-xs-12">Kode Produk</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="hidden" class="form-control" id="id_edit" name="id_edit" />
                    <input type="text" class="form-control" id="code_edit" name="code_edit" placeholder="Kode Produk" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3 col-sm-3 col-xs-12">Nama Produk</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" id="name_edit" name="name_edit" placeholder="Nama Produk" />
                  </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="update">Simpan</button>
            </div>
        </div>
    </div>
</div>
