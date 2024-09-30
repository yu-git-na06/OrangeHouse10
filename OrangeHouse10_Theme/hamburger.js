// 要素を取得 ※1
var btn = document.getElementById("btn");
var menu = document.getElementById("menu");
var modal = document.getElementById("modal");
var batsu = document.getElementById("batsu");
""
// ボタンがクリックされたらclassを追加 ※2
btn.addEventListener("click",function(){
   menu.classList.add("add-header-nav");
   modal.classList.add("add-modal-sp");
});

// モーダルがクリックされたらclassを削除 ※3
modal.addEventListener("click",function(){
   menu.classList.remove("add-header-nav");
   modal.classList.remove("add-modal-sp");
});

//バツボタンがクリックされたらclassを削除
batsu.addEventListener("click",function(){
   menu.classList.remove("add-header-nav");
   modal.classList.remove("add-modal-sp");
});