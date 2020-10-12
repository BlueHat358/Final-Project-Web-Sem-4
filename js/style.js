$(window).on('load', function(){
	$('.quote-title').each(function(i){
		setTimeout(function(){
			$('.quote-title').eq(i).addClass('show');
		}, 1000 * (i+1));
	});

	$('.content-animate').each(function(i){
		setTimeout(function(){
			$('.content-animate').eq(i).addClass('show1');
		}, 2500);
	});
	$('.content-animate1').each(function(i){
		setTimeout(function(){
			$('.content-animate1').eq(i).addClass('show1');
		}, 3500);
	});

	$('.image-source').mouseover(function(){
		var arr = Array();
		var i = $('.image-source').index(this);
		var source = $('.image-source').attr('src');
		var a = $('.image-source').each(function(i){
			arr.push($('.image-source').eq(i).attr('src'));
		});
		$('.image-show').addClass("show");
		$('.image-show').attr("src", arr[i]);
		console.log(source);
	});

	$('.image-content').mouseleave(function(){
		$('.image-show').removeClass("show");
		console.log("image not overred");
	})
});

$(window).on('scroll', function(){
	var x = window.matchMedia("(max-device-width: 480px)");
	scrollFunction(x);
	x.addListener(scrollFunction);

	var top = $(this).scrollTop();
// 	console.log(top);
	if(top > 700){
		$('.fasilitas1').each(function(i){
			setTimeout(function(){
				$('.fasilitas1').eq(i).addClass('show2');
			}, 500);
		});
	
		$('.fasilitas2').each(function(i){
			setTimeout(function(){
				$('.fasilitas2').eq(i).addClass('show2');
			}, 1500);
		});
	
		$('.fasilitas3').each(function(i){
			setTimeout(function(){
				$('.fasilitas3').eq(i).addClass('show2');
			}, 1000);
		});
	}

	if(top < 700){
		$('.fasilitas1').each(function(i){
			setTimeout(function(){
				$('.fasilitas1').eq(i).removeClass('show2');
			}, 500);
		});
	
		$('.fasilitas2').each(function(i){
			setTimeout(function(){
				$('.fasilitas2').eq(i).removeClass('show2');
			}, 1500);
		});
	
		$('.fasilitas3').each(function(i){
			setTimeout(function(){
				$('.fasilitas3').eq(i).removeClass('show2');
			}, 1000);
		});
	}

});

// Efek NavBar
function scrollFunction(x){
	if(x.matches){
		if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
			document.getElementById("navbar").style.background = "rgba(31, 28, 61,1)";
// 			document.getElementById("navbar").style.paddingLeft = "0";
// 			document.getElementById("navbar").style.paddingBottom = "0px";
// 			document.getElementById("navbar").style.paddingTop = "0px";
// 			document.getElementById("header-menu").style.marginTop = "0";
// 			document.getElementById("header-menu").style.padding = "0px";
		}else{
			document.getElementById("navbar").style.background = "rgba(31, 28, 61,0)";
// 			document.getElementById("navbar").style.padding = "0";
// 			document.getElementById("text-logo").style.marginTop = "5px";
// 			document.getElementById("text-logo").style.width = "150px";
// 			document.getElementById("img-logo").style.paddingTop = "0px";
		}
	}else{
		if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
			document.getElementById("navbar").style.background = "rgba(31, 28, 61,1)";
// 			document.getElementById("text-logo").style.width = "100px";
// 			document.getElementById("navbar").style.height = "0px";
// 			document.getElementById("navbar").style.paddingLeft = "30px";
// 			document.getElementById("text-logo").style.paddingTop = "10px";
// 			document.getElementById("navbar").style.paddingBottom = "10px";
// 			document.getElementById("navbar").style.paddingTop = "0px";
// 			document.getElementById("header-menu").style.marginTop = "0px";
// 			document.getElementById("header-menu").style.padding = "0px";
		}else{
			document.getElementById("navbar").style.background = "rgba(31, 28, 61,0)";
// 			document.getElementById("navbar").style.padding = "10px";
// 			document.getElementById("text-logo").style.width = "150px";
// 			document.getElementById("text-logo").style.paddingTop = "0px";
		}
	}
}