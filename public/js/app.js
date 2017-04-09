
// Regalar Action
var quantity = $("#quantity-dar");
var give = $("#val-dar");
$(".btn-regalar").click(function(){

  give.text('1')

  $("main").toggle();
  $("#logo").toggle();
  $("#modal-regalar").toggle();

})
$(".sumar-dar").click(function(){
  console.log(give.text())
  console.log(quantity.text())
  if (give.text() < quantity.text()) {
    var newvalue = give.text() + 1
  }
})
$(".restar-dar").click(function(){
  if (give.text() > 1) {
    var newvalue = give.text() - 1
  }
})