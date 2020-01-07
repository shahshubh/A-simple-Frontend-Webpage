$(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	var wrapper2   		= $(".input_fields_wrap2"); //Fields wrapper
	var add_button2     = $(".add_field_button2"); //Add button ID	
	var x = 1; //initlal text box count
	var x2=1;
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div><input type="text" name="product' + x + '" id="product' + x + '" ><a href="#" class="remove_field">Remove</a></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})


		$(add_button2).click(function(e){ //on add input button click
		e.preventDefault();
		if(x2 < max_fields){ //max input box allowed
			x2++; //text box increment
			$(wrapper2).append('<div><input type="text" name="quantity' + x2 + '" id="quantity' + x2 + '" ><a href="#" class="remove_field">Remove</a></div>'); //add input box
		}
	});
	
	$(wrapper2).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});