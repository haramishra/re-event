$(document).ready(function() {
  var value = 1;
  if (value == 1) {
    $('[name="topicName"]').attr("disabled", true);
  }
  $("input[name=topic]").change(function() {
    value = $("input[name=topic]:checked").val();
    if (value == 0) {
      $('[name="topicName"]').attr("disabled", false);
    }
    if(value == 1){
        $('[name="topicName"]').attr('disabled', true);
    }
    
  });
});
