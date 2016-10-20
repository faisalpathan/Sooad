  FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'msline',
    renderAt: 'chart-container',
    width: '100%',
    height: '50%',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "paletteColors": "#0075c2,#1aaf5d",
            "bgcolor": "#ffffff",
            "showBorder": "0",
            "showShadow": "0",
            "showCanvasBorder": "0",
            "usePlotGradientColor": "0",
            "legendBorderAlpha": "0",
            "legendShadow": "0",
            "showAxisLines": "0",
            "showAlternateHGridColor": "0",
            "divlineThickness": "1",
            "divLineIsDashed": "1",
            "divLineDashLen": "1",
            "divLineGapLen": "1",
            "xAxisName": "Months",
			"yAxisName": "Profit",
            "showValues": "0"
        },
        "categories": [{
            "category": [{
                "label": "1"
            }, {
                "label": "2"
            }, {
                "label": "3"
            }, {
                "label": "4"
            }, {
                "label": "5"
            }, {
                "label": "6"
            }, {
                "label": "7"
            }, {
                "label": "8"
            }, {
                "label": "9"
            }, {
                "label": "10"
            }, {
                "label": "11"
            }, {
                "label": "12"
            }
			
			]
        }],
        "dataset": [{
            "seriesname": "Product 1",
            "data": [{
                "value": "15123"
            }, {
                "value": "14233"
            }, {
                "value": "25507"
            }, {
                "value": "9110"
            }, {
                "value": "15529"
            }, {
                "value": "20803"
            }, {
                "value": "19202"
            }, {
                "value": "23650"
            }, {
                "value": "15000"
            }, {
                "value": "23202"
            }, {
                "value": "12202"
            }, {
                "value": "26202"
            }]
        }, {
            "seriesname": "Product 2",
            "data": [{
                "value": "13400"
            }, {
                "value": "12800"
            }, {
                "value": "22800"
            }, {
                "value": "12400"
            }, {
                "value": "15800"
            }, {
                "value": "800"
            }, {
                "value": "21800"
            }, {
                "value": "6202"
            }, {
                "value": "25202"
            }, {
                "value": "9202"
            }, {
                "value": "22202"
            }, {
                "value": "18202"
            }]
        }],
        "trendlines": [{
            "line": [{
                "startvalue": "17022",
                "color": "#6baa01",
                "valueOnRight": "1",
                "displayvalue": "Average"
            }]
        }]
    }
}
);
    fusioncharts.render();
});
