jQuery(function($){
	
	
	var bag = {
		"materialType" : function(){
				var materialTotal = 0;
			  $.each($('.material_type'), function(key,val){
			  	materialTotal = materialTotal + ($(this).val() ? parseInt($(this).val()) : 0) ;
			  });
		    $('.material_type_total').html(materialTotal);
		},
		
		"bagType" : function(){
			  bage_type_total = 0;
				$.each($('.bag_type'), function(key,val){
			  	bage_type_total = bage_type_total + ($(this).val() ? parseInt($(this).val()) : 0) ;
			  });
		    $('.bag_type_total').html(bage_type_total);
		},
		"qualityCut" : function(){
			  var total = 0;
				bags = $('#qc_no_of_bags').val() ? parseInt($('#qc_no_of_bags').val()) : 0;
				qty = $('#qc_quantity').val() ? parseInt($('#qc_quantity').val()) : 0;
				total = bags * qty;
		    $('#qc_total').html(total);
		}

	};
	
	$(".material_type").keyup(function() {
		bag.materialType();
	});

	$(".bag_type").keyup(function() {
		bag.bagType();
	});

 $(".quality_cut").keyup(function() {
		bag.qualityCut();
	});



});


