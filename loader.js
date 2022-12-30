let partBlock = document.querySelector("#participants");
let students = [];
fetch("students.json")
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    students = data;
    showPart(data);
  });
function showPart(students) {
  let str = `<table class="table table-striped table-hover"><thead><tr><th>Name</th><th>Surname</th><th>Instagram link</th><th>Figma link</th><th>Nickname</th></tr></thead><tbody>`;
  for (let i = 0; i < students.length; i++) {
    str += `<tr><td>${students[i].name}</td><td>${students[i].surname}</td><td><a href="${students[i].link_instagram}" target="_blank">${students[i].link_instagram}</a></td><td><a href="${students[i].link_figma}" target="_blank">${students[i].link_figma}</a></td><td>${students[i].nickname}</td></tr>`;
  }
  str += `</tbody></table>`;
  partBlock.innerHTML = str;
}
