// MenuToggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");
let list = document.querySelectorAll(".navigation li");

load();

function load() {
  navigation.classList.add("notransition"); // Disable transitions
  main.classList.add("notransition"); // Disable transitions
  const sidebar = localStorage.getItem("sidebar");
  const principal = localStorage.getItem("main");
  if (!sidebar && !principal) {
    store("false", "false");
  } else {
    if (sidebar == "true" && principal == "true") {
      navigation.classList.toggle("active");
      main.classList.toggle("active");
    }
  }
  navigation.offsetHeight; // Trigger a reflow, flushing the CSS changes
  main.offsetHeight; // Trigger a reflow, flushing the CSS changes
  navigation.classList.remove("notransition"); // Re-enable transitions
  main.classList.remove("notransition"); // Re-enable transitions
}

toggle.addEventListener("click", (e) => {
  console.log(navigation.classList.toggle("active"));
  console.log(main.classList.toggle("active"));
  store(
    navigation.classList.contains("active"),
    navigation.classList.contains("active")
  );
});

function store(value1, value2) {
  localStorage.setItem("sidebar", value1);
  localStorage.setItem("main", value2);
}

// function load() {
//   const darkmode = localStorage.getItem("darkmode");
//   if (!darkmode) {
//     store("false");
//   } else {
//     if (darkmode == "true") {
//       body.classList.add("darkmode");
//     }
//   }
// }

// function store(value) {
//   localStorage.setItem("navegador", value);
// }

// Add hovered class in selected list item
// const arreglo = document.querySelectorAll(".navigation li");
// console.log(arreglo);
// console.log(arreglo[0]);
// arreglo[7].classList.add("hovered");

loadtemp();

function activelink() {
  let i = -1;
  list.forEach((item) => item.classList.remove("hovered"));
  this.classList.add("hovered");
  console.log(list.length);
  list.forEach((element) => {
    i++;

    if (element.classList.contains("hovered"))
      if (list.length - 1 == i) storetemp(1);
      else storetemp(i);
  });
  //   console.log(list.classList.contains("hovered"));
}

function loadtemp() {
  const valor = sessionStorage.getItem("boton");
  console.log("valor " + valor);
  if (!valor) {
    console.log("falso");
    storetemp("false");
  } else {
    if (valor > 0) {
      console.log("verdad");
      let x = valor * 1;
      console.log(x);
      list[x].classList.add("hovered");
    } else {
      console.log("mentira");
    }
  }
}
list.forEach((item) => item.addEventListener("click", activelink));

function storetemp(value) {
  sessionStorage.setItem("boton", value);
}
