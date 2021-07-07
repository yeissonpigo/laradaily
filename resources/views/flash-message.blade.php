<style>
    .alert {
        display: flex;
        position: relative;
        align-items: center;
        top: 70px;
        width: 90%;
        margin: auto;
        justify-content: space-around;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .alert strong {
        font-size: 0.6rem;
        font-weight: normal;
    }

    .alert button {
        background-color: transparent;
        border: none;
    }

    .alert-success {
        background-color: #8BF7B6;
    }

    .alert-error {
        background-color: #F95738;
    }

    .close_action {
        opacity: 0;
        transition: opacity 0.5s ease-out;
    }

</style>

@if ($message = Session::get('success'))
    <div class="alert alert-success success" id="success">
        <div>
            <strong>{{ $message }}</strong>
        </div>
        <div>
            <button type="button" class="close" data-dismiss="alert" onclick="closeAlert('success')">×</button>
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-error error" id="error">
        <div>
            <strong>{{ $message }}</strong>
        </div>
        <div>
            <button type="button" class="close" data-dismiss="alert" onclick="closeAlert('error')">×</button>
        </div>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning warning" id="warning">
        <div>
            <strong>{{ $message }}</strong>
        </div>
        <div>
            <button type="button" class="close" data-dismiss="alert" onclick="closeAlert('warning')">×</button>
        </div>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info info" id="info">
        <div>
            <strong>{{ $message }}</strong>
        </div>
        <div>
            <button type="button" class="close" data-dismiss="alert" onclick="closeAlert('info')">×</button>
        </div>
    </div>
@endif

<script>
    function closeAlert(id) {
        var alert = document.getElementById(id);
        alert.classList.toggle("close_action");
        
    }
</script>
