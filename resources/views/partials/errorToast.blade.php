@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<script>
    M.toast({html: "{{$error}}"})
</script>
@endforeach
@endif