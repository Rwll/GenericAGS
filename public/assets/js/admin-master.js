$(document).ready(function(){
	$('.recipient').click(function(){
		$(this).remove();
	});
	$('#adduniversitybtn').click(function(){
		$('#viewuniversities').slideUp(function(){
			$('#adduniversity').slideDown();
		});
	});
	$('.backtouniversities').click(function(){
		$('#adduniversity').slideUp(function(){
			$('#viewuniversity').slideUp(function(){
				$('#viewuniversities').slideDown();
			});
		});
	});
	$('.universityeditbtn').click(function(){
		$('#viewuniversities').slideUp(function(){
			$('#viewuniversity').slideDown();
		});
		id = $(this).val();
		$.get("http://localhost/GenericsATS/public/api/university/"+id
			,function(data){
				name = data['data']['name'];
				abb  = data['data']['abbreviation'];
				email = data['data']['email'];
				address = data['data']['address'];
				website = data['data']['website'];
				contact = data['data']['contact'];
				description = data['data']['description'];

				$('#edit_univ_save').val(id);
				$('#edit_univ_name').val(name);
				$('#edit_univ_abb').val(abb);
				$('#edit_univ_email').val(email);
				$('#edit_univ_contact').val(contact);
				$('#edit_univ_website').val(website);
				$('#edit_univ_address').val(address);
				$('#edit_univ_desc').val(description);

				console.log(data['data']);
		},'json');
	});
	$('#edit_univ_save').click(function(){
		$.post("http://localhost/GenericsATS/public/api/admin/university/update"
			,{
				id: $(this).val(),
				name: $('#edit_univ_name').val(),
				abbreviation: $('#edit_univ_abb').val(),
				email: $('#edit_univ_email').val(),
				contact: $('#edit_univ_contact').val(),
				website: $('#edit_univ_website').val(),
				address: $('#edit_univ_address').val(),
				description: $('#edit_univ_desc').val()
			},function(data){
				console.log(data);
			}
		);
	});
});