@extends('admin.base')


@section('content')
<section id="main-content">


	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Basic table
     @if (session('msg'))
        <div class="alert bg-success text-white">
            {{ session('msg') }}
        </div>
    @endif
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Title</th>
            <th>Salary</th>
            <th>position</th>
            <th>vacancy</th>
            <th>eligibility</th>
            <th>reg_fee</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)


          <tr data-expanded="true">
            <td>{{$job->id}}</td>
            <td>{{$job->job_title}}</td>
            <td>{{$job->salary}}</td>
            <td>{{$job->position}}</td>
            <td>{{$job->vacancy}}</td>
            <td>{{$job->eligibility}}</td>
            <td>{{$job->reg_fee}}</td>
            <td>
                <form action="{{route('jobs.destroy',['job'=> $job->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit"  class="btn btn-danger">Delete</button>
                </form>
                <a href="{{route('jobs.edit', ['job'=>$job->id])}}" class="btn btn-info">Update</a>
            </td>

          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2021 JobPortal. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

@endsection
