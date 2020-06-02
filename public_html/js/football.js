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
  console.log(date);
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