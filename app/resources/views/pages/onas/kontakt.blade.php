@extends('layouts.default')
@section('content')



    <div class = "row">
        <div class = "row page-header-bg" id = "iboga-index-page-header"></div>
    </div>

    <div class = "row">
        <h1 class = "">Kontakt</h1>
    </div>

    <div class = "row">
        <div class = "col-xl-8">
            <div>
                    <form class="form-horizontal row background-text-light-grey" method="POST" action="{{ route('contactus') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                            <label for="fullname" class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" autofocus>
                                @if ($errors->has('fullname'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('fullname') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">description</label>
                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description"></textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>
                        {{--            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">--}}
                        {{--                <label class="col-md-4 control-label">Captcha</label>--}}
                        {{--                <div class="col-md-6 pull-center">--}}
                        {{--                    {!! app('captcha')->display() !!}--}}
                        {{--                    @if ($errors->has('g-recaptcha-response'))--}}
                        {{--                        <span class="help-block">--}}
                        {{--                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>--}}
                        {{--                        </span>--}}
                        {{--                    @endif--}}
                        {{--                </div>--}}
                        {{--            </div>--}}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Vyslat
                                </button>
                            </div>
                        </div>
                    </form>

            </div>
        </div>

        <div class = "col-xl-4 col-xs-12 background-text-light-grey">
            <div class = "row">
                <p>Neváhejte se mnou chatovat přes Whatsapp s jakýmikoli dotazy, které byste mohli mít. Rád na ně odpovím</p>
                <a href = "https://wa.me/message/54FSD44UPZYWN1"><img src = "/images/misc/whatsapp-chat-link-black.png" width = "400"/></a>
            </div>

            <div class = "row mt-5 col-xs-12">
                <p>
                    Pokud máte nějaké dotazy nebo jste připraveni si zarezervovat své místo v
                    některém z nadcházejících retreatů - klikněte na odkaz níže a naplánujte si schůzku</p>
                <a href = "https://calendly.com/ibogaspiritcz/30min"><img src = "/images/misc/book-appt-czech.png" /></a>
            </div>
        </div>

    </div>



    <!--
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
    -->

@stop
