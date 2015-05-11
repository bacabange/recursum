$(document).on("ready", function () {
	$(".btn-delete").on("click", function (e) {
		e.preventDefault();
		var row = $(this).parents('tr');
		var id = row.data('id');
		var form = $("#form-delete");
		var url = form.attr('action').replace(':USER_ID', id);
		var data = form.serialize();


		$.post(url, data, function (res) {
			row.fadeOut();
			alert(res.message);
		}).fail(function () {
			alert('Usuario no fue eliminado');
		})
	});
});