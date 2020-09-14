<?
use practically\chartjs\Chart;
//use onmotion\apexcharts\ApexchartsWidget;

echo Chart::widget([
    'type' => Chart::TYPE_BAR,
    'datasets' => [
        [
            'data' => [
                'Label 1' => 10,
                'Label 2' => 20,
                'Label 3' => 30
            ]
        ]
    ]
]);



//echo Chart::widget([
//    'type' => Chart::TYPE_BAR,
//    'datasets' => [
//        [
//            'query' => Model::find()
//                ->select('type')
//                ->addSelect('count(*) as data')
//                ->groupBy('type')
//                ->createCommand(),
//            'labelAttribute' => 'type'
//        ]
//    ]
//]);

?>
<h1>salom</h1>

