function createStudentLinks(parentDiv, students) {
  let str = "";
  let i = 0;
  for (student in students) {
    str += LINK_TEMPLATE.replace("LINK", students[student]).replace("NAME", student).replaceAll("ICON", RANDOM_NUMS[i]);
    i++;
  }
  parentDiv.innerHTML = str;
}