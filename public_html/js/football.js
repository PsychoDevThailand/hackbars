$(document).ready(function() {
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

						if (plus == "+") {
							var odd = data.odd.display.split('+')
						} else {
							var odd = data.odd.display.split('-')
						}

						var color_team_home = '#000'
						var color_team_away = '#000'

						if (odd[1] == '0') {} else if (team == 'Home' && plus == '-') {
							var color_team_home = '#f60202'
						} else if (team == 'Away' && plus == '-') {
							var color_team_home = '#f60202'
						} else if (team == 'Home' && plus == '+') {
							var color_team_away = '#f60202'
						} else if (team == 'Away' && plus == '+') {
							var color_team_away = '#f60202'
						}

						if ((data.predict.winning_percent_home - data.predict.winning_percent_away) >= 35) {
							var winner = 'home'
						} else if ((data.predict.winning_percent_away - data.predict.winning_percent_home) > 34) {
							var winner = 'away'
						} else if ((data.predict.winning_percent_home - data.predict.winning_percent_away) < 35) {
							var winner = 'away'
						} else if ((data.predict.winning_percent_away - data.predict.winning_percent_home) < 34) {
							var winner = 'home'
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
	moment.locale('th');
	var date = new Date();
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
                    <center style="font-size: 20px; color: #fdbd00"><img width="35"src="${leagues[i].logo}"> <span>${leagues[i].name} </span></center><br>
                  `
								var fixture_html = ''
								for (j = 0; j < fixtures.length; j++) {
									if (fixtures[j].league_id == leagues[i].id) {

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
                          <center>
                            <span style="color: #fdbd00; font-size: 16px;">VS</span>
                            <br>
                            <span style="font-size: 14px;"> ${moment(fixtures[j].start_match).format('LT')} </span>
                            <br>
                          </center>
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

								resaults += (leageue_html + fixture_html) + '</div>'
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