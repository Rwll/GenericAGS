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
	$(document).on('click', ".universityeditbtn", function(){
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
				$('#edit_univ_id').val(id);
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
	// $('#edit_univ_save').click(function(e){
	// 	$.post("http://localhost/GenericsATS/public/api/admin/university/update"
	// 		,
	// 		{
	// 			id: $(this).val(),
	// 			name: $('#edit_univ_name').val(),
	// 			abbreviation: $('#edit_univ_abb').val(),
	// 			email: $('#edit_univ_email').val(),
	// 			contact: $('#edit_univ_contact').val(),
	// 			website: $('#edit_univ_website').val(),
	// 			address: $('#edit_univ_address').val(),
	// 			description: $('#edit_univ_desc').val()
	// 		}
	// 		,function(data){
	// 			console.log(data);
	// 		}
	// 	);
	// 	e.preventDefault();
	// });
	$("#edit_univ_form").submit(function(e)
	{
	    var postData = $(this).serializeArray();
	    var formURL = $(this).attr("action");
	    $.ajax(
	    {
	        url : formURL,
	        type: "POST",
	        data : postData,
	        success:function(data, textStatus, jqXHR) 
	        {
	            console.log(data);
	        },
	        error: function(jqXHR, textStatus, errorThrown) 
	        {
	            //if fails      
	        }
	    });
	    e.preventDefault(); //STOP default action
	});
	$('#refreshuniversitiesbtn').click(function(){
		$.get("http://localhost/GenericsATS/public/api/admin/universities"
			,function(data,status){
				$("#universityListTableBody").html("");
				for(i=0;i<data["data"]["length"];i++){
					$("#universityListTableBody").append(''
						+'<tr>'
    					+	'<td>'+ data["data"][i]["id"] + '</td>'
    					+	'<td>'+ data["data"][i]["abbreviation"] + ' - ' 
    					+		data["data"][i]["name"] + '</td>'
    					+	'<td>'
    					+		'<button class="btn btn-default btn-xs '
    					+			'universityeditbtn"' 
    					+			'value="' + data["data"][i]["id"] + '">'
    					+			'<i class="fa fa-edit fa-fw"></i>'
    					+			 ' Edit '
    					+		'</button> '
    					+		((data["data"][i]["enabled"]==1)?
    							'<button class="btn btn-danger btn-xs ">'
    					+			'<i class="fa fa-ban fa-fw"></i>'
    					+			 ' Disable '
    					+		'</button> '
    							:
    							'<button class="btn btn-success btn-xs">'
    					+			'<i class="fa fa-check fa-fw"></i>'
    					+			 'Enable'
    					+		'</button> ')
    					+	'</td>'
    					+'</tr>'
					);
				}
			}
		);
	});
});