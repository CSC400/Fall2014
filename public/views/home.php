<?php include ('includes/header.html'); ?>

      <!-- Second row -->
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 pContent">
          <h2 class="sectionTitle">Your Responses</h2>
          <table class="table table-stripeld">
            <tr><th>RFP Title</th><th>Date Filled</th><th>Status</th></tr>
       
            <?php 
            foreach($myResponses as $response){
              echo '<tr><td>' . $response["Rfpnum"] . '</td>';
              echo '<td>' . $response["title"] . '</td>';
              echo '<td>' . "$" . $response["cost"] . '</td></tr>';

            }
            ?>
          </table>

        </div>
        <div class="col-md-2"></div>

      </div>


    
    </div><!-- End of container -->
    <script type="text/javascript" src="http://persua.me/tracking.js?a=c4ca4238a0b923820dcc509a6f75849b&e=83dfaf0a5f94b944be961e5f1f881d7d"></script>

 <?php include('includes/footer.html'); ?>