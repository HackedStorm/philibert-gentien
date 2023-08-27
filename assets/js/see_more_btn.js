var isContentVisible = false; // Variable pour suivre l'état du contenu

function see_more_btn_js() {
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");
  var competence_block = document.getElementById("competences");

  if (!isContentVisible) {
    moreText.style.display = "flex";
    moreText.style.flexDirection = "column";
    moreText.style.gap = "60px";
    btnText.innerHTML = "Voir moins";

    // Restore sticky styling when content is hidden
    competence_block.style.position = "sticky";
    competence_block.style.top = "15vh";
  } else {
    moreText.style.display = "none";
    btnText.innerHTML = "Voir plus";

    // Remove sticky styling when "Voir plus" is clicked
    competence_block.style.position = "static";
  }

  isContentVisible = !isContentVisible; // Inverser l'état du contenu
}
