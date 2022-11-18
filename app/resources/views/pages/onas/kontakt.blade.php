@extends('layouts.default')
@section('content')

    <div class = "row">
        <h2>Kontakt</h2>
    </div>
    <div class = "row">
        <div class = "row page-header-bg" id = "iboga-index-page-header"></div>
    </div>

    <div class = "row">
        <h3>Napiste mi!</h3>
    </div>

    <div class = "row">

        <div class = "col-xl-7">

            <div class = "row">
                Image whatspp

                Whats up number

                Scbedule a call
            </div>
        </div>
        <div class = "col-xl-7">
            <form name = "contact-form" href = "/o-nas/">

                <div class = "row">
                    <label>First Name</label><input type = "text" name = "comtact[first_name]" />
                </div>

                <div class = "row">
                    <label>Last Name</label><input type = "text" name = "comtact[last_name]" />
                </div>

                <div class = "row">
                    <label>Telefon</label><input type = "text" name = "comtact[phone]" />
                </div>

                <div class = "row">
                    <label>email</label><input type = "text" name = "comtact[email]" />
                </div>


                <div class = "row">
                    <label>Zprave</label><textarea name ="contact[message]"></textarea>
                </div>

                <div class = "row">
                    <label>First Name</label><input type = "submit" name = "comtact[submit]" />
                </div>

            </form>
        </div>
    </div>

@stop
