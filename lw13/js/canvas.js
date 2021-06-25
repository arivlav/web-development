function getRadians(degrees) {
	return (Math.PI / 180) * degrees;
}
window.onload = function() {
  let canvas = document.getElementById("�anvas1");
  let ctx1 = canvas1.getContext("2d"); 
  // Ноги
  ctx1.beginPath(); 
  ctx1.fillStyle = "#287f87";
  ctx1.fillRect(210, 210, 80, 40);
  ctx1.beginPath(); 
  // Ступни
  ctx1.fillStyle = "#342f36";
  ctx1.moveTo(199,250);
  ctx1.bezierCurveTo(210,240,230,235,250,250); 
  ctx1.fill();
  ctx1.moveTo(240,250);
  ctx1.bezierCurveTo(260,235,280,235,300,250); 
  ctx1.fill();
  // Туловище
  ctx1.beginPath(); 
  ctx1.fillStyle = "#ff5e16";
  ctx1.moveTo(210,140);
  ctx1.bezierCurveTo(110,270,390,270,290,140); 
  ctx1.fill();
  // Руки
  ctx1.beginPath(); 
  ctx1.strokeStyle = "#000";
  ctx1.moveTo(210,180);
  ctx1.lineTo(200, 220); 
  ctx1.stroke();
  ctx1.strokeStyle = "#000";
  ctx1.moveTo(290,180);
  ctx1.lineTo(300, 220); 
  ctx1.stroke();
  ctx1.beginPath(); 
  ctx1.fillStyle = "#3bcf3c";
  ctx1.arc(195, 210, 13, 0, 2*Math.PI);
  ctx1.fill();
  ctx1.arc(206, 208, 5, 0, 2*Math.PI);
  ctx1.fill();
  ctx1.beginPath(); 
  ctx1.arc(305, 210, 13, 0, 2*Math.PI);
  ctx1.fill();
  ctx1.arc(294, 206, 6, 0, 2*Math.PI);
  ctx1.fill();
  // Шарф
  ctx1.fillStyle = "#3bcf3c";
  ctx1.moveTo(210,140);
  ctx1.bezierCurveTo(220,185,290,180,300,133); 
  ctx1.fill();
  // Куртка
  ctx1.beginPath();
  ctx1.strokeStyle = "#000";
  ctx1.moveTo(250,170);
  ctx1.lineTo(250,238);
  ctx1.stroke();
  // Карманы
  ctx1.lineWidth = 1;
  ctx1.moveTo(240,180);
  ctx1.lineTo(240,210);
  ctx1.lineTo(222,210);
  ctx1.lineTo(222,180);
  ctx1.lineTo(231,193);
  ctx1.lineTo(240,180);
  ctx1.lineTo(222,180);
  ctx1.stroke();
  ctx1.moveTo(280,180);
  ctx1.lineTo(280,210);
  ctx1.lineTo(262,210);
  ctx1.lineTo(262,180);
  ctx1.lineTo(271,193);
  ctx1.lineTo(280,180);
  ctx1.lineTo(262,180);
  ctx1.stroke();
  //  Голова  
  ctx1.beginPath();
  ctx1.fillStyle = "#fdecc0";
  ctx1.arc(250, 100, 60, 0, 2*Math.PI);
  ctx1.fill();
  // Шапка
  ctx1.beginPath(); 
  ctx1.fillStyle = "#4dc43d";
  ctx1.ellipse(188, 88, 13, 30, Math.PI / 9, 0, 2 * Math.PI);
  ctx1.fill();
  ctx1.ellipse(312, 88, 13, 30, 1.9 * Math.PI, 0, 2 * Math.PI);
  ctx1.fill();
  ctx1.beginPath(); 
  ctx1.fillStyle = "#4dc43d";
  ctx1.moveTo(190, 80);
  ctx1.lineTo(190, 30);
  ctx1.lineTo(195, 25);
  ctx1.lineTo(305, 25);
  ctx1.lineTo(310, 30);
  ctx1.lineTo(310, 80);
  ctx1.fill();
  ctx1.beginPath();
  ctx1.fillStyle = "#00ad51";
  ctx1.fillRect(200, 49, 100, 30);
  //  Глаза
  ctx1.beginPath(); 
  ctx1.fillStyle = "#fff";
  ctx1.ellipse(230, 100, 15, 20, Math.PI / 5, 0, 2 * Math.PI);
  ctx1.fill();
  ctx1.beginPath();
  ctx1.fillStyle = "#fff";
  ctx1.ellipse(270, 100, 15, 20, Math.PI * 1.8, 0, 2 * Math.PI);
  ctx1.fill();
  // Брови
  ctx1.beginPath();
  ctx1.strokeStyle = "#000";
  ctx1.lineWidth = 2;
  ctx1.moveTo(210, 86);
  ctx1.lineTo(230, 68);
  ctx1.stroke();
  ctx1.moveTo(290, 86);
  ctx1.lineTo(270, 68);
  ctx1.stroke();
  // Зрачки
  ctx1.beginPath();
  ctx1.fillStyle = "#000";
  ctx1.arc(263, 100, 2, 0, 2*Math.PI);
  ctx1.fill();
  ctx1.beginPath();
  ctx1.fillStyle = "#000";
  ctx1.arc(237, 100, 2, 0, 2*Math.PI);
  ctx1.fill();
  // Рот
  ctx1.beginPath();
  ctx1.moveTo(250, 150);
  ctx1.lineTo(235, 135);
  ctx1.lineTo(265, 133);
  ctx1.fillStyle = "#000";
  ctx1.fill();
  ctx1.beginPath();
  ctx1.moveTo(236, 136);
  ctx1.lineTo(243, 136);
  ctx1.lineTo(243, 140);
  ctx1.fillStyle = "#fff";
  ctx1.fill();
  ctx1.beginPath();
  ctx1.moveTo(244, 136);
  ctx1.lineTo(252, 135);
  ctx1.lineTo(252, 140);
  ctx1.lineTo(244, 140);
  ctx1.fillStyle = "#fff";
  ctx1.fill();
  ctx1.beginPath();
  ctx1.moveTo(253, 136);
  ctx1.lineTo(261, 135);
  ctx1.lineTo(258, 140);
  ctx1.lineTo(253, 140);
  ctx1.fillStyle = "#fff";
  ctx1.fill();

  let canvas2 = document.getElementById("canvas2");
  let ctx2 = canvas2.getContext("2d"); 
  // Ноги
  ctx2.beginPath(); 
  ctx2.fillStyle = "#3a77c6";
  ctx2.fillRect(210, 210, 80, 40);
  ctx2.beginPath(); 
  // Ступни
  ctx2.fillStyle = "#342f36";
  ctx2.moveTo(199,250);
  ctx2.bezierCurveTo(210,240,230,235,250,250); 
  ctx2.fill();
  ctx2.moveTo(240,250);
  ctx2.bezierCurveTo(260,235,280,235,300,250); 
  ctx2.fill();
  // Туловище
  ctx2.beginPath(); 
  ctx2.fillStyle = "#d06d5d";
  ctx2.moveTo(210,140);
  ctx2.bezierCurveTo(110,270,390,270,290,140); 
  ctx2.fill();
  // Руки
  ctx2.beginPath(); 
  ctx2.strokeStyle = "#000";
  ctx2.moveTo(210,180);
  ctx2.lineTo(200, 220); 
  ctx2.stroke();
  ctx2.strokeStyle = "#000";
  ctx2.moveTo(290,180);
  ctx2.lineTo(300, 220); 
  ctx2.stroke();
  ctx2.beginPath(); 
  ctx2.fillStyle = "#f92142";
  ctx2.arc(195, 210, 13, 0, 2 * Math.PI);
  ctx2.fill();
  ctx2.arc(206, 208, 5, 0, 2*Math.PI);
  ctx2.fill();
  ctx2.beginPath(); 
  ctx2.arc(305, 210, 13, 0, 2*Math.PI);
  ctx2.fill();
  ctx2.arc(294, 206, 6, 0, 2*Math.PI);
  ctx2.fill();
  // Шарф
  ctx2.fillStyle = "#f92142";
  ctx2.moveTo(210,140);
  ctx2.bezierCurveTo(220,185,290,180,300,133); 
  ctx2.fill();
  // Куртка
  ctx2.beginPath();
  ctx2.strokeStyle = "#000";
  ctx2.moveTo(250,170);
  ctx2.lineTo(250,238);
  ctx2.stroke();
  // Пуговицы
  ctx2.beginPath();
  ctx2.fillStyle = "#000";
  ctx2.arc(242, 180, 2, 0, 2*Math.PI);
  ctx2.arc(242, 200, 2, 0, 2*Math.PI);
  ctx2.arc(242, 220, 2, 0, 2*Math.PI);
  ctx2.fill();
  //  Голова  
  ctx2.beginPath();
  ctx2.fillStyle = "#fdecc0";
  ctx2.arc(250, 100, 60, 0, 2*Math.PI);
  ctx2.fill();
  ctx2.beginPath();
  ctx2.fillStyle = "#3776c2";
  ctx2.arc(250, 100, 60, 1.13*Math.PI, 1.87*Math.PI);
  ctx2.fill();
  ctx2.beginPath();
  ctx2.strokeStyle = "#f1263b";
  ctx2.lineWidth = 14;
  ctx2.arc(250, 200, 130, 1.32 * Math.PI, 1.68 * Math.PI);
  ctx2.stroke();
  ctx2.clearRect(140, 50, 50, 50);
  ctx2.clearRect(310, 50, 50, 50);
  ctx2.beginPath();
  ctx2.fillStyle = "#f1263b";
  ctx2.arc(245, 38, 10, 0, 2*Math.PI);
  ctx2.fill();
  //  Глаза
  ctx2.beginPath(); 
  ctx2.fillStyle = "#fff";
  ctx2.ellipse(230, 100, 15, 20, Math.PI / 5, 0, 2 * Math.PI);
  ctx2.fill();
  ctx2.beginPath();
  ctx2.fillStyle = "#fff";
  ctx2.ellipse(270, 100, 15, 20, Math.PI * 1.8, 0, 2 * Math.PI);
  ctx2.fill();
  ctx2.beginPath();
  ctx2.strokeStyle = "#000";
  ctx2.lineWidth = 2;
  ctx2.moveTo(210, 86);
  ctx2.lineTo(230, 68);
  ctx2.stroke();
  ctx2.moveTo(290, 86);
  ctx2.lineTo(270, 68);
  ctx2.stroke();
  // Зрачки
  ctx2.beginPath();
  ctx2.fillStyle = "#000";
  ctx2.arc(263, 100, 2, 0, 2*Math.PI);
  ctx2.fill();
  ctx2.beginPath();
  ctx2.fillStyle = "#000";
  ctx2.arc(237, 100, 2, 0, 2*Math.PI);
  ctx2.fill();
  // Рот
  ctx2.beginPath();
  ctx2.moveTo(250, 150);
  ctx2.lineTo(235, 135);
  ctx2.lineTo(265, 133);
  ctx2.fillStyle = "#000";
  ctx2.fill();
  ctx2.beginPath();
  ctx2.moveTo(236, 136);
  ctx2.lineTo(243, 136);
  ctx2.lineTo(243, 140);
  ctx2.fillStyle = "#fff";
  ctx2.fill();
  ctx2.beginPath();
  ctx2.moveTo(244, 136);
  ctx2.lineTo(252, 135);
  ctx2.lineTo(252, 140);
  ctx2.lineTo(244, 140);
  ctx2.fillStyle = "#fff";
  ctx2.fill();
  ctx2.beginPath();
  ctx2.moveTo(253, 136);
  ctx2.lineTo(261, 135);
  ctx2.lineTo(258, 140);
  ctx2.lineTo(253, 140);
  ctx2.fillStyle = "#fff";
  ctx2.fill();

}