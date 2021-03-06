<div class="accordian-body collapse {{$key==0 ? 'id' : null }}" id="demo{{$key}}"> 
	<table>
		<thead>
			<tr>
				<th style="text-align: center;">#</th>
				<th>Transaction Date</th>
				<th>Cashier</th>
				<th>Paid ($)</th>
				<th>Remark</th>
				<th>Description</th>
				<th style="text-align: center;">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($readStudentTransaction as $key => $st)
			<tr>
				<td>{{ ++$key }}</td>
				<td>{{ $st->transact_date }}</td>
				<td>{{ $st->username }}</td>
				<td>$ {{ number_format($st->paid,2) }}</td>
				<td>{{ $st->remark }}</td>
				<td>{{ $st->description }}</td>
				<td style="text-align: center; width: 112px;">
					<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
					<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-trash-o"></i></a>
					<a href="{{ route('printInvoice',$st->receipt_id) }}" class="btn btn-danger btn-xs"><i class="fa fa-print"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>