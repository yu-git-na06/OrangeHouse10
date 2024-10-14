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


//クリックで画像切り替え
// 'use strict'

// {
//     const main = document.getElementById('main'); /*id=mainを取得する*/
//     const thumbnails = document.querySelectorAll('.thumb-img'); /*imgデータをすべて読み込む*/
//     thumbnails.forEach(function(thumbnail){
//         thumbnail.addEventListener('click',function(){ /*取得した要素をクリックしたとき*/
//             let src = thumbnail.getAttribute('src'); /*thumbnailの中のsrc属性を取得し、変数srcに代入する*/
//             main.src = src; /*mainのsrc属性を「src」に置き換える*/
//         });
//     });
// }; 
'use strict';

document.addEventListener('DOMContentLoaded', function() {
    const main = document.getElementById('main'); // id=mainを取得
    const thumbnails = document.querySelectorAll('.thumb-img'); // imgデータをすべて読み込む

    thumbnails.forEach(function(thumbnail) {
        thumbnail.addEventListener('click', function() { // 取得した要素をクリックしたとき
            let src = thumbnail.getAttribute('src'); // thumbnailのsrc属性を取得
            main.src = src; // mainのsrc属性を置き換える
        });
    });
});