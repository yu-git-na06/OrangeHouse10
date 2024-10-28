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
'use strict';

{
    const main = document.getElementById('main'); // id=mainを取得する
    const thumbnails = document.querySelectorAll('.gallary-list .thumb-img'); // imgデータをすべて読み込む
    const text = document.getElementById('text'); // id=textを取得

    // 画像と説明の対応表
    const descriptions = {
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary1.jpg': '画像の説明01',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary2.JPG': '画像の説明02',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary3.JPG': '画像の説明03',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary4.JPG': '画像の説明04',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary5.JPG': '画像の説明05',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary6.JPG': '画像の説明06',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary7.JPG': '画像の説明07',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary8.JPG': '画像の説明08',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary9.jpg': '画像の説明09',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary10.JPG': '画像の説明10',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary11.JPG': '画像の説明11',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary12.JPG': '画像の説明12',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary13.JPG': '画像の説明13',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary14.JPG': '画像の説明14',
        'http://localhost:8888/orangehouse10_wordpress/wp-content/themes/OrangeHouse10_Theme/img/gallary15.jpg': '画像の説明15',
    };

    thumbnails.forEach(function(thumbnail) {
        thumbnail.addEventListener('click', function() { // 取得した要素をクリックしたとき
            let src = thumbnail.getAttribute('src'); // thumbnailの中のsrc属性を取得
            main.src = src; // mainのsrc属性を「src」に置き換える
            
            // 対応する説明文を更新
            text.querySelector('p').textContent = descriptions[src] || '説明がありません'; // 対応する説明を表示
        });
    });
};

// DOMの読み込みが完了した時点で、要素の高さを調整する
document.addEventListener("DOMContentLoaded", function () {
  // 左側の最初の画像要素を取得
  const left = document.querySelector(".gallary-main");
  // 右側のコンテナ要素を取得
  const right = document.querySelector(".gallary-right")
  // 左側の画像の高さを右側のコンテナの高さに設定
  right.style.height = left.offsetHeight + "px";
})
// ウィンドウのサイズ変更時に要素の高さを再調整する
window.onresize = function () {
  // 左側の最初の画像要素を取得
  const left = document.querySelector(".gallary-main");
  // 右側のコンテナ要素を取得
  const right = document.querySelector(".gallary-right")
  // 左側の画像の高さを右側のコンテナの高さに設定
  right.style.height = left.offsetHeight + "px";
};

//loading
//定数の定義
const loading = document.getElementById('loading'); 
//cssクラスを追加
function animation(){
    loading.classList.add('loaded');
}
//画像が読み込まれたらanimationを呼び出す
window.addEventListener('load',animation);

