
$(window).on('load', function() {
	$('.pKiri').addClass('pMuncul');
	$('.pKanan').addClass('pMuncul');
});
//pict
$(window).scroll(function() {
    var x = window.matchMedia("(max-device-width: 480px)");
	scrollFunction(x);
	x.addListener(scrollFunction);
	var scroll = $(this).scrollTop();

	if(scroll > $('.pict').offset().top - 450 ){
		$('.pict .gambar').each(function(i){
			setTimeout(function(){
				$('.pict .gambar').eq(i).addClass('muncul');
			},300 * (i+1));
		})
	}
});
//scroll
$('.page-scroll').on('click', function(e){

	//ambil isi href
	var tujuan = $(this).attr('href');
	//tangkap halaman elemen
	var elemenTujuan= $(tujuan);

	$('body').animate({
		scrollTop: elemenTujuan.offset().top - 50
	}, 1250, 'easeOutSine');

	e.preventDefault();
});

function scrollFunction(x){
	if(x.matches){
		if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
			document.getElementById("navbar").style.background = "rgba(31, 28, 61,1)";
		}else{
			document.getElementById("navbar").style.background = "rgba(31, 28, 61,0)";
		}
	}else{
		if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
			document.getElementById("navbar").style.background = "rgba(31, 28, 61,1)";
		}else{
			document.getElementById("navbar").style.background = "rgba(31, 28, 61,0)";
		}
	}
}