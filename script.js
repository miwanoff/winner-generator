const students = {
    participants: [
      {
        name: "имя 1",
        surname: "фамилия 1",
        link_instagram: "ссылка на аккаунт в инстаграме 1",
        link_figma: "ссылка на работу в Figma 1",
        nickname: "ник в инстаграме 1",
      },
      {
        name: "имя 2",
        surname: "фамилия 2",
        link_instagram: "ссылка на аккаунт в инстаграме 2",
        link_figma: "ссылка на работу в Figma 2",
        nickname: "ник в инстаграме 2",
      },
      {
        name: "имя 3",
        surname: "фамилия 3",
        link_instagram: "ссылка на аккаунт в инстаграме 3",
        link_figma: "ссылка на работу в Figma 3",
        nickname: "ник в инстаграме 3",
      },
      {
        name: "имя 4",
        surname: "фамилия 4",
        link_instagram: "ссылка на аккаунт в инстаграме 4",
        link_figma: "ссылка на работу в Figma 4",
        nickname: "ник в инстаграме 4",
      },
    ],
  };
  const rand = Math.floor(Math.random() * students.participants.length);
  let result = "";
    function func(){ 
  for (const key in students.participants[rand]) {
    if (Object.hasOwnProperty.call(students.participants[rand], key)) {
      result += `<p>${key}: ${students.participants[rand][key]}\n</p>`;
    }
  }
  document.getElementById("para").innerHTML = result; 
  };