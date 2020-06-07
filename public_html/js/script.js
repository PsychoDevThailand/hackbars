$(document).ready(function() {

	var getUrlParameter = function getUrlParameter(sParam) {
		var sPageURL = window.location.search.substring(1),
			sURLVariables = sPageURL.split('&'),
			sParameterName,
			i;

		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			}
		}
	};


	moment.locale('th')
	var date = new Date()
	var yesterday = new Date(new Date().setDate(new Date().getDate() - 1))
	var beforeYesterday = new Date(new Date().setDate(new Date().getDate() - 2))
	var tomorrow = new Date(new Date().setDate(new Date().getDate() + 1))
	var afterTomorrow = new Date(new Date().setDate(new Date().getDate() + 2))
	var afterAfterTomorrow = new Date(new Date().setDate(new Date().getDate() + 3))
	var dataAll = [{
			label: `${beforeYesterday.getDate()} ${moment(beforeYesterday).format('MMM')}`,
			link: `${window.location.origin}?date=${moment(beforeYesterday).format('YYYY-MM-DD')}`,
			date: `${moment(beforeYesterday).format('YYYY-MM-DD')}`
		},
		{
			label: `${yesterday.getDate()} ${moment(yesterday).format('MMM')}`,
			link: `${window.location.origin}?date=${moment(yesterday).format('YYYY-MM-DD')}`,
			date: `${moment(yesterday).format('YYYY-MM-DD')}`
		},
		{
			label: `วันนี้`,
			link: window.location.origin,
			date: `${moment().format('YYYY-MM-DD')}`
		},
		{
			label: `${tomorrow.getDate()} ${moment(tomorrow).format('MMM')}`,
			link: `${window.location.origin}?date=${moment(tomorrow).format('YYYY-MM-DD')}`,
			date: `${moment(tomorrow).format('YYYY-MM-DD')}`
		},
		{
			label: `${afterTomorrow.getDate()} ${moment(afterTomorrow).format('MMM')}`,
			link: `${window.location.origin}?date=${moment(afterTomorrow).format('YYYY-MM-DD')}`,
			date: `${moment(afterTomorrow).format('YYYY-MM-DD')}`
		}
	]

	var dateTab = ''

	for (i = 0; i < dataAll.length; i++) {
		dateTab += `
      <a class="btn btn-warning btn-tab" data-date="${dataAll[i].date}">
        <input type="radio" name="options" id="option1" ${`${getUrlParameter('date')}` == dataAll[i].date ? 'checked' : ''} >${dataAll[i].label}
      </a>
    `
	}

	$("body").on("click", ".btn", function(event) {
		var $target = $(event.target)
		var event_date = $target.data('date');

		$.ajaxSetup({
			headers: {
				'Authorization': "Basic NGI0OTBkMzRjZWI0NDZhMmMwMjUwMTZmMDdlZWY0NmE6cVZHaWFNOFZld3dwdnp3bWhqV1JDOExBeWpjMkc0dHhUWXcxQVRGRVpLMUFIOGUzZEpsQmFkbnFiTXlRc0NuYVVySVAzUnNkN1RWZUJMcktjRVJhMVE9PQ=="
			}
		});

		var date = new Date(event_date)
		var new_date = moment(date.setHours(date.getHours() - 8))


		$.get(`https://api.thaiscore.co/leagues/tded?&date=${moment(new_date).format('L')}&locale=th`,
			function(data, status) {
				if (status == 'success') {
					var leagues = data

					$.get(`https://api.thaiscore.co/fixtures/tded?date=${moment(new_date).format('L')}&locale=th`,
						function(data, status) {
							if (status == 'success') {
								var resaults = ''
								var fixtures = data
								for (i = 0; i < leagues.length; i++) {
									var leageue_html = `
                  <div style='margin-bottom: 30px;'>
                    <center style="font-size: 20px; color: #fdbd00"><img width="35"src="${leagues[i].logo || leagues[i].flag}"> <span>${leagues[i].country} - ${leagues[i].name} </span></center><br>
                  `
									var fixture_html = ''
									for (j = 0; j < fixtures.length; j++) {
										if (fixtures[j].league_id == leagues[i].id && fixtures[j].odd && fixtures[j].predict) {
											if (fixtures[j]['status_present'] == 'FT') {
												status = `<center>
                                  <span style="color: #fdbd00; font-size: 14px;">FT</span>
                                  <br>
                                  <span style="font-size: 12px;">${fixtures[j]['goals_home_team']} - ${fixtures[j]['goals_away_team']}</span>
                                  <br>
                                </center>
                        `
											} else {
												status = `<center>
                                  <span style="color: #fdbd00; font-size: 16px;">VS</span>
                                  <br>
                                  <span style="font-size: 14px;"> ${moment(fixtures[j].start_match).format('LT')} </span>
                                  <br>
                                </center>
                        `
											}
											fixture_html += `
                      <a href='#' data-toggle="modal" data-target="#myModal" class='row fixture' data-value='${fixtures[j].id}' />
                        <div class="col-xs-1">
                        </div>
                        <div class="col-xs-4">
                          <center>
                            <img width="35"src="${fixtures[j].home_team.logo}">
                            <br>
                            <p>${fixtures[j].home_team.name}</p>
                          </center>
                        </div>
                        <div class="col-2">
                          ${status}
                        </div>
                        <div class="col-xs-4">
                          <center>
                            <img width="35"src="${fixtures[j].away_team.logo}">
                            <br>
                            <p>${fixtures[j].away_team.name}</p>
                          </center>
                        </div>
                        <div class="col-xs-1">
                       </div>
                      </a>
                    `
										}
									}

									if (fixture_html) {
										resaults += (leageue_html + fixture_html) + '</div>'
									}
								}

								$("#football").html(resaults)

							} else {
								$("#football").html(`
                <p style="margin: 60px">
                  <center style="font-size: 25px; color: #fff">
                    <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
                    <span class="sr-only">Loading...</span>
                    <br>
                    <br>
                    <h1 style='color: #fff'>
                    มีข้อผิดพลาดบางอย่าง
                    </h1>
                  </center>
                </p>
              `)

							}
						});

				} else {
					$("#football").html(`
          <p style="margin: 60px">
            <center style="font-size: 25px; color: #fff">
              <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
              <span class="sr-only">Loading...</span>
              <br>
              <br>
              <h1 style='color: #fff'>
              มีข้อผิดพลาดบางอย่าง
              </h1>
            </center>
          </p>
        `)
				}
			});

	})

	$("#date-tab").html(`
    <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
      ${dateTab}
    </div>
  `)

	var loading = `
    <p style="margin: 60px">
      <center style="font-size: 25px; color: #fff">
        <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
      </center>
    </p>`

	var loading_black = `
    <div style="padding-top: 80px; padding-bottom: 80px">
      <center style="font-size: 25px; color: #000">
        <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
        <br>
        <h1>วิเคราะห์ผลบอล.....</h1>
      </center>
    </div>`

	$('#football').on('click', 'a', function(e) {
		$("#myModalContent").html(loading_black)
		var fixture_id = $(this).data("value")

		setTimeout(function() {
			$.get(`https://api.thaiscore.co/fixtures/${fixture_id}`,
				function(data, status) {
					if (status == 'success') {
						var team = data.odd.display.includes("Home") ? 'Home' : 'Away'
						var plus = data.odd.display.includes("+") ? '+' : '-'
						var resault = ''

						if (plus == "+") {
							var odd = data.odd.display.split('+')
						} else {
							var odd = data.odd.display.split('-')
						}

						var color_team_home = '#000'
						var color_team_away = '#000'
						var score_team_home = 0 + parseFloat(data.goals_home_team)
						var score_team_away = 0 + parseFloat(data.goals_away_team)
						var predict = true

						if (odd[1] == '0') {

						} else if (team == 'Home' && plus == '-') {
							var color_team_home = '#f60202'
							score_team_home -= parseFloat(odd[1])
						} else if (team == 'Away' && plus == '-') {
							var color_team_home = '#f60202'
							score_team_home -= parseFloat(odd[1])
						} else if (team == 'Home' && plus == '+') {
							var color_team_away = '#f60202'
							score_team_away -= parseFloat(odd[1])
						} else if (team == 'Away' && plus == '+') {
							var color_team_away = '#f60202'
							score_team_away -= parseFloat(odd[1])
						}

						if (data.status_present == 'FT' && !predict) {
							reasult = `
                <div class="col-12">
                  <center>
                    <p class='text-danger' style="font-size: 25px; background-color: #f5f5f5;">
                      <i class="fas fa-times"></i> ไม่เข้า
                    </p>
                  </center>
                </div>
              `
						} else if (data.status_present == 'FT' && predict) {
							reasult = `
                <div class="col-12">
                  <center>
                    <p class='text-success' style="font-size: 25px; background-color: #f5f5f5;">
                      <i class="fas fa-check-circle"></i> เข้าเต็มๆ
                    </p>
                  </center>
                </div>
              `
						} else {
							reasult = ''
						}

						if ((data.predict.winning_percent_home - data.predict.winning_percent_away) >= 35) {
							var winner = 'home'
							var predict = score_team_home >= score_team_away
						} else if ((data.predict.winning_percent_away - data.predict.winning_percent_home) > 34) {
							var winner = 'away'
							var predict = score_team_away >= score_team_home
						} else if ((data.predict.winning_percent_home - data.predict.winning_percent_away) < 35) {
							var winner = 'away'
							var predict = score_team_away >= score_team_home
						} else if ((data.predict.winning_percent_away - data.predict.winning_percent_home) < 34) {
							var winner = 'home'
							var predict = score_team_home >= score_team_away
						}

						if (data.status_present == 'FT' && !predict) {
							reasult = `
                <div class="col-12">
                  <center>
                    <p class='text-danger' style="font-size: 25px; background-color: #f5f5f5;">
                      <i class="fas fa-times"></i> ไม่เข้า
                    </p>
                  </center>
                </div>
              `
						} else if (data.status_present == 'FT' && predict) {
							reasult = `
                <div class="col-12">
                  <center>
                    <p class='text-success' style="font-size: 25px; background-color: #f5f5f5;">
                      <i class="fas fa-check-circle"></i> เข้าเต็มๆ
                    </p>
                  </center>
                </div>
              `
						} else {
							reasult = ''
						}

						var predict = `
              <!-- Modal body -->
              <div class="modal-body">
              <a href='#' data-toggle="modal" data-target="#myModal" class='row fixture-modal' data-value='${data.id}' />
                <div class="col-xs-1">
                </div>
                <div class="col-xs-3">
                  <center>
                    <img width="35"src="${data.home_team.logo}">
                    <br>
                    <p style="font-size: 13px; color: ${color_team_home}">${data.home_team.name}</p>
                  </center>
                </div>
                <div class="col-xs-4">
                  <center>
                    <span style="color: #000; font-size: 13px;">อัตราต่อรอง</span>
                    <br>
                    <span style="font-size: 16px; color: #f60202"> ${odd[1]} </span>
                    <br>
                  </center>
                </div>
                <div class="col-xs-3">
                  <center>
                    <img width="35"src="${data.away_team.logo}">
                    <br>
                    <p style="font-size: 13px; color: ${color_team_away}">${data.away_team.name}</p>
                  </center>
                </div>
                <div class="col-xs-1">
                </div>
              </a>
              </div>
              <div class="modal-footer">
                <div class="col-12">
                  <center><h1>AI วิเคราะห์ให้เชียร์</h1><center>
                </div>
                <div class="col-12">
                  <center>
                    <img width="45"src="${data[`${winner}_team`].logo}">
                    <br>
                    <p style="font-size: 16px;">${data[`${winner}_team`].name}</p>
                  </center>
                </div>
                <br>
                ${reasult}
                </div>
              </div>
            `
						$("#myModalContent").html(predict)
					} else {

					}
				});
		}, 1000)
	});

	$("#football").html(loading)

	$.ajaxSetup({
		headers: {
			'Authorization': "Basic NGI0OTBkMzRjZWI0NDZhMmMwMjUwMTZmMDdlZWY0NmE6cVZHaWFNOFZld3dwdnp3bWhqV1JDOExBeWpjMkc0dHhUWXcxQVRGRVpLMUFIOGUzZEpsQmFkbnFiTXlRc0NuYVVySVAzUnNkN1RWZUJMcktjRVJhMVE9PQ=="
		}
	});

	var getUrlParameter = function getUrlParameter(sParam) {
		var sPageURL = window.location.search.substring(1),
			sURLVariables = sPageURL.split('&'),
			sParameterName,
			i;

		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			}
		}
	};

	moment.locale('th');

	var date = getUrlParameter('date') ? new Date(getUrlParameter('date')) : new Date();
	var new_date = moment(date.setHours(date.getHours() - 8))

	$.get(`https://api.thaiscore.co/leagues/tded?&date=${moment(new_date).format('L')}&locale=th`,
		function(data, status) {
			if (status == 'success') {
				var leagues = data

				$.get(`https://api.thaiscore.co/fixtures/tded?date=${moment(new_date).format('L')}&locale=th`,
					function(data, status) {
						if (status == 'success') {
							var resaults = ''
							var fixtures = data
							for (i = 0; i < leagues.length; i++) {
								var leageue_html = `
                  <div style='margin-bottom: 30px;'>
                    <center style="font-size: 20px; color: #fdbd00"><img width="35"src="${leagues[i].logo || leagues[i].flag}"> <span>${leagues[i].country} - ${leagues[i].name} </span></center><br>
                  `
								var fixture_html = ''
								for (j = 0; j < fixtures.length; j++) {
									if (fixtures[j].league_id == leagues[i].id && fixtures[j].odd && fixtures[j].predict) {
										if (fixtures[j]['status_present'] == 'FT') {
											status = `<center>
                                  <span style="color: #fdbd00; font-size: 14px;">FT</span>
                                  <br>
                                  <span style="font-size: 12px;">${fixtures[j]['goals_home_team']} - ${fixtures[j]['goals_away_team']}</span>
                                  <br>
                                </center>
                        `
										} else {
											status = `<center>
                                  <span style="color: #fdbd00; font-size: 16px;">VS</span>
                                  <br>
                                  <span style="font-size: 14px;"> ${moment(fixtures[j].start_match).format('LT')} </span>
                                  <br>
                                </center>
                        `
										}
										fixture_html += `
                      <a href='#' data-toggle="modal" data-target="#myModal" class='row fixture' data-value='${fixtures[j].id}' />
                        <div class="col-xs-1">
                        </div>
                        <div class="col-xs-4">
                          <center>
                            <img width="35"src="${fixtures[j].home_team.logo}">
                            <br>
                            <p>${fixtures[j].home_team.name}</p>
                          </center>
                        </div>
                        <div class="col-2">
                          ${status}
                        </div>
                        <div class="col-xs-4">
                          <center>
                            <img width="35"src="${fixtures[j].away_team.logo}">
                            <br>
                            <p>${fixtures[j].away_team.name}</p>
                          </center>
                        </div>
                        <div class="col-xs-1">
                       </div>
                      </a>
                    `
									}
								}

								if (fixture_html) {
									resaults += (leageue_html + fixture_html) + '</div>'
								}
							}

							$("#football").html(resaults)

						} else {
							$("#football").html(`
                <p style="margin: 60px">
                  <center style="font-size: 25px; color: #fff">
                    <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
                    <span class="sr-only">Loading...</span>
                    <br>
                    <br>
                    <h1 style='color: #fff'>
                    มีข้อผิดพลาดบางอย่าง
                    </h1>
                  </center>
                </p>
              `)

						}
					});

			} else {
				$("#football").html(`
          <p style="margin: 60px">
            <center style="font-size: 25px; color: #fff">
              <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
              <span class="sr-only">Loading...</span>
              <br>
              <br>
              <h1 style='color: #fff'>
              มีข้อผิดพลาดบางอย่าง
              </h1>
            </center>
          </p>
        `)
			}
		});


});