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

// Sytème accordéon donné par chatGPT
document.addEventListener("DOMContentLoaded", function () {
  const questions = document.querySelectorAll(".question");

  questions.forEach((question) => {
    question.addEventListener("click", () => {
      const currentReponse = question.nextElementSibling;

      // Si la réponse est déjà visible, on la ferme
      const isOpen = currentReponse.style.display === "block";

      // Fermer toutes les réponses
      document.querySelectorAll(".reponse").forEach((reponse) => {
        reponse.style.display = "none";
      });

      // Si elle n'était pas ouverte, on l'affiche
      if (!isOpen) {
        currentReponse.style.display = "block";
      }
    });
  });
});
