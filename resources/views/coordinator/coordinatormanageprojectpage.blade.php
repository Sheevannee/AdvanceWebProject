<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  @include("coordinator.coordinatorcss")
  <style>
    table 
    {
      font-size: 12px;
    }
    
    tr:hover {background-color: #c6cfec;}

    th 
    {
      background-color: #4169E1;
      color: white;
    }

    td 
    {
      color: black;
    }
  </style>
</head>

<body>
  <div id="app">
    @include("coordinator.coordinatornavbar")
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card-stats-title"><h3 style="color:MidnightBlue;">Project Details</h3>
                    <div style="position:relative; top:20px;">
                        <table bgcolor="#cfdbff" border-collapse="collapse">
                            <tr align="center">
                                <th style="padding: 10px;">Student ID</th>
                                <th style="padding: 10px;">Student Name</th>
                                <th style="padding: 10px;">Project Type</th>
                                <th style="padding: 10px;">Project Title</th>
                                <th style="padding: 10px;">Start Date</th>
                                <th style="padding: 10px;">End Date</th>
                                <th style="padding: 10px;">Duration (months)</th>
                                <th style="padding: 10px;">Project Progress</th>
                                <th style="padding: 10px;">Project Status</th>
                                <th style="padding: 10px;">Supervisor</th>
                                <th style="padding: 10px;">Supervisor ID</th>
                                <th style="padding: 10px;">Examiner 1</th>
                                <th style="padding: 10px;">Examiner 2</th>
                                <th style="padding: 10px;">Action</th>
                            </tr>
                            @foreach($data as $d)
                                <tr align="center">
                                    <td style="padding: 10px">{{$d->id}}</td>
                                    <td style="padding: 10px">{{$d->name}}</td>
                                    <td style="padding: 10px">{{$d->proj_type}}</td>
                                    <td style="padding: 10px">{{$d->proj_title}}</td>
                                    <td style="padding: 10px">{{$d->sdate}}</td>
                                    <td style="padding: 10px">{{$d->edate}}</td>
                                    <td style="padding: 10px">{{$d->duration}}</td>
                                    <td style="padding: 10px">{{$d->progress}}</td>
                                    <td style="padding: 10px">{{$d->status}}</td>
                                    <td style="padding: 10px">{{$d->supervisors}}</td>
                                    <td style="padding: 10px">{{$d->supervisors_id}}</td>
                                    <td style="padding: 10px">{{$d->examiner_one}}</td>
                                    <td style="padding: 10px">{{$d->examiner_two}}</td>
                                    <td style="padding: 10px"><a href="{{url('delete',$d->id)}}">Delete</a></td>
                                </tr>
                            @endforeach
                        </table>
                     </div>
                </div>
            </div>
      </div>
      <br><br><br><br>
      <span>
        {{$data->links()}} 
      </span>
@include("coordinator.coordinatorscript")
</body>
</html>
</x-app-layout>
