//Read
$(document).ready(function () {
	$('#trainAdd').click(function () {
		$('#trainForm')[0].reset();
		$('#trainTitle').text("Add Training Datas");
		$('#trainAction').val("Add");
		$('#trainOperation').val("Add");
		$('#resultForAdd').css('display', 'block');
	});

	//Add
	$(document).on('submit', '#trainForm', function (event) {
		event.preventDefault();
		$.ajax({
			url: "operation.php",
			type: "POST",
			data: new FormData(this),
			contentType: false,
			processData: false,
			success: function () {
				$('#trainForm')[0].reset();
				$('#trainModal').modal('hide');
				swal('Success!', '', 'success')
					.then(function () {
						window.location.reload();
					});
			}
		});
	});

	//Ambil Data
	$(document).on('click', '.update', function () {
		let id = $(this).attr("id");
		$.ajax({
			url: "fetch_single.php",
			type: "POST",
			data: {
				id: id
			},
			dataType: "json",
			success: function (data) {
				$('#resultForAdd').css('display', 'none');
				$('#trainForm')[0].reset();
				$('#trainModal').modal('show');
				$('#trainTitle').text("Update Data");

				$('#trainId').val(id);
				$('#fullName').val(data.fullname);

				for (i = 0; i <= data.length; i++) {
					$('#F' + i).val(data[i]);
				}

				$('#trainAction').val("Update");
				$('#trainOperation').val("Edit");
			}
		})
	});

	//Delete Data 
	$(document).on('click', '.delete', function () {
		let id = $(this).attr("id");
		swal({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancel',
				confirmButtonText: 'Yes, delete it!'
			})
			.then((result) => {
				if (result.value) {
					$.ajax({
						url: "delete.php",
						type: 'POST',
						data: {
							id: id
						},
						success: function () {
							Swal.fire(
									'Deleted!',
									'Your file has been deleted.',
									'success'
								)
								.then(function () {
									window.location.reload();
								})
						}
					})
				}
			});


	})


});