@if (isset($errors) && $errors->any())
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-danger alert-alt">
                <strong>
                    <i class="fa fa-bug" aria-hidden="true"></i>
                     Error
                 </strong>
                 <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:#000;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <br/>
@endif