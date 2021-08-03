
<script>
    $(document).ready(function () {
        <?php if (Session::has("success")): ?>
        demo.showNotification('top','right', '2', '{{ Session::get('success') }}')
        <?php endif ?>

            <?php if (Session::has("error")): ?>
        demo.showNotification('top','right', '4', '{{ Session::get('error') }}')
        <?php endif ?>

            @if ($errors->any())
            @foreach($errors->all() as $e)
        demo.showNotification('top','right', '4', '{{ $e}}')
        @endforeach
        @endif

        <?php

        if(Session::has("success")):
            Session::remove("success");
        endif;

        if(Session::has("error")):
            Session::remove("error");
        endif;
        ?>
    })

</script>
