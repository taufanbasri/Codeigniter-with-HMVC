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
			<?php foreach ($datatables->result() as $row): ?>
				<?php $no = 1; ?>
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
