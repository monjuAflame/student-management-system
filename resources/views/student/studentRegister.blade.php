@extends('layouts.master')
@section('content')
<style type="text/css">
	.student-photo{
		height: 160px;
		padding-left: 3px;
		padding-right: 1px;
		border: 1px solid #ccc;
		background: #eee;
		width: 140px;
		margin: 0 auto;
	}
	.photo input {
		display: none;
	}
	.photo{
		width: 140px;
		height: 140px;
		border-radius: 100%;
	}
	.syudent-id{
		background-repeat: repeat-x;
		border-color: #ccc;
		padding: 5px;
		text-align: center;
		background: #eee;
		border-bottom: 1px solid #ccc;
	}
	.btn-browse{
		background-repeat: repeat-x;
		border-color: #ccc;
		padding: 5px;
		text-align: center;
		background: #eee;
		border-bottom: 1px solid #ccc;
	}
	fieldset{
		margin-top: 5px;

	}
	fieldset legend{
		display: block;width: 100%;
		padding: 0px;
		font-size: 15px;
		line-height: inherit;
		color: #797979;
		border: 0px;
		border-bottom: 1px solid #e5e5e5;
	}

</style>
{{-------------}}
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="icon_documents_alt"></i>Student Resgister</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{url('/')}}">Home</a></li>
            <li><i class="icon_documents_alt"></i>Student</li> 
            <li><i class="fa fa-pencil"></i>Create Student</li>                
        </ol>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">

    	<div class="panel-group" id="accordion" style="margin-bottom: 20px;">
    		<div class="panel panel-dafult">
    			<div class="panel-heading">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration: none;">Choice Academic</a>

					<a href="#" class="pull-right" id="view-class-info"><i class="fa fa-plus"></i></a>
    			</div>
    			<div class="panel-collapse collapse in" id="collapse1">
    				<div class="panel-body academic-detail"><p></p></div>
    			</div>
    		</div>
    	</div>

		<div class="panel panel-dafult">
			<div class="panel-heading">
				 <b><i class="fa fa-apple"></i>Student Information</b>
    		</div>
    		<div class="panel-body">
    			<form action="{{ route('postRegisterStudent') }}" method="POST" id="form-create-student" enctype= 'multipart/form-data'>
    			{{ csrf_field() }}
    				<input type="hidden" id="class_id" name="class_id">
    				<input type="hidden" id="user_id" name="user_id" value="{{ Auth::id() }}">
    				<input type="hidden" id="dateregistered" name="dateregistered" value="{{ date('Y-m-d') }}">
    				<div class="row">
    					<div class="col-md-9">
    						{{---------First Name-----------}}
						<div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="firstname">
										First Name
									</label>
									<input type="text" name="first_name" id="first_name" class="form-control" required>
								</div>
							</div>
						{{---------Last Name-----------}}

						<div class="col-md-4">
							<div class="form-group">
								<label for="lastname">
									Last Name
								</label>
								<input type="text" name="last_name" id="last_name" class="form-control" required>
							</div>
						</div>

						{{---------Status Name-----------}}

						<div class="col-md-4">
							<div class="form-group">
								<fieldset>
									<legent>Sex</legent>
									<table style="width: 100%; margin-top: 14px">
										<tr style="border-bottom: 1px solid #ccc;">
											<td>
												<label>
													<input type="radio" name="sex" id="sex" value="0" required>Male
												</label>
											</td>
											<td>
												<label>
													<input type="radio" name="sex" id="sex" value="1" required>Female
												</label>
											</td>
										</tr>
									</table>
								</fieldset>
							</div>
						</div>

						{{---------DOB-----------}}
					    <div class="col-md-4">
							<div class="form-group">
								<label for="dob">
									Date of Birth
								</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calender studentdob"></i>
									</div>
									<input type="text" name="dob" id="dob" placeholder="yyyy-mm-dd" class="form-control" required>
								</div>
							</div>
						</div>

						{{---------National Card-----------}}
						 <div class="col-md-4">
							<div class="form-group">
								<label for="national_card">
									National Card
								</label>
									<input type="text" name="national_card" id="national_card" class="form-control">
							</div>
						</div>






						{{--------Address-----------}}

						<div class="col-md-4">
							<div class="form-group">
								<fieldset>
									<legent>Status</legent>
									<table style="width: 100%; margin-top: 14px">
										<tr style="border-bottom: 1px solid #ccc;">
											<td>
												<label>
													<input type="radio" name="status" id="status" value="0" required checked>Single
												</label>
											</td>
											<td>
												<label>
													<input type="radio" name="Status" id="Status" value="1" required>Married
												</label>
											</td>
										</tr>
									</table>
								</fieldset>
							</div>
						</div>
						{{---------Nationality-----------}}
						 <div class="col-md-4">
							<div class="form-group">
								<label for="nationality">
									Nationality
								</label>
									<input type="text" name="nationality" id="nationality" class="form-control">
							</div>
						</div>
						{{---------Rac-----------}}
						 <div class="col-md-4">
							<div class="form-group">
								<label for="rac">
									Rac
								</label>
									<input type="text" name="rac" id="rac" class="form-control">
							</div>
						</div>
						{{---------Passport-----------}}
						 <div class="col-md-4">
							<div class="form-group">
								<label for="passport">
									Passport
								</label>
									<input type="text" name="passport" id="" class="form-control">
							</div>
						</div>
						{{---------Phone-----------}}
						 <div class="col-md-4">
							<div class="form-group">
								<label for="phone">
									Phone
								</label>
									<input type="text" name="phone" id="phone" class="form-control">
							</div>
						</div>
						{{---------Email-----------}}
						 <div class="col-md-8">
							<div class="form-group">
								<label for="email">
									Email
								</label>
									<input type="text" name="email" id="email" class="form-control">
							</div>
						</div>
					</div>
				</div>

					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="form-group form-group-login">
							<table style="margin: 0 auto">
								<thead>
									<tr class="info">
										<th class="student-id">
											{{ sprintf('%05d',$student_id+1) }}
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="photo">

											<img class="img-responsive student-photo" id="showPhoto" src="{{ asset('img/profile-avatar.jpg') }}" alt=" "/>

											<input type="file" name="photo" id="photo" accept="image/*">
											
											
										</td>
									</tr>
									<tr>
										<td style="text-align: center; background: #ddd;">
											<input type="button" name="browse_file" id="browse_file" class="form-control btn-browse" value="Browse">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

			</div>
			<br>
			{{--------address----------}}
			<div class="panel-heading" style="margin-top: 70px;">
				 <b><i class="fa fa-apple"></i>Address</b>
    		</div>
    		<div class="panel-body" style="padding-bottom: 10px;margin: 0;">
    			<div class="row">
    				<div class="col-md-3">
    					<div class="form-group">
    						<label for="village">Village</label>
    						<input type="text" class="form-control" id="village" name="village">
    					</div>
    				</div>
    				<div class="col-md-3">
    					<div class="form-group">
    						<label for="commune">Communte</label>
    						<input type="text" class="form-control" id="commune" name="commune">
    					</div>
    				</div>
    				<div class="col-md-3">
    					<div class="form-group">
    						<label for="district">District</label>
    						<input type="text" class="form-control" id="district" name="district">
    					</div>
    				</div>
    				<div class="col-md-3">
    					<div class="form-group">
    						<label for="province">Province</label>
    						<input type="text" class="form-control" id="province" name="province">
    					</div>
    				</div>
    				<div class="col-md-11">
    					<div class="form-group">
    						<label for="current_address">Current Address</label>
    						<input type="text" class="form-control" id="current_address" name="current_address">
    					</div>
    				</div>


	    		</div>
	    	</div>
		    		<div class="panel-footer">
		    			<button type="submit" class="btn ntn-default btn-save">Save <i class="fa fa-save"></i></button>
		    		</div>

    	        </form>
    		</div>
		</div>
	</div>
</div>




@include('class.classPopup')
@endsection

@section('script')
<script type="text/javascript">
	
	//=================model=========================
		$('#view-class-info').on('click',function(e){
				e.preventDefault();
				$('#chose-academic').modal();
				showClassInfo();
		})
		
	//=================popup data show======================
		$(document).on('click','#edit-info',function(e){
			e.preventDefault();
			$('#class_id').val($(this).data('id'));
			$('.academic-detail p').text($(this).text());
			$('#chose-academic').modal('hide');
		})
	//=================date picker dob===================
	$('#dob').datepicker({
		dateFormat:'yy-mm-dd',
        changeMonth:true,
        changeYear:true
	})
	//=================change input======================
	    $('#academic_id').on('change',function(e){
	        showClassInfo();
	    }) 
	    $('#level_id').on('change',function(e){
	        showClassInfo();
	    })
	    $('#shift_id').on('change',function(e){
	        showClassInfo();
	    })
	    $('#time_id').on('change',function(e){
	        showClassInfo();
	    })
	    $('#batch_id').on('change',function(e){
	        showClassInfo();
	    })
	    $('#group_id').on('change',function(e){
	        showClassInfo();
	    })
	 
	   $('#form-view-course #program_id').on('change',function(e){
	        var program_id = $(this).val();
	        var level = $('#level_id');
	        $(level).empty();
	        $.get("{{ route('showLevel') }}",{program_id:program_id},function(data){
	            $.each(data,function(i,pro){
	                $(level).append($('<option/>',{
	                    value : pro.level_id,
	                    text  : pro.level
	                }))
	            })
	            showClassInfo();
	        })
	    })
	   function showClassInfo(){

            var data = $('#form-view-course').serialize();
            $.get("{{ route('showClassInformation') }}",data,function(data){
                $('#show-class-info').empty().append(data);
                $('td #hidden').addClass('hidden');
                $('th #hidden').addClass('hidden');
                MergeCommonRows($('#table-class-info'));
            })
        }
	//===========for image=========================
		
		$('#browse_file').on('click',function(){
			$('#photo').click();
		})
		$('#photo').on('change',function(e){
			showfile(this,'#showPhoto')
		});
		function showfile(fileInput,img,showfile){
			if (fileInput.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e){
					$(img).attr('src', e.target.result);
				}
				reader.readAsDataURL(fileInput.files[0]);
			}
			$(showfile).text(fileInput.files[0].name);
		}
	//==================merge cell table==================
        function MergeCommonRows(table) {
            var firstColumnBrakes = [];
            $.each(table.find('th'),function(i){
                var previous = null, cellToExtend = null, rowspan = 1;
                table.find("td:nth-child(" + i + ")").each(function(index, e){
                    var jthis = $(this), content = jthis.text();
                    if (previous == content && content !== "" && $.inArray(index, firstColumnBrakes) === -1) {
                        jthis.addClass('hidden');
                        cellToExtend.attr("rowspan", (rowspan = rowspan+1));
                    } else {
                        if (i === 1) firstColumnBrakes.push(index);
                        rowspan = 1;
                        previous = content;
                        cellToExtend = jthis;
                    }
                });
            });
            $('td.hidden').remove();
        }

</script>
@endsection
