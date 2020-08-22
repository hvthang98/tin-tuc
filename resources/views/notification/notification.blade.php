@if (session()->has('notification'))
        <script>
            var notification =" {{ session()->get('notification') }}";
            alert(notification);
        </script>
    @endif