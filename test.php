<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Amber Hayes Test</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <style>
    body {
      font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
      font-size: 12px;
      height: 660px;
    }

    .btn {
      border-radius: 5px;
      color: #ffffff;
      font-size: 10px;
      padding: 2px;
      background: #10C920;
      text-decoration: none;
    }

    .btn:hover {
      background: #3cb0fd;
      text-decoration: none;
    }

    table,th {
      border-collapse: collapse;
      padding: 5px;
      text-align: left;
    }

    tr:hover {
      background-color: #ffffff;
    }
    tr:first-child:hover {
        background-color: #cdcdcd;
    }

    #wrap {
      width: 1280px;
      margin: 0 auto;
    }

    .left-side-content {
      float: left;
      width: calc(100% - 380px);
    }

    .right-side-content {
      border-radius: 15px;
      float: right;
      width: 360px;
      height: 660px;
    }

    .section-title-bar {
      border-radius: 15px 15px 0px 0px;
      padding: 10px;
      text-align: left;
      font-weight: bold;
      background-color: #10C920;
    }

    .two-cols {
      column-count: 2;
    }

    #today-container {
      color: #FFFFFF;
      border-radius: 15px;
      background-color: #000000;
    }

    #container{
      border-radius: 15px;
      background-color:#cdcdcd;
    }

    #right-container{
      border-radius: 15px;
      background-color:#cdcdcd;
    }

    progress[value] {
      /* Reset the default appearance */
      -webkit-appearance: none;
       appearance: none;

      width: 250px;
      height: 20px;
    }

    progress[value]::-webkit-progress-bar {
      background: #red;
      border-radius: 2px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;
    }

  </style>

  <body id="wrap">
     <div class="left-side-content">
       <div class="two-cols">
         <div id="today-container">
           <h3 class="section-title-bar">Due Today</h3>
           <table>
             <thead>
               <th>Ticket Title</th>
               <th>Time Left</th>
             </thead>
             <tbody>
              <?php $ticketArray = [
                      "Dealer TLC Redesign" => "3 hours",
                      "Golf Pigeon Error Fix (Profiles)" => "5 hours",
                      "WebIQ - New Module Design" => "6 hours",
                      "Dalton Boggs Update (backend)" => "8 hours",
                      "OCA Website Skin (Revised)" => "10 hours",
                      "Golf Pigeon Broken Image Error" => "12 hours"
                    ];
              foreach($ticketArray as $key=>$value): ?>
              <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
                <td><a class="btn">details</a></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
           </table>
         </div>

         <div id="container">
           <h3 class="section-title-bar">My Tickets</h3>
           <table>
             <th>Ticket Title</th>
             <th>Time Left</th>
             <?php $ticketArray = [
                      "Dealer TLC Redesign" => "3 hours",
                      "Golf Pigeon Error Fix (Profiles)" => "5 hours",
                      "WebIQ - New Module Design" => "6 hours",
                      "Dalton Boggs Update (backend)" => "8 hours",
                      "OCA Website Skin (Revised)" => "10 hours",
                      "Golf Pigeon Broken Image Error" => "12 hours"
                    ];
              foreach($ticketArray as $key=>$value): ?>
              <tr>
                  <td><?php echo $key; ?></td>
                  <td><?php echo $value; ?></td>
                  <td><a class="btn">details</a></td>
              </tr>
              <?php endforeach; ?>
           </table>
         </div>
       </div>
       <div>
         <div id="container">
           <h3 class="section-title-bar">My Active Tickets</h3>
           <table>
             <th>Ticket Title</th>
             <th>Project Phase</th>
             <th>Due Date</th>
             <th>Time Left</th>
             <th>Current Holder</th>
             <th>Total Time</th>
              <?php $ticketArray = [
                      "Dealer TLC Redesign" => [100, "8/3/12 3:00pm", "19 hours", "Matt Brown", "45 hours"],
                      "Golf Pigeon Error Fix (Profiles)" => [30, "8/3/12 4:00pm","30 days", "Robert White", "23 hours"],
                      "WebIQ - New Module Design" => [60, "8/3/12 5:00pm","15 days","Kyle Fields","60 hours"],
                      "Dalton Boggs Update (backend)" => [30, "8/4/12 9:00am", "40 days","Zane Fields","5 hours"],
                      "OCA Website Skin (Revised)" => [40, "8/5/12 0:15am", "3 days","Zane Fields","145 hours"],
                      "Golf Pigeon Broken Image Error" => [90, "8/6/12 9:00am","1 day","Steve Graham","45 hours"]
                    ];
              foreach($ticketArray as $key=>$value): ?>
              <tr>
                  <td><?php echo $key; ?></td>
                  <td><progress value=$value[0] max="100"></progress></td>
                  <td><?php echo $value[1]; ?></td>
                  <td><?php echo $value[2]; ?></td>
                  <td><?php echo $value[3]; ?></td>
                  <td><?php echo $value[4]; ?></td>
                  <td><a class="btn">details</a></td>
              </tr>
              <?php endforeach; ?>
           </table>
         </div>

         <div id="container">
           <h3 class="section-title-bar">My Managed Tickets</h3>
           <table>
             <th>Ticket Title</th>
             <th>Project Phase</th>
             <th>Due Date</th>
             <th>Time Left</th>
             <th>Current Holder</th>
             <th>Total Time</th>
             <?php $ticketArray = [
                     "Dealer TLC Redesign" => [100, "8/3/12 3:00pm", "19 hours", "Matt Brown", "45 hours"],
                     "Golf Pigeon Error Fix (Profiles)" => [30, "8/3/12 4:00pm","30 days", "Robert White", "23 hours"],
                     "WebIQ - New Module Design" => [60, "8/3/12 5:00pm","15 days","Kyle Fields","60 hours"],
                     "Dalton Boggs Update (backend)" => [30, "8/4/12 9:00am", "40 days","Zane Fields","5 hours"],
                     "OCA Website Skin (Revised)" => [40, "8/5/12 0:15am", "3 days","Zane Fields","145 hours"],
                     "Golf Pigeon Broken Image Error" => [90, "8/6/12 9:00am","1 day","Steve Graham","45 hours"]
                   ];
              foreach($ticketArray as $key=>$value): ?>
              <tr>
                  <td><?php echo $key; ?></td>
                  <td><progress value="$value[0]" max="100"></progress></td>
                  <td><?php echo $value[1]; ?></td>
                  <td><?php echo $value[2]; ?></td>
                  <td><?php echo $value[3]; ?></td>
                  <td><?php echo $value[4]; ?></td>
                  <td><a class="btn">details</a></td>
              </tr>
              <?php endforeach; ?>
           </table>
         </div>
     </div>
     </div>

     <div class="right-side-content">
       <div id="right-container">
         <h3 class="section-title-bar">Active Ticket Stream</h3>
         <table>
            <?php $userArray = [
                    "Kenny Ginn" => ["Calling Client & Gather Info", "OCA Website Skin (Revised)", "Zane Fields"],
                    "Steve Graham" => ["[Step Name]", "[Ticket Title]", "Zane Fields"],
                    "Zane Fields" => ["Convert PSD to HTML", "WebIQ - New Module Design", "Robert Wright"],
                    "Zane Fields" => ["Investigate & Fix Error", "Golf Pigeon Error Fix", "Robert Wright"],
                    "Sharon Wright" => ["Handle Billing Error", "Cash in Dat Site", "Steve Graham"],
                    "Robert Wright" => ["Investigate & Fix Error", "Golf Pigeon Error Fix", "Zane Fields"],
                    "Kenny Ginn" => ["Calling Client & Gather Info", "OCA Website Skin (Revised)", "Zane Fields"],
                    "Steve Graham" => ["[Step Name]", "[Ticket Title]", "Zane Fields"],
                    "Zane Fields" => ["Convert PSD to HTML", "WebIQ - New Module Design", "Robert Wright"],
                  ];
            foreach($userArray as $key=>$value): ?>
            <tr>
                <td><img src="http://0.gravatar.com/avatar/2dd503e9980a48a02241e05ef1c58b4d?s=50"/></td>
                <td><?php echo $key .' completed ' . $value[0] . ' in ticket ' . $value[1] . ' & has passed it on to ' . $value[2]; ?></td>
            </tr>
            <?php endforeach; ?>
         </table>
       </div>
     </div>
  </body>


</html>
