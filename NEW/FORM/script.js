$(Document).ready(function(){
    $(".welcom").show();
    $(".signup-form").hide();
    $(".signup").css("backgorund","rgbargba(0, 0, 0, 0.842)");
    
    $(".login-form").hide();
    $(".login").css("backgorund","rgba(51, 51, 0, 0.519)");
    
   
    $(".login").click(function(){
        $(".signup-form").hide();
        $(".welcom").hide();
        $(".login-form").show();
        $(".signup").css("background","rgba(51, 51, 0, 0.519)")
        $(".login").css("background","rgba(0, 0, 0, 0.842)")
        $(".signup").css("color","#ffffff")
        $(".login").css("color","yellow");
    });
    $(".signup").click(function(){
        $(".signup-form").show();
        $(".welcom").hide();
        $(".login-form").hide();
        $(".signup").css("background","rgba(0, 0, 0, 0.842)")
        $(".login").css("background","rgba(51, 51, 0, 0.519)")
        $(".login").css("color","#ffffff")
        $(".signup").css("color","yellow");
    });
    $(".welcom").click(function(){
        $(".welcom").show();
        $(".signup-form").hide();
        $(".login-form").hide();
        $(".signup").css("background","rgba(0, 0, 0, 0.842)")
        $(".login").css("background","rgba(51, 51, 0, 0.519)");
    });

    $(".btn").click(function() {
        $(".input").val("");
    });
}); 