<div class="modal fade" id="level-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Lavel</h4>
			</div>
			<form action="{{ route('postInsertLevel') }}" method="POST" id="form-level-create">
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12">
							<select class="form-control" name="program_id" id="program_id"></select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<input type="text" name="level" id="level" class="form-control" placeholder="Lavel">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<input type="text" name="description" id="description" class="form-control" placeholder="Description">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-dafult">Close</button>
					<button type="submit" class="btn btn-success">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>