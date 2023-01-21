/* =======================================================
共通
======================================================= */

// * =============== グローバルナビ =============== *

$(".openbtn").click(function () {//ボタンがクリックされたら
    $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
    $(".circle-bg").toggleClass('circleactive');//丸背景にcircleactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスを除去
    $(".circle-bg").removeClass('circleactive');//丸背景のcircleactiveクラスを除去
});

$(window).on('load resize', function(){
    var winW = $(window).width();
    var devW = 767;
    
    if (winW > devW) { //767pxより大きいとき
        $("header > div:nth-of-type(1)").removeAttr('class');
        $("header > nav").removeAttr('id');
        $("header > div:nth-of-type(2)").removeAttr('class');        
    } else {
        $("header > div:nth-of-type(1)").attr('class','openbtn');
        $("header > nav").attr('id','g-nav');
        $("header > div:nth-of-type(2)").attr('class','circle-bg');
    }

});

// * =============== PAGE TOPに戻る =============== *

function PageTopAnime() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200){//200pxスクロールしたら
        $('#page-top').removeClass('DownMove');
        $('#page-top').addClass('UpMove');
    } else {
        if($('#page-top').hasClass('UpMove')){
            $('#page-top').removeClass('UpMove');
            $('#page-top').addClass('DownMove');
        }
    }
    
    var wH = window.innerHeight; //画面の高さを取得
    var footerPos =  $('#footer').offset().top; //footerの位置を取得
    if(scroll+wH >= (footerPos+10)) {
        var pos = (scroll+wH) - footerPos+10 //スクロールの値＋画面の高さからfooterの位置＋10pxを引いた場所を取得し
        $('#page-top').css('bottom',pos);	//#page-topに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
    } else {
        if($('#page-top').hasClass('UpMove')) {
            $('#page-top').css('bottom','10px');// 下から10pxの位置にページリンクを指定
        }
    }
}

$(window).scroll(function () {
    PageTopAnime();
});

$('#page-top').click(function () {
    $('body,html').animate({
        scrollTop: 0//ページトップまでスクロール
    }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false;//リンク自体の無効化
});

// * =============== 前のページに戻る =============== *

$("#back").click(function(){
    history.back();
});

/* =======================================================
お問い合わせ
======================================================= */

function CheckEmail() {
    var input1 = $("#email01").val();
    var input2 = $("#email02").val();
    if (input1 !== input2) {
        email02.setCustomValidity("入力値が一致しません。");
    } else {
        email02.setCustomValidity("");
    }
}

/* =======================================================
通販
======================================================= */

"use strict";
{
	const canvasTmpl = document.createElement("canvas");
	// Object.assign(canvasTmpl, {width: 400, height: 400});
	const chartSettingsString = JSON.stringify({
		type: "radar",
		data: {
			labels: ["コク", "甘み", "酸味", "苦味"],
			datasets: [
				{
                    label: "味覚",
                    //背景色
                    backgroundColor: 'rgba(135, 100, 69, 1.0)', //brown2
                    //線の終端を四角にするか丸めるかの設定。デフォルトは四角(butt)。
                    borderCapStyle: 'butt',
                    //レーダー線の色
                    borderColor: 'yellow',
                    //線を破線にする
                    borderDash: [],
                    //破線のオフセット(基準点からの距離)
                    borderDashOffset: 0.0,
                    //線と線が交わる箇所のスタイル。初期値は'miter'
                    borderJoinStyle: 'miter',
                    //線の幅。ピクセル単位で指定。初期値は3。
                    borderWidth: 3,
                    //グラフを塗りつぶすかどうか。初期値はtrue。falseにすると枠線だけのグラフになります。
                    fill: true,
                    //複数のグラフを重ねて描画する際の重なりを設定する。z-indexみたいなもの。初期値は0。
                    order: 0,
                    //0より大きい値にすると「ベジェ曲線」という数式で曲線のグラフになります。初期値は0。
                    lineTension: 0
                }
			]
		},
        options: {
            scales: {
                r: {
                //グラフの最小値・最大値
                    min: 0,
                    max: 5,
                    //目盛り
                    ticks: {
                        stepSize: 1,
                        color: 'brown',
                    },
                    //背景色
                    backgroundColor: 'rgb(241, 195, 161, 0.2)', //--color-orange2
                    //グリッドライン
                    grid: {
                        drawBorder: true,
                        color: 'rgb(91, 37, 10)', //--color-brown1
                        circular: false,
                    },
                    //アングルライン
                    angleLines: {
                        color: 'rgb(91, 37, 10)', //--color-brown1
                    },
                    //各項目のラベル
                    pointLabels: {
                        color: 'rgb(91, 37, 10)', //--color-brown1
                    },
                },
            },
            //ラベル非表示
            plugins: {
                legend: {
                    display: false,
                }
            },
            responsive: true,
            maintainAspectRatio: false,
        }
    });
	var addChart = function(target, values){
		const canvas = canvasTmpl.cloneNode(false);
		target.appendChild(canvas);
		const chartSettings = JSON.parse(chartSettingsString);
		chartSettings.data.datasets[0].data = [...values];
		new Chart(canvas.getContext("2d"), chartSettings);
	}
}