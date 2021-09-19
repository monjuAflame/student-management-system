@extends('layouts.master')
@section('content')
@include('fee.stylesheet.stylesheet')
@include('fee.popup.createFee')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="icon_documents_alt"></i>Fee Payment</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{url('/')}}">Home</a></li>
            <li><i class="icon_documents_alt"></i>Payment</li> 
            <li><i class="fa fa-pencil"></i>Payment</li>                
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-dafult">
            <div class="panel-heading">
                <div class="com-md-3" style="margin-top: 15px;">
                    <form action="{{ route('showStudentPayment') }}" method="GET" class="search-payment">
                        <input type="text" class="form-control" value="{{ $student_id }}" id="student_id" name="student_id" placeholder="Student ID">
                    </form>
                </div>
            
                <div class="col-md-3" style="margin-top: 15px;">
                    <label for="name">Name <b class="student-name">{{ $status->first_name." ".$status->last_name }}</b></label>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3" style="text-align: right;">
                    <label for="" class="date-invoice">Date <b>{{ date('d-M-Y')}}</b></label>
                </div>
                <div class="col-md-3" style="text-align: right;">
                    <label for="" class="invoice-number">Receipt NO: <b>{{ sprintf('%05d',$receipt_id) }}</b></label>
                </div>
            </div>
        <form action="{{ count($readStudentFee) != 0 ? route('extraPay') : route('savePayment') }}" method="POST" id="formPayment" >
            {{ csrf_field() }}
            <div class="panel-body">
                <table>
                    <caption class="academicdetail">
                        {{ $status->program }} / 
                        Level: {{ $status->level }} / 
                        Shift: {{ $status->shift }} / 
                        Time: {{ $status->time }} / 
                        Batch: {{ $status->batch }} / 
                        Group: {{ $status->group }} 
                    </caption>
                    <thead>
                        <tr>
                            <th>Programs</th>
                            <th>Level</th>
                            <th>School Fee($)</th>
                            <th>Amount($)</th>
                            <th>Dis(%)</th>
                            <th>Paid($)</th>
                            <th>Amount Lack($)</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <select name="program_id" id="program_id" class="d">
                                <option value="">-----------</option>
                                @foreach($program as $key => $p)

                                <option value="{{ $p->program_id}}" {{ $p->program_id==$status->program_id ? 'selected' : null }} >{{ $p->program }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select id="Level_Id" class="d">
                                <option value="">-----------</option>
                                @foreach($level as $key => $l)
                                <option value="{{ $l->level_id}}" {{ $l->level_id==$status->level_id? 'selected' : null }} >
                                    {{ $l->level }}
                                </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon create-fee" title="create fee" style="cursor: pointer;color: blue;padding: 0 3px;border-right: none;">($)</span>
                                <input type="text" name="fee" value="{{ $studentFee->amount or null }}" id="Fee" readonly="true" class="d">
                            </div>

                            <input type="hidden" name="fee_id" value="{{ $studentFee->fee_id or null }}" id="FeeID">
                            <input type="hidden" name="student_id" value="{{ $status->student_id }}" id="StudentID">

                            <input type="hidden" name="level_id" value="{{ $status->level_id}}" id="LevelID">

                            <input type="hidden" name="user_id" value="{{ Auth::id() }}" id="UserID">

                            <input type="hidden" name="transact_date" value="{{ date('Y-m-d H:i:s') }}" id="transDate">

                            <input type="hidden" name="s_fee_id" id="s_fee_id">
                        </td>
                        <td>
                            <input type="text" name="amount" id="Amount" required class="d">
                        </td>
                        <td>
                            <input type="text" name="discount" id="Discount" class="d">
                        </td>
                        <td>
                            <input type="text" name="paid" id="Paid">
                        </td>
                        <td>
                            <input type="text" name="lak" id="Lak" disabled>
                        </td>
                    </tr>

                    <thead>
                        <tr>
                            <th colspan="2">Remark</th>
                            <th colspan="5">Description</th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="remark" id="remark">
                            </td>
                            <td colspan="5">
                                <input type="text" name="description" id="description">
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="panel-footer" style="height: 40px;">
            	<input type="submit" id="btn-go" name="btn-go" class="btn btn-default btn-payment" value="{{ count($readStudentFee)!=0? 'Extra Pay' : 'Save' }}">

                @if(count($readStudentFee)!=0)
                <a href="{{ route('printInvoice',$receipt_id) }}" class="btn btn-default" target="_blank"><i class="fa fa-print"></i></a>
                @endif
                
            	<input type="button" onclick="this.form.reset()" class="btn btn-default pull-right btn-reset" value="Reset">
            </div>
		    </form>
        </div>
        @if(count($readStudentFee) != 0 )
         @include('fee.list.studentFeeList')
         <input type="hidden" id="disabled" value="0">
        @endif
    </div>
</div>

@endsection

@section('script')
    @include('fee.script.calculateFee')
    @include('fee.script.payment')
@endsection