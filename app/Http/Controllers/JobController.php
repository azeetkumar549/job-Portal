<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    public function index(){
        $data['jobs'] = Job::all();
        return view('admin.jobs',$data);
    }
    public function create()
    {
        return view("admin.insertJobs");
    }
    public function store(Request $request)
    {
        $data = Validator::make($request->all(),[
            'job_title' => 'required',
            'application_start' => 'required',
            'last_date' => 'required',
            'salary' => 'required',
            'position' => 'required',
            'vacancy' => 'required',
            'eligibility' => 'required',
            'description' => 'required',
            'job_type' => 'required',
            'reg_fee' => 'required'
        ]);

        if($data->fails()){
            return redirect("admin/jobs/create")->withErrors($data)->withInput();
        }

        $data = $data->validated() + ["status"=> 1];
        Job::create($data);
        return redirect()->action([HomeController::class,"home"]);
        // return redirect()->away("http://www.google.com");
        // return redirect()->route('jobs.index')->with("msg","data inserted successfully");

    }
    public function show(job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(job $job)
    {

        return  view("admin.updateJobs",['job'=>$job]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, job $job)
    {
        $data = $request->validate([
            'job_title' => 'required',
            'application_start' => 'required',
            'last_date' => 'required',
            'salary' => 'required',
            'position' => 'required',
            'vacancy' => 'required',
            'eligibility' => 'required',
            'description' => 'required',
            'job_type' => 'required',
            'reg_fee' => 'required'
        ]);
        $data = $data + ["status"=> 1];
        $job->update($data);
        return redirect()->route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(job $job)
    {
        $job->delete();
        return redirect()->route('jobs.index');
    }
}
