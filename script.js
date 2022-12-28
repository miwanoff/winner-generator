// const students = [   
//   {
//     name: "имя 1",
//     surname: "фамилия 1",
//     link_instagram: "ссылка на аккаунт в инстаграме 1",
//     link_figma: "ссылка на работу в Figma 1",
//     nickname: "ник в инстаграме 1",
//   },
//   {
//     name: "имя 2",
//     surname: "фамилия 2",
//     link_instagram: "ссылка на аккаунт в инстаграме 2",
//     link_figma: "ссылка на работу в Figma 2",
//     nickname: "ник в инстаграме 2",
//   },
//   {
//     name: "имя 3",
//     surname: "фамилия 3",
//     link_instagram: "ссылка на аккаунт в инстаграме 3",
//     link_figma: "ссылка на работу в Figma 3",
//     nickname: "ник в инстаграме 3",
//   },
//   {
//     name: "имя 4",
//     surname: "фамилия 4",
//     link_instagram: "ссылка на аккаунт в инстаграме 4",
//     link_figma: "ссылка на работу в Figma 4",
//     nickname: "ник в инстаграме 4",
//   },

// ];


function func() {
let result = `<div class="container mt-3">`;
result += `
<div class="alert alert-primary">
<h2>Winner</h2>
</div>
</div>`;
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
