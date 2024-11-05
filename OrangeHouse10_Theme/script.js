'use strict';

// 要素の取得
const btn = document.getElementById("btn");
const menu = document.getElementById("menu");
const modal = document.getElementById("modal");
const batsu = document.getElementById("batsu");
const main = document.getElementById('main');
const thumbnails = document.querySelectorAll('.gallary-list .thumb-img');
const text = document.getElementById('text');
const loading = document.getElementById('loading');

// 画像と説明の対応表
const descriptions = {
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/gallary1.jpg': 'ゲストハウス Orange House10',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/gallary5.JPG': '友達との旅に最適',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/gallary2.JPG': '古民家風の室内',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/gallary11.JPG': 'リビング',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/gallary3.JPG': '清潔感ある洗面台',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/sea2.JPG': '海岸でお散歩',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/sea.JPG': '目の前は釣りの名所',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/buss.JPG': 'バスのりばも目の前',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/dining.JPG': 'ダイニングで乾杯',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/gallary15.jpg': '縁側で非日常を味わう',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/about.JPG': '旅館のような室内',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/dining2.JPG': '自由に使えるLDK',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/room.JPG': 'ドライフラワーに囲まれて',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/gallary9.jpg': '本棚',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/gallary10.JPG': '花柄の食器',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/living2.JPG': 'キッチン',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/syokki.JPG': '食器完備',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/chouri.JPG': '調理器具完備',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/senmen.JPG': '洗濯機も使える',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/shower.JPG': '浴室',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/kaidan.JPG': '2階の寝室へ',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/gallary8.JPG': '寝室前の廊下',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/gallary14.JPG': '大部屋の寝室',
    'https://www.orange-house10.com/wp-content/themes/OrangeHouse10_Theme/img/gallary12.JPG': '個室も使える',
    // ...他の画像説明もここに続く...
};

// モーダルの表示と非表示
const toggleModal = (show) => {
    if (show) {
        menu.classList.add("add-header-nav");
        modal.classList.add("add-modal-sp");
    } else {
        menu.classList.remove("add-header-nav");
        modal.classList.remove("add-modal-sp");
    }
};

btn.addEventListener("click", () => toggleModal(true));
modal.addEventListener("click", () => toggleModal(false));
batsu.addEventListener("click", () => toggleModal(false));

// 画像切り替え処理
thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', () => {
        const src = thumbnail.getAttribute('src');
        main.src = src;
        text.querySelector('p').textContent = descriptions[src] || '説明がありません';
    });
});

// 高さの調整
const adjustHeight = () => {
    const left = document.querySelector(".gallary-main img");
    const right = document.querySelector(".gallary-right");
    
    // 画面サイズが800px以上の時だけ高さ調整を行う
    if (window.innerWidth > 800) {
        right.style.height = left.offsetHeight + "px";
    } else {
        // 800px以下の時は高さ調整を無効にする
        right.style.height = "";
    }
};

document.addEventListener("DOMContentLoaded", adjustHeight);
window.onresize = adjustHeight;


// フェードインアニメーション
const fadeInImage = (thumbnail) => {
    const left = document.querySelector(".gallary-main img");
    left.classList.remove("fade-in");

    setTimeout(() => {
        left.src = thumbnail.src;
        left.classList.add("fade-in");
    }, 100);
};

const thumbnailImages = document.querySelectorAll(".gallary-right img");
thumbnailImages.forEach(thumbnail => {
    thumbnail.addEventListener("click", () => fadeInImage(thumbnail));
});

// Loading animation
window.addEventListener('load', () => {
    loading.classList.add('loaded');
});

