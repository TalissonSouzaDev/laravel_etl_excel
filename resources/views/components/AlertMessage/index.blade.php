@if ($errors->any())
@foreach ($errors->all() as $error)

<div class="alert alert-warning alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>{{$error}}!</strong>
</div>
    
@endforeach
@endif

@if (session("sucess"))
<input type="hidden" value="{{session('success') ?? ''}}" id="success" />
@endif

@if (session("error"))
<input type="hidden" value="error" />    
@endif

<script>
var successElement = document.getElementById('success')
console.log(successElement.value)
if(successElement != "") {
    console.log(successElement)
}
function Alert(msg,cor) {
    Toastify({
  text: msg,
    style: {
    background: `{#16423C}`,
  },
  offset: {
    x: 50, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
    y: 10 // vertical axis - can be a number or a string indicating unity. eg: '2em'
  },
}).showToast();
}
</script>