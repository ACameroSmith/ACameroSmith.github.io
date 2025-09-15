function createStudentLinks(parentDiv, students) {
  let str = RESOURCES_TEMPLATE;
  let i = 20;
  for (student in students) {
    str += LINK_TEMPLATE.replace("LINK", students[student]).replace("NAME", student).replaceAll("ICON", i);
    i--;
  }
  parentDiv.innerHTML = str;
}