<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Amber Hayes Test</title>

  </head>

  <style>
    html, body {
      font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
      font-size: 11px;
      max-height: 660px;
    }

    .btn {
      border-radius: 3px;
      color: #ffffff;
      font-size: 10px;
      padding: 1px;
      background: #10C920;
      text-decoration: none;
    }

    .btn:hover {
      background: #3cb0fd;
      text-decoration: none;
      color: #ffffff;
    }

    #wrap {
      width: 1280px;
      margin: 0 auto;
    }

    .left-side-content {
      float: left;
      width: calc(100% - 380px);
      height: 660px;
    }

    .right-side-content {
      border-radius: 15px;
      float: right;
      width: 360px;
      height: 660px;
      overflow: scroll;
    }

    .section-title-bar {
      border-radius: 15px 15px 0px 0px;
      padding: 8px;
      text-align: left;
      font-weight: bold;
      background-color: #10C920;
    }

    #today-container {
      color: #FFFFFF;
      border-radius: 15px;
      background-color: #000000;
    }

    #container{
      border-radius: 15px;
      background-color:#E0E0E0;
    }

    #right-container{
      border-radius: 15px;
      background-color:#E0E0E0;
      height:inherit;
    }

    progress[value] {
      /* Reset the default appearance */
      -webkit-appearance: none;
       appearance: none;

      width: 100px;
      height: 15px;
    }

    progress[value]::-webkit-progress-bar {
      background: #000000;
      border-radius: 2px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;
    }

    .table-borderless tbody tr td,
    .table-borderless tbody tr th,
    .table-borderless thead tr th,
    .table-borderless thead tr td,
    .table-borderless tfoot tr th,
    .table-borderless tfoot tr td {
      padding: 2px;
      border: none;
    }
  </style>

  <body id="wrap">
    <div class="left-side-content">
      <div class="row">
        <div class="col-md-6">
          <div id="today-container">
            <h4 class="section-title-bar">Due Today</h4>
            <table class="table table-hover table-condensed table-borderless">
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
           </div><!-- end container -->
        </div><!-- end col -->

        <div class="col-md-6">
          <div id="container">
            <h4 class="section-title-bar">My Tickets</h4>
            <table class="table table-hover table-condensed table-borderless">
              <thead>
                <th>Ticket Title</th>
                <th>Time Left</th>
              </thead>
              <tbody>
                <?php $ticketArray = [
                          "Dealer TLC Redesign" => "8/3/12 3:00pm",
                          "Golf Pigeon Error Fix (Profiles)" => "8/3/12 4:00pm",
                          "WebIQ - New Module Design" => "8/3/12 5:00pm",
                          "Dalton Boggs Update (backend)" => "8/4/12 9:00am",
                          "OCA Website Skin (Revised)" => "8/5/12 10:15am",
                          "Golf Pigeon Broken Image Error" => "8/6/12 9:00am"
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
          </div><!-- end container -->
        </div><!-- end col -->
       </div><!-- end row -->

       <div class="row">
         <div class="col-md-12">
         <div id="container">
           <h4 class="section-title-bar">My Active Tickets</h4>
           <table class="table table-hover table-condensed table-borderless">
             <thead>
               <th>Ticket Title</th>
               <th>Project Phase</th>
               <th>Due Date</th>
               <th>Time Left</th>
               <th>Current Holder</th>
               <th>Total Time</th>
             </thead>
             <tbody>
                <?php $ticketArray = [
                        "Dealer TLC Redesign" => [100, "8/3/12 3:00pm", "19 hours", "Matt Brown", "45 hours"],
                        "Golf Pigeon Error Fix (Profiles)" => [30, "8/3/12 4:00pm","30 days", "Robert White", "23 hours"],
                        "WebIQ - New Module Design" => [60, "8/3/12 5:00pm","15 days","Kyle Fields","60 hours"],
                        "Dalton Boggs Update (backend)" => [30, "8/4/12 9:00am", "40 days","Zane Fields","5 hours"],
                        "OCA Website Skin (Revised)" => [40, "8/5/12 10:15am", "3 days","Zane Fields","145 hours"],
                        "Golf Pigeon Broken Image Error" => [90, "8/6/12 9:00am","1 day","Steve Graham","45 hours"]
                      ];
                foreach($ticketArray as $key=>$value): ?>
                <tr>
                    <td><?php echo $key; ?></td>
                    <td><progress value="<?php echo $value[0];?>" max="100"></progress></td>
                    <td><?php echo $value[1]; ?></td>
                    <td><?php echo $value[2]; ?></td>
                    <td><?php echo $value[3]; ?></td>
                    <td><?php echo $value[4]; ?></td>
                    <td><a class="btn">details</a></td>
                </tr>
               <?php endforeach; ?>
             </tbody>
           </table>
         </div><!-- end container -->
       </div><!-- end col -->

       <div class="col-md-12">
         <div id="container">
           <h4 class="section-title-bar">My Managed Tickets</h4>
           <table class="table table-hover table-condensed table-borderless">
             <thead>
               <th>Ticket Title</th>
               <th>Project Phase</th>
               <th>Due Date</th>
               <th>Time Left</th>
               <th>Current Holder</th>
               <th>Total Time</th>
            </thead>
            <tbody>
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
                    <td><progress value="<?php echo $value[0]; ?>" max="100"></progress></td>
                    <td><?php echo $value[1]; ?></td>
                    <td><?php echo $value[2]; ?></td>
                    <td><?php echo $value[3]; ?></td>
                    <td><?php echo $value[4]; ?></td>
                    <td><a class="btn">details</a></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
           </table>
         </div><!-- end container -->
       </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end left-side-content -->

    <div class="right-side-content">
      <div id="right-container">
        <h4 class="section-title-bar">Active Ticket Stream</h4>
        <div style="overflow-y:scroll;">
        <table class="table table-hover table-borderless">
          <tbody>
          <?php $streamArray = array
            (
              array("Kenny Ginn", "Calling Client & Gather Info", "OCA Website Skin (Revised)", "Zane Fields", "07/20/12 - 9:45 am"),
              array("Steve Graham", "[Step Name]", "[Ticket Title]", "Zane Fields", "07/20/12 - 8:45 am"),
              array("Zane Fields", "Convert PSD to HTML", "WebIQ - New Module Design", "Robert Wright", "07/20/12 - 8:43 am"),
              array("Zane Fields","Investigate & Fix Error", "Golf Pigeon Error Fix", "Robert Wright", "07/20/12 - 7:23 am"),
              array("Sharon Wright", "Handle Billing Error", "Cash in Dat Site", "Steve Graham","07/20/12 - 7:23 am"),
              array("Robert Wright", "Investigate & Fix Error", "Golf Pigeon Error Fix", "Zane Fields", "07/20/12 6:23 am"),
              array("Kenny Ginn", "Calling Client & Gather Info", "OCA Website Skin (Revised)", "Zane Fields", "07/20/12 9:45 am"),
              array("Steve Graham","[Step Name]", "[Ticket Title]", "Zane Fields", "07/20/12 - 8:45 am"),
              array("Zane Fields", "Convert PSD to HTML", "WebIQ - New Module Design", "Robert Wright", "07/20/12 - 7:23 am")
            );
            foreach($streamArray as $key=>$value): ?>
                <tr>
                    <td><img src="http://0.gravatar.com/avatar/2dd503e9980a48a02241e05ef1c58b4d?s=50"/></td>
                    <td><b style="color:#10C920"><?php echo $value[0] ?></b> completed <b><?php echo $value[1]; ?></b> in ticket <b style="color:#10C920"><?php echo $value[2]; ?></b> & has passed it on to <b><?php echo $value[3]; ?></b>.<div style="font-size:.8em"><?php echo $value[4]; ?></div></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
      </div>
    </div><!-- end container -->
    </div><!-- end right-side-content -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
