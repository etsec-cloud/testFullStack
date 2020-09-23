document.querySelector(".orange").addEventListener("click", fadeIn);

function fadeIn() {
  document.querySelector(".contentLame").classList.toggle("animated");
}

document.querySelector(".rose").addEventListener("click", fadeIn2);
function fadeIn2() {
  document.querySelector(".contentLameRose").classList.toggle("animated");
}

document.querySelector(".jaune").addEventListener("click", fadeIn3);
function fadeIn3() {
  document.querySelector(".contentLameJaune").classList.toggle("animated");
}
