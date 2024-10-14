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
        '<?=get_template_directory_uri(); ?>/img/gallary1.jpg': '画像の説明01',
        '<?=get_template_directory_uri(); ?>/img/gallary2.JPG': '画像の説明02',
        '<?=get_template_directory_uri(); ?>/img/gallary3.JPG': '画像の説明03',
        '<?=get_template_directory_uri(); ?>/img/gallary4.JPG': '画像の説明04',
        '<?=get_template_directory_uri(); ?>/img/gallary5.JPG': '画像の説明05',
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

