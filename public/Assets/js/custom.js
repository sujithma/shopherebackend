$(function(){
		
		

	// $( ".saleDate" ).datepicker({
 //            changeMonth: true,
 //            changeYear: true
 //        });
	$("body").on("click", ".navar-sub", function(){
		$(this).addClass('nav navbar-nav').removeClass('navar-sub');
		$(this).parent().parent().find('.nav navbar-nav').addClass('navar-sub').removeClass('nav navbar-nav');
		console.log($(this).parent());
	});




	// Sale functions statr


	$(".viewAddSale").hide();
	$('.addSaleSlide').click(function(){
		console.log("ahdsv");
		$(".allSale").hide();
		$(".viewAddSale").show();
	});
	$('.allSaleSlide').click(function(){
		console.log("ahdsv");
		$(".viewAddSale").hide();
		$(".allSale").show();
		
	});
	

	

	$('.deleteSale').click(function(){

	
		var $el = $(this);
		if(confirm("Are you sure you want to delete this ?")) {
			var id = $(this).attr('data-id');
			
			$.ajax({
				url : '/deleteSale',
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

	$("body").on("click", ".editSaleButton", function(){
		
		var id = $(this).attr('data-id');
		$.ajax({
			url : '/getSaleDetail',
			data : {id : id, _token : token},
			datatype : 'JSON',
			method : 'POST',
			success : function(response){
				console.log(response);
				$(".editSale").modal('show');
				$('#editdate').val(response.date);				
				$('#editquantity').val(response.quantity);				
				$('#edittotal').val(response.total_price);
				$('#editunit').val(response.unit_price);
				$('.editSaleSubmit').attr('data-sale-id', response.id);			
			}
		})
	});





// save the datas into the table and change the values in the table

	$("body").on("click", ".editSaleSubmit", function(){

		var id = $(this).attr('data-sale-id');
		var productId=$("#editproduct option:selected");
		//find('option:selected');
		var date = $("#editdate").val();
		var quantity=$("#editquantity").val();
		var totalPrice=$("#edittotal").val();
		var unitPrice=$("#editunit");
		console.log(unitPrice);

		// 	$.ajax({
		// 		url : '/edit-sale',
		// 		data :{id :id, productId : productId, date : date, quantity : quantity, totalPrice : totalPrice, unitPrice : unitPrice , _token : token},
		// 		datatype : 'JSON',
		// 		method : 'POST',
		// 		success : function(response){
		// 			console.log(response);
		// 			if(response.is_approved == 1) {

		// 				var todoRowHtml = '';
		// 				todoRowHtml += '<tr class="todoData">';
		// 				todoRowHtml += '<td>'+response.title+'</td>';
		// 				todoRowHtml += '<td>'+response.description+'</td>';
		// 				todoRowHtml += '<td>'+response.sheduled_date.date+'</td>';
		// 				todoRowHtml += '<td><span class="completeDate"> Not completed</span></td>';
		// 				todoRowHtml += '<td><input type="checkbox" false class="checkComplete" data-id='+response.id+'><span class="complete">  Not completed</span></td>';
		// 				todoRowHtml += "<td><a class=\"btn btn-block btn-info viewtodo\" data-id="+response.id+">View</a></td>";
		// 				todoRowHtml += '<td><a class=\"btn btn-block btn-info showComment\" data-id='+response.id+'>Comments</a></td>';
		// 				todoRowHtml += '<td><a class=\"btn btn-block btn-info deleteTodo\" data-id='+response.id+'>delete</a></td>';
		// 				todoRowHtml += '</tr>';
		// 				$('#todolist tr:last').after(todoRowHtml);
		// 			}
		// 			$(".newTodo").modal('hide');
		// 		}
		// 	});
		// return false;
	});

	// Sale functions end

	// Product functions start

	$(".viewAddProduct").hide();

	$('.addProductSlide').click(function(){		
		$(".allProduct").hide();
		$(".viewAddProduct").show();
	});

	$('.allProductSlide').click(function(){		
		$(".viewAddProduct").hide();
		$(".allProduct").show();
		
	});
	$('.addproduct').click(function(){
		var name = $('.productName').val();
		var quantity = $('.productQuantity').val();
	});
});