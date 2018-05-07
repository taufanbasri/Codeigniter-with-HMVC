<script type="text/javascript">
	$(document).ready(function() {
		$('#datatables').dataTable();

		$('.add').click(function(){
			$('#addModal').modal('show');
			$('#form')[0].reset();
		});

		$('#save').click(function(){
			$.ajax({
				url :"<?php echo site_url();?>products/store",
				type:"post",
				data:$("#form").serialize(),
				success:function(){
					$('#addModal').modal('hide');
					location.reload();
				}
			})
		});

		$('#update').click(function () {
			$.ajax({
				url: "<?= site_url(); ?>products/update",
				type: "post",
				data: $('#form2').serialize(),
				success: function () {
					$('#editModal').modal('hide');
					location.reload();
				}
			})
		})
	});

	function edit(id) {
		$.getJSON('<?= site_url(); ?>products/edit/' + id, function (response) {
			$('#editModal').modal('show');
			$('#id_edit').val(response['id']);
			$('#code_edit').val(response['code']);
			$('#name_edit').val(response['name']);
		})
	}

	function del(id) {
		if (confirm('Yakin menghapus data?')) {
			$.ajax({
				url: "<?= site_url(); ?>products/delete/" +id,
				type: 'post',
				success: function () {
					location.reload();
				}
			})
		}
	}

</script>
