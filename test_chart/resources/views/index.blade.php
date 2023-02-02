<!doctype html>
<html lang="en">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Chart.js example</title>
  </head>
  <body>
    <!-- <div style="width: 500px;"><canvas id="dimensions"></canvas></div><br/> -->
    <div style="width: 800px;"><canvas id="acquisitions"></canvas></div>

    <!-- <script type="module" src="dimensions.js"></script> -->
    <script type="module" src="{{ asset('/acquisitions.js') }}"></script>
  </body>
</html>
