<div >
    <canvas id="myChart" style="width: 100% !important;height: 100% !important;"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'polarArea',
    data: {
      labels: ['TI','SI'],
      datasets: [{
        label: '# of Votes',a
        data: [<?=$ti?>,<?=$si?>],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
