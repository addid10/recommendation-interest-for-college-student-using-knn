//Read
$(document).ready(function () {
	$('#featureAdd').click(function () {
		$('#featureForm')[0].reset();
		$('#featureTitle').text("Add Feature");
		$('#featureAction').val("Add");
		$('#featureOperation').val("Add");
	});

	var dataTable = $('#featureTable').DataTable({
		ajax: "data.json",
		"serverSide": true,
		"bLengthChange": false,
		"bFilter": true,
		"bInfo": false,
		"bAutoWidth": false,
		"order": [],

		"ajax": {
			url: "fetch.php",
			type: "POST"
		},
		"columnDefs": [{
			"targets": [0, 4, 5, 6],
			"orderable": false,
		}, ],
	});

	//Add & Update
	$(document).on('submit', '#featureForm', function (event) {
		event.preventDefault();
		$.ajax({
			url: "operation.php",
			type: "POST",
			data: new FormData(this),
			contentType: false,
			processData: false,
			success: function () {
				$('#featureForm')[0].reset();
				$('#featureModal').modal('hide');
				swal('Success!', '', 'success')
					.then(function () {
						dataTable.ajax.reload();
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
				$('#featureForm')[0].reset();
				$('#featureModal').modal('show');
				$('#featureTitle').text("Update Data");

				$('#featureId').val(id);
				$('#featureName').val(data.name);
				$('#variableName').val(data.variable);
				$('#categories').val(data.type);

				$('#featureAction').val("Update");
				$('#featureOperation').val("Edit");
			}
		})
	});

	// Option

	//Function
	function optionList(id) {
		$.ajax({
			url: "option.php",
			type: "POST",
			data: {
				id: id
			},
			dataType: "json",
			success: function (data) {
				$('#optionList').html(data);
				$('#optionFeatureId').val(id);
			}
		});
	}

	$(document).on('click', '.detail', function (e) {
		e.preventDefault();
		let id = $(this).attr("id");
		$('#optionModal').modal('show');

		//Call function
		optionList(id);
	});

	//Add Option
	$(document).on('submit', '#optionForm', function (e) {
		e.preventDefault();
		let id = $('#optionFeatureId').val();

		$.ajax({
			url: "option.add.php",
			type: "POST",
			data: new FormData(this),
			contentType: false,
			processData: false,
			success: function () {
				$('#optionForm')[0].reset();
				swal('Success!', '', 'success')
					.then(function () {
						optionList(id);
					});
			}
		})
	})

	//Delete Option
	$(document).on('click', '.delete-option', function (e) {
		e.preventDefault();
		let id = $(this).attr("id");
		let feature = $('#optionFeatureId').val();

		$.ajax({
			url: "option.delete.php",
			type: "POST",
			data: {
				id: id
			},
			success: function () {
				swal('Success!', '', 'success')
					.then(function () {
						optionList(feature);
					});
			}
		})
	})

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
									dataTable.ajax.reload();
								})
						}
					})
				}
			});


	})


});