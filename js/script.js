
$(function(){
  $('#toconvert').hide();
  $('#convert').on('click',function(){
    var tabledom=$('#table').html();
    $('#tabledata').val(tabledom);
    $('#convert').hide();
      $('#toconvert').show();
  });

});