$(document).ready(function(){
	var faqNum1 = $(".faq-about_groupon").children(".faq").length;
	var faqNum2 = $(".faq-groupon_local_deals").children(".faq").length;
	var faqNum3 = $(".faq-groupon_now").children(".faq").length;
	var faqNum4 = $(".faq-groupon_payments").children(".faq").length;
	var faqNum5 = $(".faq-groupon_rewards").children(".faq").length;
	var faqNum6 = $(".faq-groupon_scheduler").children(".faq").length;
	
	$(".faq-about_groupon .faq-number").html(" (" + faqNum1 + ")");
	$(".faq-groupon_local_deals .faq-number").html(" (" + faqNum2 + ")");
	$(".faq-groupon_now .faq-number").html(" (" + faqNum3 + ")");
	$(".faq-groupon_payments .faq-number").html(" (" + faqNum4 + ")");
	$(".faq-groupon_rewards .faq-number").html(" (" + faqNum5 + ")");
	$(".faq-groupon_scheduler .faq-number").html(" (" + faqNum6 + ")");
	
	$(".list-about_groupon .faq-list_number").html("(" + faqNum1 + ")");
	$(".list-groupon_local_deals .faq-list_number").html("(" + faqNum2 + ")");
	$(".list-groupon_now .faq-list_number").html("(" + faqNum3 + ")");
	$(".list-groupon_payments .faq-list_number").html("(" + faqNum4 + ")");
	$(".list-groupon_rewards .faq-list_number").html("(" + faqNum5 + ")");
	$(".list-groupon_scheduler .faq-list_number").html("(" + faqNum6 + ")");
	
	$(".faq-list_control .faq-list_item .faq-list_title").click(function(){
		$(".active").removeClass("active");
		$(".faq-question").children(".faq-toggle").removeClass('on');
		$(this).parent().addClass("active");
		$(".faq-answer").hide();
		
		if($(".list-about_groupon").hasClass("active")){
			$(".faq-wrapper").children().css("display", "none");
			$(".faq-wrapper .faq-about_groupon").css("display", "block");
		} 
		else if($(".list-groupon_local_deals").hasClass("active")){
			$(".faq-wrapper").children().css("display", "none");
			$(".faq-wrapper .faq-groupon_local_deals").css("display", "block");
		} 
		else if($(".list-groupon_now").hasClass("active")){
			$(".faq-wrapper").children().css("display", "none");
			$(".faq-wrapper .faq-groupon_now").css("display", "block");
		} 
		else if($(".list-groupon_payments").hasClass("active")){
			$(".faq-wrapper").children().css("display", "none");
			$(".faq-wrapper .faq-groupon_payments").css("display", "block");
		} 
		else if($(".list-groupon_rewards").hasClass("active")){
			$(".faq-wrapper").children().css("display", "none");
			$(".faq-wrapper .faq-groupon_rewards").css("display", "block");
		} 
		else if($(".list-groupon_scheduler").hasClass("active")){
			$(".faq-wrapper").children().css("display", "none");
			$(".faq-wrapper .faq-groupon_scheduler").css("display", "block");
		}
	});
	$(".faq-question").click(function(){
		if($(this).parent().is(".active")) {
			$(this).parent().children(".faq-answer").slideUp("fast");
			$(this).children(".faq-toggle").removeClass('on');
			$(this).parent().removeClass("active");
		} else {
			$(this).parent().addClass("active");
			$(this).parent().children(".faq-answer").slideDown("fast");
			$(this).children(".faq-toggle").addClass('on');
		}
	});
});