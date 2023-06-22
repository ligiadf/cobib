// Fonte: https://medium.com/geekculture/link-your-html-form-to-a-spreadsheet-via-google-forms-9024f0611d82

function postToGoogle() {
	var field1 = $("#Email").val();

$.ajax({
	url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfMgJKFQZUaMzmgwk7deSVBDNjQww4ZCtSHn43vEyS7DMhErQ/formResponse",
	data: {
	  "entry.1679627202": field1
	},
	type: "POST",
	dataType: "html",
	success: function (d) {
	  $('#newsletter').trigger('reset');
	  alert('Enviado :)');
	},
	error: function (x, y, z) {
	  $('#newsletter').trigger('reset');
	  alert('Enviado :)');
	}
	});
	return false;
}