
// Regalar Action
var quantity = $("#quantity-dar");
var give = $("#val-dar");
$(".btn-regalar").click(function(){

  give.text('1')

  $("main").toggle();
  $("#logo").toggle();
  $("#modal-regalar").fadeToggle();

})
$(".sumar-dar").click(function(){
  if (Number(give.text()) < Number(quantity.text())) {
    var newvalue = Number(give.text()) + 1
    give.text(newvalue)
  }
})
$(".restar-dar").click(function(){
  if (Number(give.text()) > 1) {
    var newvalue = Number(give.text()) - 1
    give.text(newvalue)
  }
})


// 
$(".btn-confirmar").click(function(){
  give.text('1')
  $("main").toggle();
  $("#logo").toggle();
  $("#modal-confirmar").fadeToggle();
})