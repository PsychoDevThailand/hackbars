$(document).ready(function() {
	var x = JSON.parse(sessionStorage.getItem('formula'));
	showdata();

	function chkresult(s) {
		if (predict == s) {
			win++;
			rate = Math.round((win / active) * 100);
			winid = 'winrate' + room;
			winhtml = rate + '%';
			document.getElementById(winid).style.color = '#ffcc00'
			document.getElementById(winid).innerHTML = winhtml;
			stack = 1;
		} else if (predict != "") {
			let winid = 'winrate' + room;
			if (active > 0) {
				if (stack < 3) {
					active--;
					stack++;
				} else {
					rate = Math.round((win / active) * 100);
					winhtml = rate + '%';
					document.getElementById(winid).style.color = '#ffcc00';
					document.getElementById(winid).innerHTML = winhtml;
					stack = 1;
				}
			} else {
				winhtml = 'รอผล';
				document.getElementById(winid).style.color = 'khaki';
				document.getElementById(winid).innerHTML = winhtml;
			}
		}
		if (x[0].data) {
			if (slot.length == x[0].data.length - 1) slot = slot.substring(1, x[0].data.length - 1);
			slot += s;
			for (let i = 0; i < x.length; i++) {
				if (slot == x[i].data.substring(0, x[i].data.length - 1)) {
					active++;
					predict = x[i].data.charAt(x[i].data.length - 1);
					break;
				}
				predict = "";
			}
		} else {
			if (slot.length == x[0].length - 1) slot = slot.substring(1, x[0].length - 1);
			slot += s;
			for (let i = 0; i < x.length; i++) {
				if (slot == x[i].substring(0, x[i].length - 1)) {
					active++;
					predict = x[i].charAt(x[i].length - 1);
					break;
				}
				predict = "";
			}
		}
	}

	function roomdata(formula) {
		for (room = 0; room < 22; room++) {
			if (room == 3 || room == 13) continue;
			data = formula[room];
			res = data['records'].split("");
			if (typeof res[0] !== 'undefined') {
				active = 0;
				win = 0;
				slot = 0;
				stack = 1;
				predict = "";
				for (let i = 0; i < 72; i++) {

					if (res[i] == 'B') {
						chkresult('b');
					} else if (res[i] == 'P') {
						chkresult('p');
					}
				}

			} else {
				let winid = 'winrate' + room;
				let winhtml = 'สับไพ่';
				document.getElementById(winid).style.color = 'rgb(255, 102, 0)';
				document.getElementById(winid).innerHTML = winhtml;
			}
		}
	}

	function showdata() {
		// let wstr = '{"sender":"client", "action":"get_baclog"}';
		// socket.send(wstr);
		$.ajax({
			url: './database/getlog_wm.php',
			type: 'POST',
			success: function(response) {
				var obj = JSON.parse(response);
				// console.log(response);
				// handle the response
				console.log(obj.data);
				roomdata(obj.data);
			},
			error: function(xhr, status) {
				// handle errors
			}
		});
	}
	setInterval(showdata, 3000);

	function idleTimer() {
		var t;
		//window.onload = resetTimer;
		// window.onmousemove = resetTimer; // catches mouse movements
		//window.onmousedown = resetTimer; // catches mouse movements
		window.onclick = resetTimer; // catches mouse clicks
		// window.onscroll = resetTimer;    // catches scrolling
		// window.onkeypress = resetTimer;  //catches keyboard actions

		function logout() {
			window.location.href = 'database/logout.php'; //Adapt to actual logout script
		}

		function reload() {
			window.location = self.location.href; //Reloads the current page
		}

		function resetTimer() {
			console.log('reset time');
			clearTimeout(t);
			t = setTimeout(logout, 1500000); // time is in milliseconds (1000 is 1 second)
			t = setTimeout(reload, 300000); // time is in milliseconds (1000 is 1 second)
		}
	}


	idleTimer();
	console.log('start');

});