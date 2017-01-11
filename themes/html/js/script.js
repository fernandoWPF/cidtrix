$(document).ready(inputs());
$(window).bind("resize",function() {
    inputs();
});
function inputs(){
    if(window.innerWidth < 992){
        
        $(".form-email").addClass("input-group-sm");
        $(".div-form-email").addClass("form-group-sm");
        $(".form-email").removeClass("input-group-lg");
        $(".div-form-email").removeClass("form-group-lg");
        $(".form-email").removeClass("input-group-md");
        $(".div-form-email").removeClass("form-group-md");
        
    }else{
        $(".form-email").addClass("input-group-lg");
        $(".div-form-email").addClass("form-group-lg");
        $(".form-email").removeClass("input-group-sm");
        $(".div-form-email").removeClass("form-group-sm");
        $(".form-email").removeClass("input-group-md");
        $(".div-form-email").removeClass("form-group-md");
    }
};
