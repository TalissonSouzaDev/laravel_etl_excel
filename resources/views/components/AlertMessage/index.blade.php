@if ($errors->any())
@foreach ($errors->all() as $error)
<div id="toast" class="fixed top-5 right-5 bg-yellow-500 text-white p-4 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 ease-in-out">
    <p id="toast-message">{{$error}}!</p>
</div>
    
@endforeach
@endif

@if (session("sucess"))
    <p id="toast-message">{{session("sucess")}}!</p>
    <span id="alert">success</span>
@endif

@if (session("error"))
<div id="toast" class="fixed top-5 right-5 bg-red-500 text-white p-4 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 ease-in-out">
    <p id="toast-message">{{session("error")}}!</p>
</div> 
<h1 id="alert">teste</h1>
@endif

<script defer>
var alert = document.getElementById('alert');
var toastmessage = document.getElementById('toast-message');
console.log(alert.innerText)
switch(alert.innerText) {
  case "success":
  console.log("true")
    AlertToast(toastmessage.innerText,"success","green")
    break
}
function AlertToast(msg,type,color) {
  Toastify({
  text: msg,
  className: type,
  style: {
    background: `linear-gradient(to right, ${color}, ${color})`,
  }
}).showToast();
}
</script>