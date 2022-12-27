const participants1 = {
    name :"имя 1",
    surname: "фамилия 1",
    link_instagram: "ссылка на аккаунт в инстаграме 1",
    link_figma: "ссылка на работу в Figma 1",
    nickname: "ник в инстаграме 1"
  },
  participants2 = {
    name: "имя 2",
    surname: "фамилия 2",
    link_instagram: "ссылка на аккаунт в инстаграме 2",
    link_figma: "ссылка на работу в Figma 2",
    nickname: "ник в инстаграме 2"
  },
  participants3 = {
    name: "имя 3",
    surname: "фамилия 3",
    link_instagram: "ссылка на аккаунт в инстаграме 3",
    link_figma: "ссылка на работу в Figma 3",
    nickname: "ник в инстаграме 3"
  },
  participants4 = {
    name: "имя 4",
    surname: "фамилия 4",
    link_instagram: "ссылка на аккаунт в инстаграме 4",
    link_figma: "ссылка на работу в Figma 4",
    nickname: "ник в инстаграме 4"
  };
var number1 = [participants1.name, participants1.surname, participants1.link_instagram, participants1.link_figma, participants1.nickname]
var number2 = [participants2.name, participants2.surname, participants2.link_instagram, participants2.link_figma, participants2.nickname] 
var number3 = [participants3.name, participants3.surname, participants3.link_instagram, participants3.link_figma, participants3.nickname]
var number4 = [participants4.name, participants4.surname, participants4.link_instagram, participants4.link_figma, participants4.nickname]
number = [number1, number2, number3, number4];
let a = Math.floor(Math.random() * number.length);
let number10 = number[a];

    function func(){ 
       const res_array = []; 
       for(let i in number) { 
          number10 = number[a]
          res_array.push([number10[i]]); 
       }; 
       res_array.push([number10[4]]); 
       document.getElementById("para").innerHTML = res_array; 
       alert(a)
 }; 