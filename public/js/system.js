$('#btnsubmit').on('click', function(){
	var objData = $("#formZD").find("select,textarea, input").serialize();
	console.log('success:', objData);
	$.ajax({
	   url: "/submit_inputs",
	   type: "POST",
	   data: objData,
	   success: function (data) {
		console.log('success:', data);
		if (data === 'OK') {
			console.log('OK');
			$('#formZD').submit();
		}
	   },
	   error: function (data) {
	     console.log('Error:', data);
	   }
	});
});