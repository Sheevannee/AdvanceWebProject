<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  @include("supervisor.supervisorcss")
</head>

<body>
  <div id="app">
    @include("supervisor.supervisornavbar")
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-14">
                <div class="card-stats-title"><h5 style="color:RoyalBlue;">WELCOME TO THE SUPERVISOR PANEL PAGE</h5>
                     </div>
                </div>
            </div>
      </div>
@include("supervisor.supervisorscript")
</body>
</html>
</x-app-layout>
