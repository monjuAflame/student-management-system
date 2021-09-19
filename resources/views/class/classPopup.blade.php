  <div class="modal fade" id="chose-academic" role="dialog" >
	<div class="modal-dialog modal-xs">
		<section class="panel panel-dafult">
    		<header class="panel-heading" style="border-top: 1px solid #ccc;">
    			Choise Academic
    		</header>
    		<form action="#" class="form-horizontal" id="form-view-course" method="POST">
                <input type="hidden" name="class_id" id="class_id">
    			<div class="panel-body">
    				<div class="form-group">

    					<div class="col-md-6">
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

    					<div class="col-md-6">
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

    					<div class="col-md-6">
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

    					<div class="col-md-6">
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

    					<div class="col-md-6">
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

    					<div class="col-md-3">
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


    				</div>
    			</div>
    		</form>
    		{{----------------------}}
            <div id="succsess-courseInfo-msg" class="text-success"></div>
            <div class="panel panel-defult">
                <div class="panel-heading">Class Information</div>
                <div class="panel-body" id="show-class-info" style="overflow-y: auto; height: 250px;">
                    
                </div>
            </div>
            {{----------------------}}
        </section>

	</div>
</div>