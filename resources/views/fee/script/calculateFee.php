<script type="text/javascript">
	

$(document).on("change keyup", "#Amount", function(){

	

	var fee = $('#Fee').val();
	var amt = $('#Amount').val();
	var paid = $('#Paid').val($('#Amount').val());
	var dis = 0;

	if (paid != '' && amt != '') {
		paid = parseFloat($('#Amount').val())
		var dis = ((( parseFloat(fee) - parseFloat(paid)) * 100) / fee);
		$('#Lak').val(parseFloat(amt) - parseFloat(paid));
	}
	if (amt!='' && paid!='') {
		$('#Paid').val();
		$('#Discount').val();
	}
	if (parseFloat(amt) > parseFloat(fee)) {
		$('#Discount').css("color",'red');
	} else{
		$('#Discount').css("color",'black');
	}
	$('#Discount').val(parseInt(dis));

});

//====================================================

$(document).on("change keyup", "#Discount", function(){

	

	var fee = parseFloat($('#fee').val());
	var dis = 0;
	dis = ((fee * parseFloat($(this).val()))) / 100;
	var amt = fee - dis;
	
	$('#Paid').val(parseFloat(amt));
	$('#Amount').val(parseInt(amt));

});

//=======================================


$(document).on("change keyup", "#Paid", function(){

	

	b = $('#Amount').val();
	var pay = $('#Paid').val();
	if (pay=='') {$('#Lak').val(0)}
	if (pay!='') {
		paid = parseFloat($('#Paid').val());
	}

	if (pay!='' && b!='') {
		var lak = parseFloat(b) - parseFloat(paid)
		$('#Lak').val(parseFloat(lak));
	}
	if ($('#Lak').val()<0) {
		$('#Lak').css("color",'red');
	} else{
		$('#Lak').css("color",'black');
	}

});
//=======================================


$(document).on("change keyup", "#Pay", function(){



	b = $('#b').val();

	var pay = $('#Pay').val();

	if (pay=='') {$('#Lak').val(0)}

	if (pay!='') {
		paid = parseFloat($('#Pay').val());
	}

	if (pay!='' && b!='') {
		var lak = parseFloat(b) - parseFloat(paid)
		$('#Lak').val(parseFloat(lak));
	}
	if ($('#Lak').val()<0) {
		$('#Lak').css("color",'red');
	} else{
		$('#Lak').css("color",'black');
	}

});





























</script>