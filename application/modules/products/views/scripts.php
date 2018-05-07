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
	});

</script>
