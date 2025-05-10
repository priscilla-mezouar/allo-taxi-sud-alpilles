const openNav = document.querySelector("#opennav");
const closeNav = document.querySelector("#closenav");
const nav = document.querySelector("nav");

openNav.addEventListener("click", () => {
  nav.style.display = "flex";
  openNav.style.display = "none";
  closeNav.style.display = "block";
});

closeNav.addEventListener("click", () => {
  nav.style.display = "none";
  closeNav.style.display = "none";
  openNav.style.display = "flex";
});
