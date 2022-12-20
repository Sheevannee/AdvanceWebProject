<?php

namespace App\Http\Controllers;

use App\Models\projects;
use App\Models\users;

use Illuminate\Http\Request;


class projectsControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function manageProjects()
    {
        $data=projects::paginate(3);
        return view('coordinator.coordinatormanageprojectpage',['data'=>$data]);
    }

    public function delete($id)
    {
        $data=projects::find($id);
        $data->delete();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $data=new projects;
 
        $data->id=$req->id;
        $data->name=$req->name;
        $data->proj_type=$req->proj_type;
        $data->proj_title=$req->proj_title;
        $data->sdate=$req->sdate;
        $data->edate=$req->edate;
        $data->duration=$req->duration;
        $data->progress=$req->progress;
        $data->status=$req->status;
        $data->supervisors=$req->supervisors;
        $data->supervisors_id=$req->supervisors_id;
        $data->examiner_one=$req->examiner_one;
        $data->examiner_two=$req->examiner_two;

        $data->save();

        return redirect('/manageprojects');
    }

    public function supervisorManage()
    {
        $data=projects::paginate(3);
        return view('supervisor.supervisormanageproject',['data'=>$data]);
    }

    function showProject($id){ 
        $data=projects::find($id); 
        return view('supervisor.supervisorupdateproject',['disp'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    function update(Request $req) 
    {
        $data=projects::find($req->id); 
        
        $data->id=$req->id;
        $data->name=$req->name;
        $data->proj_type=$req->proj_type;
        $data->proj_title=$req->proj_title;
        $data->sdate=$req->sdate;
        $data->edate=$req->edate;
        $data->duration=$req->duration;
        $data->progress=$req->progress;
        $data->status=$req->status;
        $data->supervisors=$req->supervisors;
        $data->supervisors_id=$req->supervisors_id;
        $data->examiner_one=$req->examiner_one;
        $data->examiner_two=$req->examiner_two;

        $data->save();
        return redirect('/supervisormanage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(projects $projects)
    {
        //
    }
}
