let x = document.querySelectorAll(".common");
let q = document.querySelectorAll(".qty");

let sedn = (data) => {
  fetch("corder.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  })
    .then((res) => {
      console.log(res);
      return res.json();
    })
    .then((data) => {
      console.log(data);
    })
    .catch((error) => console.log(error));
};

x.forEach((e, i) => {
  e.addEventListener("click", () => {
    data = {
      quantity: q[i].value,
      name: e.id,
      type: e.name,
    };
    sedn(data);
    fun(data);
    q[i].value = "";
  });
});

function fun(data) {
  if (data.quantity == "") {
    alert("Select quantity");
  } else {
    alert("Order taken");
  }
  console.log(x);
}
