@extends('layouts.master')
@section('content')
@include('courses.popup.academic')
@include('courses.popup.program')
@include('courses.popup.level')
@include('courses.popup.shift')
@include('courses.popup.time')
@include('courses.popup.batch')
@include('courses.popup.group')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="icon_documents_alt"></i>Courses</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li><i class="icon_documents_alt"></i>Course</li> 
            <li><i class="fa fa-pencil"></i>Manage Course</li>                
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div id="succsess-course-msg" class="text-success"></div>
    	<section class="panel panel-dafult">
    		<header class="panel-heading" style="border-top: 1px solid #ccc;">
    			Course
    		</header>
    		<form action="#" class="form-horizontal" id="form-create-course" method="POST">
                <input type="hidden" name="active" id="active" value="1">
                <input type="hidden" name="class_id" id="class_id">
    			<div class="panel-body">
    				<div class="form-group">

    					<div class="col-md-3">
    						<label for="academic-year">Academic Year</label>
    						<div class="input-group">
    							<select name="academic_id" id="academic_id" class="form-control">
    							
                                    @foreach( $academics as $key => $y)
                                        <option value="{{ $y->academic_id }}">{{ $y->academic }}</option>
                                    @endforeach
    							</select>
    							<div class="input-group-addon">
    								<span class="fa fa-plus" id="add-more-academic"></span>
    							</div>
    						</div>
    					</div>
    					{{---------------------}}
    					<div class="col-md-4">
    						<label for="program">Course</label>
    						<div class="input-group">
    							<select name="program_id" id="program_id" class="form-control">
    								<option value="">---------</option>
                                    @foreach( $programs as $key => $p)
                                        <option value="{{ $p->program_id }}">{{ $p->program }}</option>
                                    @endforeach
    							</select>
    							<div class="input-group-addon">
    								<span class="fa fa-plus" id="add-more-program"></span>
    							</div>
    						</div>
    					</div>
    					{{---------------------}}
                        
    					<div class="col-md-5">
    						<label for="level">Level</label>
    						<div class="input-group">
    							<select name="level_id" id="level_id" class="form-control">
    								
    							</select>
    							<div class="input-group-addon">
    								<span class="fa fa-plus" id="add-more-level"></span>
    							</div>
    						</div>
    					</div>
    					{{---------------------}}

    					<div class="col-md-3">
    						<label for="shift">Shift</label>
    						<div class="input-group">
    							<select name="shift_id" id="shift_id" class="form-control">
    								
                                    @foreach( $shifts as $shift)
                                        <option value="{{ $shift->shift_id }}">{{ $shift->shift }}</option>
                                    @endforeach
    							</select>
    							<div class="input-group-addon">
    								<span class="fa fa-plus" id="add-more-shift"></span>
    							</div>
    						</div>
    					</div>
    					{{---------------------}}

    					<div class="col-md-4">
    						<label for="time">Time</label>
    						<div class="input-group">
    							<select name="time_id" id="time_id" class="form-control">
    							
                                    @foreach( $times as $time)
                                        <option value="{{ $time->time_id }}">{{ $time->time }}</option>
                                    @endforeach
    							</select>
    							<div class="input-group-addon">
    								<span class="fa fa-plus" id="add-more-time"></span>
    							</div>
    						</div>
    					</div>
    					{{---------------------}}

    					<div class="col-md-3">
    						<label for="batch">Batch</label>
    						<div class="input-group">
    							<select name="batch_id" id="batch_id" class="form-control">
    								
                                    @foreach( $batches as $batch)
                                        <option value="{{ $batch->batch_id }}">{{ $batch->batch }}</option>
                                    @endforeach
    							</select>
    							<div class="input-group-addon">
    								<span class="fa fa-plus" id="add-more-batch"></span>
    							</div>
    						</div>
    					</div>
    					{{---------------------}}

    					<div class="col-md-2">
    						<label for="group">Group</label>
    						<div class="input-group">
    							<select name="group_id" id="group_id" class="form-control">
    								
                                    @foreach( $groups as $group)
                                        <option value="{{ $group->group_id }}">{{ $group->group }}</option>
                                    @endforeach
    							</select>
    							<div class="input-group-addon">
    								<span class="fa fa-plus" id="add-more-group"></span>
    							</div>
    						</div>
    					</div>
    					{{---------------------}}

    					<div class="col-md-3">
    						<label for="startDate">Start Date</label>
    						<div class="input-group">
    							<input class="form-control" type="text" name="start_date" id="start_date" placeholder="date..." required />
    							<div class="input-group-addon">
    								<span class="fa fa-calendar"></span>
    							</div>
    						</div>
    					</div>
    					{{---------------------}}

    					<div class="col-md-3">
    						<label for="endtDate">End Date</label>
    						<div class="input-group">
    							<input class="form-control" type="text" name="end_date" id="end_date" placeholder="date..." required />
    							<div class="input-group-addon">
    								<span class="fa fa-calendar"></span>
    							</div>
    						</div>
    					</div>
    					{{---------------------}}


    				</div>
    			</div>
				<div class="panel-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Save Course</button>
					<button type="submit" class="btn btn-success btn-sm btn-update-class">Update Course</button>
				</div>
    		</form>
        </section>
            {{----------------------}}
            <div id="succsess-courseInfo-msg" class="text-success"></div>
            <div class="panel panel-defult">
                <div class="panel-heading">Class Information</div>
                <div class="panel-body" id="show-class-info">
                    
                </div>
            </div>
            {{----------------------}}
    	
    </div>
</div>
@endsection

@section('script')
	<script type="text/javascript">
        showClassInfo();
        //=================start time=============================
        $("#start_date").datepicker({
            dateFormat:'yy-mm-dd',
            changeMonth:true,
            changeYear:true
        });
        //=================end date================================
        $("#end_date").datepicker({
            dateFormat:'yy-mm-dd',
            changeMonth:true,
            changeYear:true
        });

        //=================change input============================
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

        //=================academic modal===========================
        $('#add-more-academic').on('click', function(){
            $('#academic-year-show').modal();
        })

        $('.btn-save-academic').on('click', function(){
            var academic = $('#new-academic').val();
            $.post("{{ route('postInsertAcademic') }}", {academic:academic}, function(data){
                $('#academic_id').append($('<option/>',{
                    value : data.academic_id,
                    text  : data.academic
                }))
                $('#new-academic').val("");
            })
        })

        //=================program modal===========================
        $('#add-more-program').on('click', function(){
            $('#program-show').modal();
        })
        $('.btn-save-program').on('click', function(){
            var program = $('#program').val();
            var description = $('#description').val();
            $.post(" {{ route('postInsertProgram') }} ",{program:program,description:description}, function(data){
                
                $('#program_id').append($('<option/>',{
                    value : data.program_id,
                    text  : data.program
                }))
                
                $('#program').val("");
                $('#description').val("");
            })
        })
        
        
        //=================level modal===========================
        $('#add-more-level').on('click', function(){

            var programs = $('#program_id option');
            var program  = $('#form-level-create').find('#program_id');
            $(program).empty();
            $.each(programs,function(i,pro){
                $(program).append($('<option/>',{
                    value : $(pro).val(),
                    text  : $(pro).text()
                }))
            })
            
            $('#level-show').modal();

        })


        $('#form-level-create').on('submit', function(e){
            e.preventDefault();
            var data = $(this).serialize();
            var url  = $(this).attr('action');
            $.post(url,data,function(data){
                $('#lavel_id').append($('<option/>',{
                    value : data.level_id,
                    text  : data.level
                }))
                $('#form-level-create').trigger('reset');
            })
        })

        //==========level data show by program ========
        $('#form-create-course #program_id').on('change',function(e){
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
        

        //===========shift modal===========
        $('#add-more-shift').on('click',function(){
            $('#shift-show').modal();
        })
        $('#form-shift-create').on('submit',function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.post("{{ route('postInsertShift') }}",data,function(data){
                $("#shift_id").append($('<option/>',{
                    value : data.shift_id,
                    text  : data.shift
                }))
                $('#shift').val("");
            })
        })

        //===========times modal============
        $('#add-more-time').on('click',function(){
            $('#time-show').modal();
        })

        $('#form-time-create').on('submit',function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.post("{{ route('postInsertTime') }}",data,function(data){
                $('#time_id').append($('<option/>',{
                    value : data.time_id,
                    text  : data.time
                }))
                $('#time').val("");
            })
        })

        //===========batch modal============
        $('#add-more-batch').on('click',function(){
            $('#batch-show').modal();
        })

        $('#form-batch-create').on('submit',function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.post("{{ route('postInsertBatch') }}",data,function(data){
                $('#batch_id').append($('<option/>',{
                    value : data.batch_id,
                    text  : data.batch
                }))
                $('#batch').val("");
            })
        })
        //===========group modal============
        $('#add-more-group').on('click',function(){
            $('#group-show').modal();
        })
        $('#form-group-create').on('submit',function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.post("{{ route('postInsertGroup') }}",data,function(data){
                $('#group_id').append($('<option/>',{
                    value : data.group_id,
                    text  : data.group
                }))
                $('#group').val("");
            })
        })

        //====================course add====================
        $('#form-create-course').on('submit',function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.post("{{ route('postInsertClass') }}",data,function(data){

                $('#succsess-course-msg').html('Insert Class Information Succsess!');
                showClassInfo(data.academic_id);
                
            })

            $('#form-create-course').trigger('reset');
        })
        
        $(document).on('click','#edit-info',function(){
            var class_id = $(this).data('id');
            $.post("{{ route('editClass') }}",{class_id:class_id},function(data){

                $('#academic_id').val(data.academic_id);
                $('#program_id').val(data.program_id);
                $('#level_id').val(data.level_id);
                $('#shift_id').val(data.shift_id);
                $('#time_id').val(data.time_id);
                $('#batch_id').val(data.batch_id);
                $('#group_id').val(data.group_id);
                $('#start_date').val(data.start_date);
                $('#end_date').val(data.end_date);
                $('#class_id').val(data.class_id);
            })
        })
        $('.btn-update-class').on('click',function(e){
            e.preventDefault();
            var data = $('#form-create-course').serialize();
            $.post("{{ route('postUpdateClass')}}",data,function(data){
                $('#succsess-course-msg').html('Update Class Information Succsess!');
                showClassInfo(data.academic_id);
            })
        })

        $(document).on('click','.del-class',function(){
            var class_id = $(this).val();
            $.post("{{ route('postDeleteClass') }}",{class_id:class_id},function(data){
                $('#succsess-courseInfo-msg').html('Delete Class Information Succsess!');
                showClassInfo($('#academic_id').val());
            })
        })

        function showClassInfo(){

            var data = $('#form-create-course').serialize();
            $.get("{{ route('showClassInformation') }}",data,function(data){
                $('#show-class-info').empty().append(data);
                MergeCommonRows($('#table-class-info'));
            })
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
