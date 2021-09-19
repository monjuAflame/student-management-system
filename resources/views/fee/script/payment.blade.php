<script type="text/javascript">
	
	var n = $('#disabled').val();
	
	$('.create-fee').on('click', function(e){
		$('#createFeePopup').modal('show');
	})
	
	//======================
	$('#frmFee').on('submit', function(e){
		e.preventDefault();
		enableFormElement(this);
		var data = $(this).serialize();
		var url = $(this).attr('action');
		$.post(url,data,function(data){
			location.reload();
		})
	})
	//==============
	function enableFormElement(frmName){
		$.each($(frmName).find('input,select'), function(i,element){
			$(element).attr('disabled',false);
		})
	}
	
	//=============
	$('.btn-paid').on('click', function (e){
		e.preventDefault();
		s_fee_id = $(this).data('id-paid');
		balance = $(this).val();
		//alert( s_fee_id +","+ balance);
		$.get("{{ route('pay') }}",{s_fee_id:s_fee_id},function(data){
			
			$('#Paid').attr('id','Pay');
			$('#s_fee_id').val(data.s_fee_id);
			$('#program_id').val(data.program_id);
			$('#Level_Id').val(data.level_id);
			$('#level_id').val(data.level_id);
			$('#Fee').val(data.school_fee);
			$('#fee_id').val(data.fee_id);
			$('#Amount').val(data.student_amount);
			$('#Discount').val(data.discount);
			$('#Pay').val(balance);
			$('#Pay').focus();
			$('#Pay').select();
			$('#b').val(balance);
			
		})
	})

	//======================
	function disabled_input(){
		$.each($('body').find('.d'), function(i,iteam){

			$(iteam).attr('disabled',true).css({'background':'#f5f5f5',
												'border':'1px solid #ccc'});
			$(iteam).attr('readonly',false);

		})
	}
	$(document).ready(function(){
		if (n==0) {
			disabled_input();
		}
	})
















</script>