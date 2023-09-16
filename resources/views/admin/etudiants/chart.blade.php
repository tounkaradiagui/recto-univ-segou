<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Graphique</h1></center>
    <div id="container"></div>
</body>
    <script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" >
        var datas = <?php echo json_encode($getEtudiants) ?>;

        Highcharts.chart('container', {
            title:{
                text:'Augmentation "Etudiant'
            },
            subtitle:{
                text:'Source: Rectorat Univ Ségou '
            },
            xAxis:{
                categories:['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aoû', 'Sept', 'Oct', 'Nov', 'Déc']
            },
            yAxis:{
                title:"Nombre de nouveaux étudiants"
            },
            legend:{
                layout:'vertical',
                align:'right',
                verticalAlign:'middle'
            },
            plotOptions:{
                series:{
                    allowPointSelect:true
                }
            },
            series:[{
                name:'Nouveaux étudiants',
                data:datas
            }],
            responsive:{
                rules:[
                    {
                        condition:{
                            maxWidth:500
                        },
                        chartOptions:{
                            legend:{
                                layout:'horizontal',
                                align:'center',
                                verticalAlign:'bottom'
                            }
                        }
                    }
                ]
            }


        })
    </script>
</html>
