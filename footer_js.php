<script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <?php
      $curPageName = substr(
          $_SERVER['SCRIPT_NAME'],
          strrpos($_SERVER['SCRIPT_NAME'], '/') + 1
      );
      if (
          !in_array($curPageName, ['404_error.php', 'login.php', 'map.php'])
      ) { ?>
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <?php }
      ?>
     <!-- wow animation -->
     <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <!-- sidebar -->
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
            
      <script>
         function log_sizes(timing){
  // Check for support of the PerformanceEntry.*size properties and print their values
  // if supported.
  if ("decodedBodySize" in timing)
    console.log("decodedBodySize = " + timing.decodedBodySize);
  else
    console.log("decodedBodySize = NOT supported");

  if ("encodedBodySize" in timing)
    console.log("encodedBodySize = " + timing.encodedBodySize);
  else
    console.log("encodedBodySize = NOT supported");

  if ("transferSize" in timing)
    console.log("transferSize = " + timing.transferSize);
  else
    console.log("transferSize = NOT supported");

    var compressionSavings = 1 - (timing.transferSize / timing.decodedBodySize);
  console.log('--1---',compressionSavings);

     compressionSavings = 1 - (timing.encodedBodySize / timing.decodedBodySize)
  console.log('--2---',compressionSavings);
}
function check_PerformanceEntries() {
  // Use getEntriesByType() to just get the "resource" events
  //var p = performance.getEntriesByType("resource");
  new PerformanceObserver((entryList) => {
  for (const entry of entryList.getEntriesByName('first-contentful-paint')) {
    console.log('------------FCP candidate:', entry.startTime, entry);
  }
}).observe({type: 'paint', buffered: true});

  var timing = performance.getEntriesByType('navigation');
  var transferSize=0;
  for (var i=0; i < timing.length; i++) {
    log_sizes(timing[i]);
  }
  console.log('-----',transferSize);
}
check_PerformanceEntries();

         </script>
      <script src="js/custom.js"></script>