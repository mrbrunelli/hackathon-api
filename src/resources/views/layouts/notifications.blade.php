@if(Session::get('error'))
<script>
window.onload = function () {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: "{{Session::get('error')}}",
    })
};</script>
@endif
@if(Session::get('success'))
<script>
window.onload = function () {
    Swal.fire({
        icon: 'success',
        title: 'Sucesso',
        text: "{{Session::get('success')}}",
    })
};</script>
@endif