<script type="text/javascript">
    let _token = '{{@csrf_token()}}';
    function show_notify(message, status) {
        let classname;
        if (status === 'success') {
            classname = 'bg-success';
        } else if (status === 'fail') {
            classname = 'bg-danger';
        } else if (status === 'warning') {
            classname = 'bg-warning';
        } else {
            classname = 'bg-info';
        }
        /*console.log(classname,message,status);*/
        Toastify({
            text: message,
            gravity: "top",
            position: "right",
            className: classname,
            duration: 5000,
            close: true
        }).showToast();
    }
    @if(session()->has("status"))
    /*console.log("{{session()->get("status")}},{{session()->get('message')}}");*/
    show_notify("{!! session()->get('message') !!}", "{{session()->get('status')}}");
    @endif

    // Start Hide Show Loader
  
</script>