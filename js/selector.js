/*
$(document).ready(function(){
    $(":submit").click(function(){
        $(this).attr('value','Unboxing...');
    });
});
*/
function limitTXT(v){
	len = v.length;
	if(len>30){
		m = v.substr(0,30);
		document.inputForm.name.value = m;
		alert("name should not be more than 30 char long");
		
	}
}
$(document).ready(function(){
    $(":submit").click(function(){
        $(this).attr('value','Unboxing...');
    });
});
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css('border-left','none');
		$(this).css('border-right','none');
		$(this).css('border-top','none');
    });
	$("input").blur(function(){
        $(this).css('border-left','none');
		$(this).css('border-right','none');
		$(this).css('border-top','none');
    });
});
