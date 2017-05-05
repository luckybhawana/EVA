$(function() {
  var addDiv = $('#addinput');
  var i = $('#addinput p').size() + 1;
  $('#addNew').live('click', function() {
  $('<p class = "centerIT" ><input class = "textbox" type="text" id="p_new" size="30" name="p_new_' + i +'" value="" placeholder="Requirement" />  <a href="#" id="remNew">-</a> </p>').appendTo(addDiv);
  i++;
  return false;
  });
  $('#remNew').live('click', function() {
  if( i > 2 ) {
  $(this).parents('p').remove();
  i--;
  }
  return false;
  });
  });