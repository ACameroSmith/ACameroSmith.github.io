function createStudentLinks(parentDiv, students) {
  let str = "";
  let i = 20;
  for (student in students) {
    str += LINK_TEMPLATE.replace("LINK", students[student]).replace("NAME", student).replaceAll("ICON", i);
    i--;
  }
  parentDiv.innerHTML = str;
}
function setListeners(parentDiv) {
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