let partBlock = document.querySelector("#participants");
fetch("students.json")
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    showPart(data);
  });
function showPart(students) {
  let str = `<table><tr><th>Name</th><th>Surname</th><th>Instagram link</th><th>Figma link</th><th>Nickname</th></tr>`;
  for (let i = 0; i < students.length; i++) {
    str += `<tr><td>${students[i].name}</td><td>${students[i].surname}</td><td>${students[i].link_instagram}</td><td>${students[i].link_figma}</td><td>${students[i].nickname}</td></tr>`;
  }
  str += `</table>`;
  partBlock.innerHTML = str;
}