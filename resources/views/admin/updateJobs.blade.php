@extends('admin.base')

@section('content')
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">

        <div class="row">
        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                update Jobs
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="post" action="{{route('jobs.update',['job'=>$job->id])}}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-6">
                            <input type="text" name="job_title" value="{{$job->job_title}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Application Start</label>
                        <div class="col-sm-6">
                            <input type="text" name="application_start" value="{{$job->application_start}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Last Date</label>
                        <div class="col-sm-6">
                            <input type="text" name="last_date" value="{{$job->last_date}}" class="form-control round-input">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Salary</label>
                        <div class="col-sm-6">
                            <input class="form-control" id="focusedInput" value="{{$job->salary}}" name="salary" type="text">
                        </div>
                    </div>
                  <div class="form-group">
                        <label class="col-sm-3 control-label">Position</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="{{$job->position}}" name="position">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Vacancy</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" value="{{$job->vacancy}}" name="vacancy">
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Registration Fee</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" value="{{$job->reg_fee}}" name="reg_fee">
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-sm-3 control-label col-lg-3" for="inputWarning">Eligibility</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" value="{{$job->eligibility}}" name="eligibility">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-sm-3 control-label col-lg-3" for="inputError">Description</label>
                        <div class="col-lg-6">
                            <textarea rows="5" class="form-control" name="description">{{$job->description}}</textarea>
                        </div>
                    </div>
                     <div class="form-group has-error">
                        <label class="col-sm-3 control-label col-lg-3" >Type</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="job_type">
                                <option value="O">Online</option>
                                <option value="P">Part Time</option>
                                <option value="F">Full Time</option>
                                <option value="I">Internship</option>
                                <option value="C">Contractual</option>
                            </select>
                        </div>
                    </div>
                   <div class="row">
                       <div class="col-lg-3"></div>
                   <div class="col-lg-6">
                    <div class="form-group">
                        <input type="submit" value="Create" class="btn btn-success btn-block">
                    </div>
                    </div>
                   </div>
                </form>
            </div>
        </section>
        </div>
        </div>

        <!-- page end-->
        </div>
</section>
 <!-- footer -->

  <!-- / footer -->
</section>

@endsection
