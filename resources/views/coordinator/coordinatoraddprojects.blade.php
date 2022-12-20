<x-app-layout>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <style>
        .button 
        {
          background-color: #4169E1; 
          border-radius: 12px;
          color: white;  
          padding: 10px 24px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 12px;
          margin: 4px 2px;
          cursor: pointer;
          -webkit-transition-duration: 0.4s;
          transition-duration: 0.4s;
        }
        
        .button1:hover 
        {
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
        
        div 
        {
          padding: 10px;
          border: 5px;
        }

        body 
        {
          background: radial-gradient(circle, rgba(220,225,255,1) 0%, rgba(220,236,255,1) 100%);
        }

      </style>
    </head>
    <body>
      <br/>
      <b><h2 style="color:RoyalBlue;">Add New Project Details</h2></b>
      <br/>
      <form action="/createproject" method="post">
        @csrf
        <div>
          <b>Enter Student's ID : </b><input type="text" name="id" required><br/><br/>

          <b>Enter Student's Name : </b><input type="text" name="name" required><br/><br/>
                          
          <label for="proj_type"><b>Project Type : </b></label>
          <select id="proj_type" name="proj_type">
            <option>-Select Option-</option>
            <option value="Research Based">Research Based</option> 
            <option value="Development Based">Development Based</option>
          </select><br/><br/>

          <b>Enter Project Title : </b><input type="text" name="proj_title" required><br/><br/>

          <b>Enter Project Start Date : </b><input type="date" name="sdate" required><br/><br/>

          <b>Enter Project End Date : </b><input type="date" name="edate" required><br/><br/>

          <b>Enter Project Duration (Months) : </b><input type="text" name="duration" required><br/><br/>

          <label for="progress"><b>Enter Project Progress : </b></label>
          <select id="progress" name="progress">
            <option>-Select Option-</option>
            <option value="Miletsone 1">Miletsone 1</option>
            <option value="Miletsone 2">Miletsone 2</option>
            <option value="Final Report">Final Report</option>
          </select><br/><br/>

          <label for="status"><b>Enter Project Status : </b></label>
          <select id="status" name="status">
            <option>-Select Option-</option>
            <option value="On Track">On Track</option>
            <option value="Delayed">Delayed</option>
            <option value="Extended">Extended</option>
            <option value="Completed">Completed</option>
          </select><br/><br/>

          <b>Enter Supervisor's Name : </b><input type="text" name="supervisors" required><br/><br/>

          <b>Enter Supervisor's ID : </b><input type="text" name="supervisors_id" required><br/><br/>

          <b>Enter Examiner 1 Name : </b><input type="text" name="examiner_one" required><br/><br/>
                          
          <b>Enter Examiner 2 Name : </b><input type="text" name="examiner_two" required><br/><br/>

          <button class="button button1" type="submit">Add Project Details</button>
          <button class="button button1" type="reset">Reset Form</button>
        </div>
      </form>
</x-app-layout>
