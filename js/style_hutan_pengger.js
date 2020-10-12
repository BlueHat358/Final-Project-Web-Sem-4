$(window).scroll(function() {
	var scroll = $(this).scrollTop();

	if(scroll > $('.pict').offset().top - 300 ){
		$('.pict .gambardiam').each(function(i){
			setTimeout(function(){
				$('.pict .gambardiam').eq(i).addClass('muncul');
			},300 * (i+1));
		})
	}
});

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