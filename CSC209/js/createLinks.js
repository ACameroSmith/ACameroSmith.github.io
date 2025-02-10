function createStudentLinks(parentDiv, students) {
  let str = "";
  let i = 1;
  for (student in students) {
    str += LINK_TEMPLATE.replace("LINK", students[student]).replace("NAME", student).replace("ICON", i);
    i++;
  }
  parentDiv.innerHTML = str;
}