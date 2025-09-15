function setListeners(parentDiv) {
  setIconListeners(parentDiv);
  setResourceListeners();
}

function setIconListeners(parentDiv) {
  let icons = parentDiv.querySelectorAll(".student-icon");
  icons.forEach(icon=> {
    icon.parentNode.addEventListener("mouseover", () => {
      icon.src = icon.src.replace("Dark", "Light");
    });
    icon.parentNode.addEventListener("mouseout", () => {
      icon.src = icon.src.replace("Light", "Dark");
    });
  });
}

function setResourceListeners() {
  document.addEventListener("click", function(e) {
    const tooltip = e.target.closest(".tooltip");
    document.querySelectorAll(".tooltip").forEach(t => {
      if (t !== tooltip) t.classList.remove("show");
    });
    if (tooltip) {
      tooltip.classList.toggle("show");
    }
  });
}