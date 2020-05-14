$(document).ready(function() {
  $.ajax({
    url: 'http://103.233.194.90/api-vivo/api_joker.php',
    type: 'GET',
    success: function (response) {
      var object = JSON.parse(response);
    },
    error: function (xhr, status) {}
  });
});
