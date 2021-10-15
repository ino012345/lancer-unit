// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	/* ドロワー */
	jQuery(".js-drawer").on("click", function(e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* ハンバーガーメニュー */
	$(".openbtn").click(function () {
    $(this).toggleClass('active');
		if($(this).hasClass("active")) {
			$('.header__activeLogo').fadeIn(300);
			$('.header__normalLogo').fadeOut(0);
		}else {
			$('.header__activeLogo').fadeOut(0);
			$('.header__normalLogo').fadeIn(300);
		}
    $(".header, .header__spNav").toggleClass('active');
	});

	/* アコーディオンパネル */
	//アコーディオンをクリックした時の動作
	$('.title').on('click', function() {//タイトル要素をクリックしたら
		$('.box').slideUp(500);//クラス名.boxがついたすべてのアコーディオンを閉じる
			
		var findElm = $(this).next(".box");//タイトル直後のアコーディオンを行うエリアを取得
			
		if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
			$(this).removeClass('close');//クラス名を除去    
		}else{//それ以外は
			$('.close').removeClass('close'); //クラス名closeを全て除去した後
			$(this).addClass('close');//クリックしたタイトルにクラス名closeを付与し
			$(findElm).slideDown(500);//アコーディオンを開く
		}
	});

	/* フローボタン */
	//スクロールすると上部に固定させるための設定を関数でまとめる
	function FixedAnime() {
		var scroll = $(window).scrollTop();
		if (scroll > 0){
				$('.header, .flowBtn__wrap').addClass('fixed');//fixedというクラス名を付与
				$('.header__btn, .flowBtn--faq, .flowBtn--top').fadeIn(300);
			}else{//それ以外は
				$('.header, .flowBtn__wrap').removeClass('fixed');//fixedというクラス名を除去
				$('.header__btn, .flowBtn--faq, .flowBtn--top').fadeOut(300);
			}
	}

	// 画面をスクロールをしたら動かしたい場合の記述
	$(window).scroll(function () {
		FixedAnime();/* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}
});
});
