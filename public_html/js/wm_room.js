$(document).ready(function() {

	var url = new URL(window.location.href);
	var query_string = url.search;
	var search_params = new URLSearchParams(query_string);
	var roomid = search_params.get('id');
	roomid = parseInt(roomid);
	sendWS();
	var predata = "";
	var count = 0;

	var str = "" + roomid;
	var pad = "000";
	var ans = pad.substring(0, pad.length - str.length) + str;
	document.title = "BACCARAT - " + ans;

	var x = JSON.parse(sessionStorage.getItem('formula'));
	var firstrun = true;

	ghtml = '';
	for (var i = 0; i < 38; i++) {
		ghtml += '<tr>';
		for (var j = 0; j < 60; j++) {
			if (i == 26) ghtml += '<td style="border: 1px solid rgba(255,255,255,0.2);background-color: #ff0033;width: 7px;height: 1px;"></td>';
			else ghtml += '<td style="border: 1px solid rgba(255,255,255,0.2);width: 7px;height: 7px;"></td>';
		}
		ghtml += '</tr>';
	}
	document.getElementById('graph_tbl').innerHTML = ghtml;

	var graph_row = document.getElementById("graph_tbl").rows.length;
	// document.getElementById("graph_tbl").rows[graph_row-1].cells[31].scrollIntoView(false);

	function tblStack(result) {
		let sTable = document.getElementById("tbl_stack");
		let stackRowC = sTable.rows.length;
		let stackRow = sTable.insertRow(stackRowC);
		let stackCol1 = stackRow.insertCell(0);
		let stackCol2 = stackRow.insertCell(1);
		let stackCol3 = stackRow.insertCell(2);
		stackCol1.innerHTML = stackRowC + 1;
		if (result) {
			stackCol3.innerHTML = "ชนะ";
			stackCol2.innerHTML = stack;
			stackCol3.style.backgroundColor = "#28a745";
		} else {
			stackCol3.innerHTML = "แพ้";
			stackCol2.innerHTML = '-';
			stackCol3.style.backgroundColor = "#dc3545";
		}
		let objDiv = document.getElementById("tbl_stack");
		objDiv.scrollTop = objDiv.scrollHeight;
		document.getElementById('total').innerHTML = stackRowC + 1;
		document.getElementById('win').innerHTML = win;
		document.getElementById('lose').innerHTML = active - win;
	}

	function chkresult(s) {
		if (predict == s) {
			win++;
			axisY--;
			if (axisY == g_line) axisY--;
			document.getElementById("graph_tbl").rows[axisY].cells[axisX].style.backgroundColor = "#ccff00";
			// document.getElementById("graph_tbl").rows[axisY].cells[axisX].scrollIntoView(false);
			rate = Math.round((win / active) * 100);
			document.getElementById('winrate').innerHTML = rate + "%";
			document.getElementById('prestat').innerHTML = "สถิติการถูกที่ผ่านมา " + rate + "%";
			document.getElementById('nextPre').innerHTML = "ตาถัดไป";
			axisX++;
			tblStack(true);
			stack = 1;
			// console.log("Win : " + win + " Active : " + active + " Stack : " + stack);
		} else if (predict != "") {
			axisY++;
			if (axisY > (g_line + 10)) axisY = g_line + 10;
			if (axisY == g_line) axisY++;
			document.getElementById("graph_tbl").rows[axisY].cells[axisX].style.backgroundColor = "#ff00cc";
			// document.getElementById("graph_tbl").rows[axisY].cells[axisX].scrollIntoView(false);
			if (active > 0) {
				if (stack < 3) {
					active--;
					stack++;
					document.getElementById('nextPre').innerHTML = "ตาถัดไป(ไม้ที่ " + stack + "/3)";
				} else {
					rate = Math.round((win / active) * 100);
					document.getElementById('winrate').innerHTML = rate + "%";
					document.getElementById('prestat').innerHTML = "สถิติการถูกที่ผ่านมา " + rate + "%";
					tblStack(false);
					stack = 1;
					document.getElementById('nextPre').innerHTML = "";
				}
			}
			axisX++;
			// console.log("Win : " + win + " Active : " + active + " Stack : " + stack);
		}
		if (x[0].data) {
			if (slot.length == x[0].data.length - 1) slot = slot.substring(1, x[0].data.length - 1);
			slot += s;
			for (let i = 0; i < x.length; i++) {
				if (slot == x[i].data.substring(0, x[i].data.length - 1)) {
					// console.log(slot);
					document.getElementById('nextPre').innerHTML = "ตาถัดไป(ไม้ที่ " + stack + "/3)";
					active++;
					predict = x[i].data.charAt(x[i].data.length - 1);
					return true;
				}
				predict = "";
			}
		} else {
			if (slot.length == x[0].length - 1) slot = slot.substring(1, x[0].length - 1);
			slot += s;
			for (let i = 0; i < x.length; i++) {
				if (slot == x[i].substring(0, x[i].length - 1)) {
					// console.log(slot);
					document.getElementById('nextPre').innerHTML = "ตาถัดไป(ไม้ที่ " + stack + "/3)";
					active++;
					predict = x[i].charAt(x[i].length - 1);
					return true;
				}
				predict = "";
			}

		}

		return false;
	}

	function reduceCredit(symbol) {
		$.ajax({
			url: "./database/check.php"
		}).done(function(msg) {
			if (msg == '0') {
				window.location.href = "lobby.php";
			} else {
				let picurl = "./resource/images/symbol_" + symbol + ".png";
				Swal.fire({
					imageUrl: picurl,
					animation: false,
					width: 200,
					background: 'rgba(0,0,0,0)',
					showConfirmButton: false,
					timer: 2000,
					customClass: {
						popup: 'animated flip'
					}
				});
				let strcredit = $.number(msg);
				$('#navCredit').html('<img src="resource/images/new/credit.png" style="height:100%;"> &nbsp;' + strcredit + ' &nbsp;');
				$('#showCreditM').html('Credit : ' + strcredit);
				$('#navCredit2').html('<img src="resource/images/new/credit.png" style="height:100%;"> &nbsp;' + strcredit + ' &nbsp;');
			}
		});
	}

	function showdata(data) {
		// if () {
		if (predata != data) {
			// console.log(data);
			res = data.split("");
			if (res[0] == 'w' && count != 0) window.location.reload();
			predata = data;

			banker = 0;
			player = 0;
			equal = 0;
			active = 0;
			win = 0;
			stack = 1;
			slot = "";
			row = 0;
			col = -1;
			count = 0;
			predict = "";
			waittime = 25;
			g_line = 26;
			axisY = g_line;
			axisX = 1;
			document.getElementById("tbl_stack").innerHTML = "";

			if (!firstrun) {
				counter = setInterval(timer, 1000); //1000 will  run it every 1 second
				function timer() {
					waittime = waittime - 1;
					if (waittime < 0) {
						clearInterval(counter);
						// document.getElementById('countdown').style.fontSize = '250%';
						// document.getElementById('countdown').innerHTML = "รอผล..";
						document.getElementById('countdown2').style.color = 'white';
						document.getElementById('countdown2').innerHTML = "รอผลสักครู่..";
						return;
					}
					// document.getElementById('countdown').style.fontSize = '400%';
					// document.getElementById('countdown').innerHTML = waittime;
					document.getElementById('countdown2').style.color = 'Orange';
					document.getElementById('countdown2').innerHTML = "รอบถัดไปเริ่มในอีก " + waittime + " วินาที";
				}
			}

			for (let i = 0; i < 72; i++) {
				if ((i % 6) == 0) col++;
				if (res[i] == 'B') {
					html = '<img src="./resource/images/symbol_b_small.png">';
					banker++;
					count++;
					chkresult('b');
				} else if (res[i] == 'P') {
					html = '<img src="./resource/images/symbol_p_small.png">';
					player++;
					count++;
					chkresult('p');
				} else if (res[i] == 'T') {
					html = '<img src="./resource/images/symbol_t_small.png">';
					equal++;
					count++;
					if (predict != "") {
						document.getElementById("graph_tbl").rows[axisY].cells[axisX].style.backgroundColor = "#ff3300";
						// document.getElementById("graph_tbl").rows[axisY].cells[axisX].scrollIntoView(false);
						axisX++;
					}
				} else {
					html = '<img src="" style="height: 24px;width: 24px;">';
				}

				document.getElementById("rtable").rows[i % 6].cells[col].innerHTML = html;
			}
			switch (predict) {
				case 'b':
					html = '<img src="./resource/images/symbol_b.png" style="height:50px;">';
					reduceCredit('b');
					break;
				case 'p':
					html = '<img src="./resource/images/symbol_p.png" style="height:50px;">';
					reduceCredit('p');
					break;
				case 't':
					html = '<img src="./resource/images/symbol_t.png" style="height:50px;">';
					reduceCredit('t');
					break;
				default:
					html = 'รอสูตร';
			}
			document.getElementById('predict').innerHTML = html;

			// console.log(count);

			if (count > 0) {
				document.getElementById('bstr').innerHTML = "แบงค์เกอร์&nbsp;&nbsp; " + Math.round((banker / count) * 100) + "%";
				document.getElementById('pstr').innerHTML = "เพลย์เยอร์&nbsp;&nbsp; " + Math.round((player / count) * 100) + "%";
				document.getElementById('tstr').innerHTML = "เสมอ&nbsp;&nbsp; " + Math.round((equal / count) * 100) + "%";

				document.getElementById("redbar").style.width = Math.round((banker / count) * 100) + "%";
				document.getElementById("blubar").style.width = Math.round((player / count) * 100) + "%";
				document.getElementById("grnbar").style.width = Math.round((equal / count) * 100) + "%";
			}


			document.getElementById('countB').innerHTML = banker;
			document.getElementById('countP').innerHTML = player;
			document.getElementById('countT').innerHTML = equal;

			document.getElementById('bfoot').innerHTML = 'B ' + banker;
			document.getElementById('pfoot').innerHTML = 'P ' + player;
			document.getElementById('tfoot').innerHTML = 'T ' + equal;

			firstrun = false;
		}
		// else {
		//   Swal.fire({
		//     type: 'error',
		//     title: 'คุณมี Credit ไม่พอใช้บริการนี้',
		//     text: 'กรุณาเติมเงินก่อนเข้าใช้งานต่อไปค่ะ'
		//   });
		//   setTimeout(function() {
		//     window.history.back();
		//   }, 3000);
		// }
	}

	function sendWS() {
		$.ajax({
			url: './database/getlog_wm.php',
			type: 'POST',
			success: function(response) {
				var obj = JSON.parse(response);
				var table_data = obj.data.filter(function(d) {
					return d['table_id'] == roomid;
				});
				// var b_data = obj.data[roomid - 1]['records'];
				var b_data = table_data[0]['records'];
				if (b_data === "") {
					window.location.href = 'wm_lobby.php';
				}
				showdata(b_data);
			},
			error: function(xhr, status) {
				// handle errors
			}
		});
	}
	setInterval(sendWS, 3000);

});