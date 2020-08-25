function changeFunc() {
  var selectBox = document.getElementById("selectBox");
  var selectedValue = selectBox.options[selectBox.selectedIndex].value;
  data = {
    opt_val: selectedValue,
  };
  $.ajax({
    url: "dd.php",
    data: data,
    success: function (data1) {
      let data = JSON.parse(data1);
      console.log(data);
      let html = "";
      for (let i = 0; i < data.length; i++) {
        res_data = data[i];
        html += `<option value=${data[i].dishname}>${data[i].dishname}</ option>`;
      }
      $("#dishes").empty();
      $("#dishes").append(html);
    },
  });
}
