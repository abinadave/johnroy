<?php 
    use App\Http\Controllers\RecordController;
?>
@extends('layouts.main')



@section('content')
<div class="" style="padding: 40px">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading text-info" style="font-weight: bolder">Province: {{ $province }}</div>
              <div class="panel-body">
                  <form class="col-md-5">
                      <div class="form-group">
                        <label>Total Allocation:</label>
                        <input type="number" class="form-control">
                      </div>
                  </form>
              </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $province }} [ <i>{{ $municipality }} </i>]</div>

                <div class="panel-body">
                    <table class="table table-hover table-bordered" id="tbl-child">
                        <thead>
                            <tr>
                                <th>Program</th>
                                <th>Brgy</th>
                                <th class="text-center">Year</th>
                                <th>Proj. Description</th>
                                <th class="text-center">Proj Status</th>
                                <th>Allocation</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lgu as $record)
                                <tr>
                                    <td>{{ $record->PMO }}</td>
                                    <td>{{ RecordController::functionName($record->Brgy) }}</td>
                                    <td class="text-center">{{ $record->Year }}</td>
                                    <td>{{ $record->sp_name }}</td>
                                    <td class="text-center">{{ $record->STATUS }}</td>
                                    <td class="text-right" style="font-weight: bolder">{{ number_format($record->Allocation, 2) }}</td>
                                    <td data-placement="left" data-toggle="tooltip" title="{{$record->REMARKS}}">{{ substr($record->REMARKS,0,10) }}...</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
