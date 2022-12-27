const participants1 = {
    name1 :"имя 1",
    surname1: "фамилия 1",
    link_instagram1: "ссылка на аккаунт в инстаграме 1",
    link_figma1: "ссылка на работу в Figma 1",
    nickname1: "ник в инстаграме 1"
  },
  participants2 = {
    name2: "имя 2",
    surname2: "фамилия 2",
    link_instagram2: "ссылка на аккаунт в инстаграме 2",
    link_figma2: "ссылка на работу в Figma 2",
    nickname2: "ник в инстаграме 2"
  },
  participants3 = {
    name3: "имя 3",
    surname3: "фамилия 3",
    link_instagram3: "ссылка на аккаунт в инстаграме 3",
    link_figma3: "ссылка на работу в Figma 3",
    nickname3: "ник в инстаграме 3"
  },
  participants4 = {
    name4: "имя 4",
    surname4: "фамилия 4",
    link_instagram4: "ссылка на аккаунт в инстаграме 4",
    link_figma4: "ссылка на работу в Figma 4",
    nickname4: "ник в инстаграме 4"
  };
var number1 = [participants1.name1, participants1.surname1, participants1.link_instagram1, participants1.link_figma1, participants1.nickname1]
var number2 = [participants2.name2, participants2.surname2, participants2.link_instagram2, participants2.link_figma2, participants2.nickname2]; 
var number3 = [participants3.name3, participants3.surname3, participants3.link_instagram3, participants3.link_figma3, participants3.nickname3]
var number4 = [participants4.name4, participants4.surname4, participants4.link_instagram4, participants4.link_figma4, participants4.nickname4]
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