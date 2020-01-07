// $('.button-collapse').sideNav({
//   menuWidth: 300, // Default is 300
//   edge: 'left', // Choose the horizontal origin
//   closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
//   draggable: true // Choose whether you can drag to open on touch screens
// });

// $(document).ready(function(){
//       $('.sidenav').sidenav();
// })

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    
  });


function showMessage(message)
{
  
    M.toast({html: message })
}

function showError(errors)
{
    for (var i in errors)
    {
        M.toast({html:errors[i]})
        
    }
}
