$(document).ready(function(){

  $("#prerequisites").click(function(){
      $("#feature_prerequisites").toggle();
      $("#feature_prerequisites").siblings().hide();
  });

  $("#duration").click(function(){
      $("#feature_duration").toggle();
      $("#feature_duration").siblings().hide();
  });

  $("#instruction").click(function(){
      $("#feature_instruction").toggle();
      $("#feature_instruction").siblings().hide();
  });

  $("#costs").click(function(){
      $("#feature_costs").toggle();
      $("#feature_costs").siblings().hide();
  });


});
