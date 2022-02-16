<script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
          <!-- chart js -->
          <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
  
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>      
      <script>
         function log_sizes(perfEntry){
  return  perfEntry.transferSize;
}
function check_PerformanceEntries() {
  // Use getEntriesByType() to just get the "resource" events
  var p = performance.getEntriesByType("resource");
  var transferredBytes=0;
  for (var i=0; i < p.length; i++) {
   transferredBytes+=log_sizes(p[i]);
  }
  console.log('--1--------',transferredBytes);

transferredBytes= performance
  .getEntriesByType("resource")
  .map((x) => x.decodedBodySize)
  .reduce((a, b) => (a + b), 0);
console.log('----2------',transferredBytes);

if ('performance' in window) {

// total size of all JavaScript files
let scriptTotalSize = 0;

// array of script names, load times, and uncompressed file sizes
const script = performance.getEntriesByType('resource')
  .filter( r => r.initiatorType === 'script')
  .map( r => {

    let size = r.decodedBodySize;
    scriptTotalSize += size;

    return {
      name: r.name,
      load: r.duration,
      size
    };

  });

}

if ('performance' in window) {
// total size of all JavaScript files
let scriptTotalSize = 0;

// array of script names, load times, and uncompressed file sizes
const script = performance.getEntriesByType('resource')
  .filter( r => r.initiatorType === 'script')
  .map( r => {

    let size = r.decodedBodySize;
    scriptTotalSize += size;

    return {
      name: r.name,
      load: r.duration,
      size
    };

  });
  console.log('----3------',scriptTotalSize);

}
}
check_PerformanceEntries();
      </script>