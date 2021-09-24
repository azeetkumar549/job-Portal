@extends('core.layout')

@section('content')
   <table class="table mt-5">
       <tr>
           <th>Job Title</th>
           <th>Salary</th>
           <th>Eligibility</th>
           <th>Vacancy</th>
           <th>Registration Fee</th>
           <th>Action</th>
       </tr>
       @foreach ($jobs as $job)
        <tr>
            <td>{{$job->job_title}}</td>
            <td>{{$job->salary}}</td>
            <td>{{$job->eligibility}}</td>
            <td>{{$job->vacancy}}</td>
            <td>{{$job->reg_fee}}</td>
            <td>
                <a href="{{route('view_job',['id'=>$job->id])}}" class="btn btn-success">View More</a>
            </td>
        </tr>
       @endforeach
   </table>
@endsection
