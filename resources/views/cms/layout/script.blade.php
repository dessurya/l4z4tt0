<script type="text/javascript" src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/adminlte-dist/js/adminlte.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/pnotify/pnotify.custom.min.js') }}"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        $('#loading-page').hide();
        checkNewInbox();
        @stack('script.documentreadyfunction')
    });

    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    function pnotify(data) {
        new PNotify({
            title: data.title,
            text: data.text,
            type: data.type,
            delay: 3000
        });
    }
    function pnotify_arr(data) {
        $.each(data, function (idx, val) {
            pnotify({"title":"info","type":val.type,"text":val.text});
        });
    }
    function pnotifyConfirm(data) {
        new PNotify({
            after_open: function(ui){
                $(".true", ui.container).focus();
                $('#loading-page').show();
            },
            after_close: function(){
                $('#loading-page').hide();
            },
            title: data.title,
            text: data.text,
            type: data.type,
            delay: 3000,
            confirm: {
                confirm: true,
                buttons:[
                { text: 'Yes', addClass: 'true btn-primary', removeClass: 'btn-default'},
                { text: 'No', addClass: 'false'}
                ]
            }
        }).get().on('pnotify.confirm', function(ui){
            $(ui.container).find(".true").hide();
            if (data.formData == true) {
                postFormData(data.data,data.url);
            }else{
                postData(data.data,data.url);
            }
        });
    }
    function PNotifynotice_arr(data) {
        $.each(data, function (idx, val) {
            PNotifynotice(val);
        });
    }
    function toogleClass(param, target) {
        if(target== 'self'){
            console.log(this);
            // $(target).toggleClass(param);
        }else{
            $(target).toggleClass(param);
        }
    }
    function checkNewInbox() {
        $.ajax({
            url: '{{ route("cms.inbox.check") }}',
            type: 'post',
            dataType: 'json',
            data: null,
            success: function(data) { 
                renderChechInbox(data);
            }
        });
        window.setTimeout(function() { 
            checkNewInbox();
        }, 30000); // 30 detik
    }
    function renderChechInbox(params) {
        var render = false;
        var getItem = localStorage.getItem('inboxCache');
        if (getItem != 'null' && getItem != null && getItem != '' && getItem != undefined && getItem != "undefined" && getItem.length != 0) {
            getItem = JSON.parse(getItem);
            if (getItem != params.id) { render = true; }
        }else{ render = true; }
        localStorage.setItem('inboxCache',JSON.stringify(params.id));
        if (render == true) {
            $('#inbox-notif-wrapper .dropdown-menu #appendInbox').html(null);
            $('#inbox-notif-wrapper a.nav-link span').remove();
            if (params.id.length > 0) {
                $('#inbox-notif-wrapper a.nav-link').append('<span class="badge badge-danger navbar-badge">'+params.id.length+'</span>');
                $.each(params.data, function (idx, val) {
                    var msg = '<h3 class="dropdown-item-title">'+val.name+' - '+val.email+'</h3>';
                    msg += '<p class="text-sm text-justify"><strong>'+val.subject+' : </strong>'+val.message+'</p>';
                    msg += '<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>'+val.created_at+'</p>';
                    $('#inbox-notif-wrapper .dropdown-menu #appendInbox').append('<div class="dropdown-item"><div class="media"><div class="media-body">'+msg+'</div></div></div><div class="dropdown-divider"></div>');
                });
            }
            
        }
    }
    function postData(data,url) {
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: data,
            beforeSend: function() {
                @stack('script.postDataBeforeSend')
                $('#loading-page').show();
            },
            success: function(data) {
                responsePostData(data);
                $('#loading-page').hide();
            }
        });
    }
    function responsePostData(data) {
        @stack('script.responsePostData')
        if (data.pnotify === true) { pnotify({"title":"info","type":data.pnotify_type,"text":data.pnotify_text}); }
        if (data.pnotify_arr === true) { pnotify_arr(data.pnotify_arr_data); }
        if (data.render == true) { render(data.render_config); }
        if (data.playAudioApplauses == true) { playAudioApplauses(); }
        if (data.prepend == true) { prepend(data.prepend_config); }
        if (data.append == true) { append(data.append_config); }
        if (data.PNotifynotice_arr == true) { PNotifynotice_arr(data.PNotifynotice_arr_data); }
    }
    function render(data) {
        $(data.target).html(atob(data.content));
    }
    function prepend(data) {
        $(data.target).prepend(atob(data.content));
    }
    function append(data) {
        $(data.target).append(atob(data.content));
    }
</script>