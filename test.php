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
      height: 200px;
    }

    #today-container {
      color: #FFFFFF;
      border-radius: 15px;
      background-color: #000000;
    }

    #container{
      border-radius: 15px;
      background-color:#CDCDCD;
    }

    #right-container{
      border-radius: 15px;
      background-color:#CDCDCD;
    }

  </style>

  <body id="wrap">
     <div class="left-side-content">
       <div class="two-cols">
         <div id="today-container">
           <h3 class="section-title-bar">Due Today</h3>
           <table>
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
                  <td><button name="details">details</button></td>
              </tr>
              <?php endforeach; ?>
           </table>
         </div>

         <div id="container">
           <h3 class="section-title-bar">My Tickets</h3>
           <table>
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
                  <td><?php echo $key; echo $value; ?></td>
              </tr>
              <?php endforeach; ?>
           </table>
         </div>
       </div>
       <div>
         <div id="container">
           <h3 class="section-title-bar">My Active Tickets</h3>
           <table>
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
                  <td><?php echo $value; ?></td>
              </tr>
              <?php endforeach; ?>
           </table>
         </div>

         <div id="container">
           <h3 class="section-title-bar">My Managed Tickets</h3>
           <table>
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
                  <td><?php echo $value; ?></td>
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
                <td><?php echo $value; ?></td>
            </tr>
            <?php endforeach; ?>
         </table>
       </div>
     </div>
  </body>


</html>
