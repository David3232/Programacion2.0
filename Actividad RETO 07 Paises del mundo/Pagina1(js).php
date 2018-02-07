<script type="text/javascript">
new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.

  data: [
    <?php
    $conector = new mysqli("localhost", "root", "", "world");
      if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      } else {
     $resultado = $conector->query("SELECT * FROM city where countrycode='JPN'");
     foreach ($resultado as $fila) {
        // echo "{" year: ".$fila['Countrycode'].", value: ".$fila['population']. "}," ";
      }
    }
     ?>
   /*{ year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 } */
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value'],
  resize: true,
  parsetime:false
});
</script>
