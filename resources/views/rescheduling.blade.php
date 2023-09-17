@extends('layouts.theme')  

@section('content')
    
    
    
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Case Rescheduling</h1>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="caseNumber" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="ClientName" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="LawyerName" required="required" />
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                              <label>Select previous Date</label>  <input type="date" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select previous Date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <label>Select previous Time</label>   <input type="time" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select previous Time" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <label>Select New Date</label>    <input type="date" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select new Date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <label>Select New Time</label>   <input type="time" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select new Time" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select Judge</option>
                                        <option value="1">judge 1</option>
                                        <option value="2">judge 2</option>
                                        <option value="3">judge 3</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection