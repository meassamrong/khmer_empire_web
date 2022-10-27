

const wait = (delay = 0) =>
  new Promise(resolve => setTimeout(resolve, delay));

const setVisible = (elementOrSelector, visible) => 
  (typeof elementOrSelector === 'string'
    ? document.querySelector(elementOrSelector)
    : elementOrSelector
  ).style.display = visible ? 'block' : 'none';

setVisible('.page', false);
setVisible('#loading', true);
document.addEventListener('DOMContentLoaded', () =>
  wait(5000).then(() => {
    setVisible('.page', true);
    $("#loading").addClass('loadingEnd');
  },
  wait(5400).then(() => {  
    setVisible('#loading', false);
  })
  ));



//   mouse crusor
  $(document).ready(function() {
    document.body.addEventListener("mousemove", function(event) {
        var x = event.pageX - 1 + "px"
        var y = event.pageY + 1 + "px"
        document.getElementById("cursor").style.left = x;
        document.getElementById("cursor").style.top = y;
    })
})