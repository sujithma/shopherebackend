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



	$('.delete').click(function(){
		var $el = $(this);
		if(confirm("Are you sure you want to delete this ?")) {
			var id = $(this).attr('data-id');
			var type = $(this).attr('type');
			$.ajax({
				url : '/delete',
				data : {id : id, type : type, _token : token},
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

	$("body").on("click", ".editButton", function(){
		
		var id = $(this).attr('data-id');
		var type = $(this).attr('type');
		$.ajax({
			url : '/getDetail',
			data : {id : id, _token : token, type : type},
			datatype : 'JSON',
			method : 'POST',
			success : function(response){
				if(type == "sale") {		
					$(".editSale").modal('show');
					$('#editdate').val(response.date);				
					$('#editquantity').val(response.quantity);				
					$('#edittotal').val(response.total_price);
					$('#editunit').val(response.unit_price);
					$('.editSaleSubmit').attr('data-sale-id', response.id);	
				}
				else {
					$(".editPurchase").modal('show');
					$('#editdate').val(response.date);				
					$('#editShop').val(response.purchased_shop);
					$('#editquantity').val(response.quantity);				
					$('#edittotal').val(response.total_price);
					$('#editunit').val(response.unit_price);
					$('.editPurchaseSubmit').attr('data-sale-id', response.id);	
				}		
			}
		})
	});

	// -------------Sale functions start------------

	$(".viewAddSale").hide();

	$('.addProductSlide').click(function(){		
		$(".allProduct").hide();
		$(".viewAddProduct").show();
	});
	
	$('.allSaleSlide').click(function(){	
		$(".viewAddSale").hide();
		$(".allSale").show();	
	});	


	$("body").on("click", ".editSaleSubmit", function(){

		var id = $(this).attr('data-sale-id');
		var productId=$("#editproduct option:selected");
		//find('option:selected');
		var date = $("#editdate").val();
		var quantity=$("#editquantity").val();
		var totalPrice=$("#edittotal").val();
		var unitPrice=$("#editunit");
		console.log(unitPrice);		
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
	
	$('.addSaleSubmit').click(function(){

		var productId=$("#saleproduct option:selected");
		//find('option:selected');
		var date = $("#saleDate").val();
		var quantity=$("#saleQuantity").val();
		var totalPrice=$("#saleTotal").val();
		var unitPrice=$("#saleUnit");
		console.log(productId);	
	});

	// --------Sale functions end----------

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

	

	// ----------Product functions end---------

	// Purchase functions start

	$(".AddPurchase").hide();

	$('.addPurchaseSlide').click(function(){		
		$(".allPurchase").hide();
		$(".AddPurchase").show();
	});

	$('.allPurchaseSlide').click(function(){		
		$(".AddPurchase").hide();
		$(".allPurchase").show();
		
	});

	$('.addPurchaseSubmit').click(function(){

		var productId=$("#Purchaseproduct option:selected");
		//find('option:selected');
		var date = $(".PurchaseDate").val();
		var shop = $(".PurchaseShop").val();
		var quantity=$(".PurchaseQuantity").val();
		var totalPrice=$(".PurchaseTotal").val();
		var unitPrice=$(".PurchaseUnit");
		console.log(productId);	
	});

	
	// --------------Purchase functions end---------------

	// Banking Functions Start 

	$('.addTransactionSubmit').click(function() {	
		var bankName=$(".bankName").val();
		var creditAmount=$(".creditAmount").val();
		var currentBalance=$(".currentBalance").val();
			$.ajax({
				url : '/add-transaction',
				data :{bankName : bankName, creditAmount : creditAmount, currentBalance : currentBalance, _token : token},
				datatype : 'JSON',
				method : 'POST',
				success : function(response){
					console.log(response);						
				}
		});		
	});



});