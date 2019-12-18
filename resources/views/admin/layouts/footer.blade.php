
    <footer>
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"  crossorigin="anonymous"></script>
        <script src="{{ asset('js/materialize.min.js') }}"  crossorigin="anonymous"></script>

        <script>
            $(document).ready(function(){
                $(".dropdown-trigger").dropdown({
                    hover: true,
                });
                $('.tabs').tabs();
                $('.tooltipped').tooltip();
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function item_show(item_show_link){
                window.location.href = item_show_link;
            }
        </script>

        @yield('js')
    </footer>
</body>
</html>