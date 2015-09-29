$(function(){


	$("body").on("click", ".productDelete", function(){

		var $el = $(this);
		if(confirm("Are you sure you want to delete this ?")) {
			var id = $(this).attr('data-id');			
			$.ajax({
				url : '/product/delete',
				data : {id : id, _token : token},
				datatype : 'JSON',
				method : 'POST',
				success : function(response){
					if(response == 1) {
						$el.parent().parent().remove();
					}
					else {
						console.log(response);
					}					
				}
			})	
		}
		else {
			return false;
		}
	});
});