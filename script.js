function func() {
  let result = `<div class="container mt-3">`;
  result += `<h2 class="text-center">Winner</h2>`;
  result += `<div class="row"><div class="col-sm-4 p-3 bg-primary text-white m-auto">`;
  const rand = Math.floor(Math.random() * students.length);
  for (const key in students[rand]) {
    if (Object.hasOwnProperty.call(students[rand], key)) {
      if (key == "link_instagram" || key == "link_figma") {
        result += `<p>${key}: <strong><a href="${students[rand][key]}" class="text-white" target="_blank">${students[rand][key]}</a></strong>\n</p>`;
      } else {
        result += `<p>${key}: <strong>${students[rand][key]}</strong>\n</p>`;
      }
    }
  }
  document.getElementById("para").innerHTML = `${result}</div></div></div>`;
}

const buttonGenerate = document.getElementById("generate");
buttonGenerate.addEventListener("click", func);
