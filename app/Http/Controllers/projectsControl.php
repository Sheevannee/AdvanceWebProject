<?php

namespace App\Http\Controllers;

use App\Models\projects;
use App\Models\User;

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
        $data=projects::paginate(4);
        $users = User::all();

        return view('coordinator.coordinatormanageprojectpage',['data'=>$data, 'users'=>$users]);
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

    public function create()
    {
        $users = User::all();
        $projects = new projects;
        // return view('coordinator.coordinatoraddprojects', compact(['users','projects']));
        return view('coordinator.coordinatoraddprojects', ['projects'=>$projects, 'users'=>$users]);
    }

    public function store(Request $req)
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
        $data->examiner_one=$req->examiner_one;
        $data->examiner_two=$req->examiner_two;

        $data->save();

        return redirect('/manageprojects');
    }

    public function supervisorManage()
    {
        $users = User::all();
        $data=projects::paginate(4);
        return view('supervisor.supervisormanageproject',['data'=>$data,'users'=>$users]);
    }

    public function supervisorView()
    {
        $users = User::all();
        $data=projects::paginate(4);
        return view('supervisor.supervisorviewproject',['data'=>$data,'users'=>$users]);
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
        // $data->supervisors=$req->supervisors;
        // $data->examiner_one=$req->examiner_one;
        // $data->examiner_two=$req->examiner_two;

        $data->save();
        return redirect('/supervisorupdate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    

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
    
}
