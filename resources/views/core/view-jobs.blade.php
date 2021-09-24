@extends('core.layout')

@section('content')

        <h1>{{$job->job_title}}</h1>
        <h3>Salary: {{$job->salary}}</h3>
        <h4>Eligibility: {{$job->eligibility}}</h4>
        <h3>No of Vacancy: {{$job->vacancy}}</h3>
            <h1>Registration Charge: {{$job->reg_fee}}</h1>

                <a href="{{route('payment.pay', ['id'=>$job->id])}}" class="btn btn-success btn-lg">Apply Now</a>
        </tr>
@endsection
