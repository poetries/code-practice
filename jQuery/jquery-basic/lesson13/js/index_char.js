	$(function () {
		//pie
		$('#pie').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false,
				type: 'pie',
				margin:[0,0,0,0],
				width:'185',
				height:'185'

			},
			title: {
				text: '学习highchar图表'
			},
			tooltip: {
				pointFormat: '<b>{point.percentage:.1f}%</b>'
				
			},
			title: false,//去掉标题
			credits:{//去掉版权信息
				enabled:false
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					innerSize:'60',
					borderWidth:'0',
					dataLabels: {
						enabled: false,
						format: '<b>{point.name}</b>: {point.percentage:.1f} %',
						style: {
							color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
						}
					}
				}
			},
			series: [{
				name: false,
				colorByPoint: true,
				data: [{
					name: '活期',
					y: 118400
				}, {
					name: '定期理财',
					y: 64000,
					sliced: false,
					selected: true
				}, {
					name: '定期',
					y: 64000
				}, {
					name: '基金',
					y: 48000
				}, {
					name: '国债',
					y: 25600
				}]
			}]
		});

		//line

		$('#line').highcharts({
			chart: {
					type: 'area',
					width:728,
					height:230,
					spacingLeft:50,
					spacingRight:50,
					spacingTop:20
				},
			title: {
					text: '资产走势图',
					style:{fontFamily:'微软雅黑',fontSize:'16px',fontWeight:'bold'}
				},
			subtitle: false,
			xAxis: {
					lineColor:'#D8D8D8',
					gridLineColor:'#D8D8D8',
					categories:['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月','1月','2月'],
					tickmarkPlacement:'on',
					title: {
						enabled: false
					}
				},
			yAxis: {
					title: {
						enabled: false
					},
					lineWidth:'1',
					lineColor:'#D8D8D8',
					gridLineColor:'#D8D8D8',
					ceiling:320000,
					endOnTick:true,
					labels: {
						formatter: function() {
							return this.value / 10000+'万';
						}
					}
				},
			
			tooltip: {
					shared:true,
					valueDecimals:2,
					valueSuffix:'元',
					backgroundColor:'#FDF5C7',
					borderWidth:1,
					borderColor:'#E5BB30',
					borderRadius:0,
					shadow:false
				},
			legend: {
				enabled:false,
			},
			credits:false,
			plotOptions: {
					area: {
						stacking:'normal',
						lineColor:'#FFB80C',
						lineWidth: 2,		
						states:{
							hover:{
								lineWidth: 2
							}
						},
						marker: {					//小圆点
							lineWidth:2,
							lineColor:'#FFB80C',
							fillColor:'#fff',
							states:{
								hover:{
									fillColor:'#FFB80C',
									lineColor:'#FFB80C',
									radius:4
								}
							}
						},
						fillColor:{
							linearGradient: [0, 0, 0, 150],
							stops: [
								[0, 'rgba(255, 184, 11,.8)'],
								[1, 'rgba(255, 255, 255,.5)']
							]
						}
					}
				},
			series: [{
					name: '总资产',
					data: [120000.00,140000.00,150000.00,180000.00,160000.00,240000.00,320000.00,280000.00,220000.00,240000.00,180000.00,150000.00,250000.00,280000.00]
				}]
		});
	});