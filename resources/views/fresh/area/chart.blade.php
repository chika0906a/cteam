<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>結果表示</title>
</head>
<body>
    <h1>売上</h1>
    <canvas id="myChart"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.2/dist/Chart.min.js"></script>
    <script>
</script>
	<!-- グラフを描画 -->
    <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
        type: 'pie',
 
       // データを指定
        data: {
            labels: foreach($itemsarray as $key => $value){
              echo $key;
            }
            datasets: [{
                "data": foreach($itemsarray as $key => $value){
                  echo $value;
                }
                "backgroundColor":["rgb(255, 99, 132)",
                                   "rgb(54, 162, 235)",
                                   "rgb(255, 205, 86)",
                                   "rgb(128, 128, 128)",
            }]
        },
    
        // 設定はoptionsに記述
        options: {
          //タイトル
          title: {
            display: true,
            text: foreach($name as $key => $value){
              echo $key;
            }
          }
        }
});
    </script>
</body>
</html>