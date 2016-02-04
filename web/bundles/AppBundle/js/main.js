//Initialisation du parallax
$(document).ready(function(){
	$('.parallax').parallax();

	    // toastr options

/*    toastr.options = {
    	"closeButton": true,
    	"debug": false,
    	"newestOnTop": false,
    	"progressBar": false,
    	"positionClass": "toast-top-center",
    	"preventDuplicates": false,
    	"onclick": null,
    	"showDuration": "1000",
    	"hideDuration": "1000",
    	"timeOut": "5000",
    	"extendedTimeOut": "1000",
    	"showEasing": "swing",
    	"hideEasing": "linear",
    	"showMethod": "fadeIn",
    	"hideMethod": "fadeOut"
    }
    */

	//Permet d'afficher les balises select
	$('select').material_select();

    //Activation dropdown menu
    $(".dropdown-button").dropdown();

    $(".home .best-challenges").hide();
    
    if($(".home").has(".current-challenges")){
        $(".home .current-challenges").hide();
    }

    $(".home .defis a.round_tab").click(function(){
        $(".home .defis a.round_tab").removeClass("active");
        $(this).addClass("active");
        var challengeType = $(this).attr("name");
        $(".home .defis .affichage-defis").hide();
        $(".home .defis ." + challengeType).show();
    });
});

//Remonte le underHeader si chargement en milieu de page
$(window).load(function()
{
	if(document.body.scrollTop!==0 || document.documentElement.scrollTop!==0){
		$(".underHeader").slideUp('fast');
	}
});

//Remonte le underHeader quand scroll
window.onscroll = function(e){
	if(window.innerWidth > 768)
	{
		if (document.body.scrollTop!==0 || document.documentElement.scrollTop!==0){
			$(".underHeader").slideUp('fast');
		}
		else{
			$(".underHeader").slideDown();
		}
	}
	else{
		$(".underHeader").css("display","none");
	}
}

/* -- OVERLAY MENU -- */

$(document).ready(function() {
});
$(".nav-toggle").click(function() {
    $(this).toggleClass("active");
    $(".overlay-boxify").toggleClass("open");
});
$(".overlay ul li a").click(function() {
    $(".nav-toggle").toggleClass("active");
    $(".overlay-boxify").toggleClass("open");
});
$(".overlay").click(function() {
    $(".nav-toggle").toggleClass("active");
    $(".overlay-boxify").toggleClass("open");
});

//Activation du DropDown du menu
$(document).ready(function() {
    $('#menu_select').material_select();
});

//DropDown du menu automatique
$('.select_menu_tab').mouseenter(function(){
    $(".select_menu_tab").css("height", "200");

    $(".select_menu_tab ul").css("display", "block");
    $(".select_menu_tab ul").css("width", "92px");
    $(".select_menu_tab ul").css("position", "absolute");
    $(".select_menu_tab ul").css("top", "0px");
    $(".select_menu_tab ul").css("left", "0px");
    $(".select_menu_tab ul").css("opacity", "1");
    $(".select_menu_tab ul").addClass('active');
    $(".select_menu_tab input").addClass('active');
});

$('.select_menu_tab').mouseleave(function(){
    $(".select_menu_tab").css("height", "48px");

    $(".select_menu_tab ul").css("display", "none");
    $(".select_menu_tab ul").removeClass('active');
    $(".select_menu_tab input").removeClass('active');
});

//ToolTipe Avatar dans menu et bouton deconnection
$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
});

//Animation des bouton sociaux
$('.fb_logo').mouseenter(function(){
    $(this).addClass('animated pulse infinite');
});

$('.fb_logo').mouseleave(function(){
    $(this).removeClass('animated pulse infinite');
});

$('.tw_logo').mouseenter(function(){
    $(this).addClass('animated pulse infinite');
});

$('.tw_logo').mouseleave(function(){
    $(this).removeClass('animated pulse infinite');
});