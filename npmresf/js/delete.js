let a = document.querySelectorAll(".dele");

console.log(a[0]);
let send1 = (data) => {
  fetch("delete.php", {
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
a.forEach((e, i) => {
  console.log(a[i].id);
  console.log(a[i].name);

  e.addEventListener("click", () => {
    let c = prompt("Enter the number of plates u want to delete");
    if (c <= a[i].name) {
      a[i].name -= c;
    } else {
      alert("You havent ordered those many plates");
    }
    data = {
      dishn: a[i].id,
      quan: a[i].name,
    };
    send1(data);
    location.reload();
    //console.log(location);
  });
});
// a.forEach((e, i) => {
//   e.addEventListener("click", () => {
//     data = {
//       dishn: a[i].name,
//     };
//     send1(data);
//   });
// });
