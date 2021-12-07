
@extends('account')

@section('content')
<title>Моя информация | {{$settings->project_name}}</title>
        <div class="margin-container-addMargin-KMO5Q">
            <div>
                <div class="_1qfLHRc1-rw9Klb8Z3NFbN undefined">
                    <h1 data-auto-id="page-title"><span class="_1b5Uk1dfLr1v6SwgJdVcJQ _1pS4foYSK0PGNJ8Ptnv20y _1Lm9ANyFDkhMR2iduD5BgN">Моя информация</span></h1>
                    <p class="_3RT1U9SfmQO672a7rgNu_7 _2lK1cH9LGzEuUd9TVnW37R">Вы в любой момент можете обновить вашу учетную запись {{$settings->project_name}} и внести любые изменения в приведенные ниже данные.</p>
                </div>
            </div>
        </div>
        <div class="loading-loadingContainer-2jySs">
            <form novalidate="">
                <div class="margin-container-addMargin-KMO5Q">
                    <div class="card-card-3DNYN" data-auto-id="cardWrapper">
                        <div class="card-section-panel-BcNjY card-section-singleCard-1eEPl card-section-topPadding-2p3l2 card-section-leftPadding-2p443 card-section-rightPadding-4gNBt" data-auto-id="card">
                            <div id="MyDetails_firstName"><label id="label-firstName" class="_3WLWoxYGsxL6zFZGjL_Tj1" data-auto-id="my-details-firstName"><span class="_17gIfwZAcpE65Ej2B24dAK">Имя:</span><span class="_2mjFemwevjsop2UesLMMS"><span class="_1KdL0dXQeQ6gn2W4lWS6gn"><input type="text" maxlength="100" name="firstName" value="{{$u->name}}" class="_2yQHTjMvRnzbhJs1_yt0QU"></span></span></label></div>
                            <div id="MyDetails_emailAddress"><label id="label-emailAddress" class="_3WLWoxYGsxL6zFZGjL_Tj1 _1e8e0sgSWr0nh-9UQpl1Ls"><span class="_17gIfwZAcpE65Ej2B24dAK">Адрес электронной почты:</span><span class="_2mjFemwevjsop2UesLMMS"><span class="_1KdL0dXQeQ6gn2W4lWS6gn"><input type="email" maxlength="255" name="emailAddress" value="{{$u->email}}" aria-required="true" aria-describedby="label-emailAddress error-emailAddress" class="_2yQHTjMvRnzbhJs1_yt0QU"></span></span></label></div>
                            
                            
                        </div>
                        <div class="card-section-panel-BcNjY card-section-singleCard-1eEPl card-section-bottomPadding-K3SMN" dataи-auto-id="card">
                            <div class="_25uIjK7UIT8S6tb3rD9A-5">
                                <div class="error-wrapper-errorWrapper-3e83Y"><button type="submit" class="button-button-2JMYQ button-primary-1-Z5a button-disabled-3RuTi button-large-3FkYz" disabled="" role="button"><span class="button-content-1ybTG">Сохранить изменения</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
<script>
	$('.DrvAPUms9TXGB7LgSTgFW').removeClass("_1r0vUu7pnBDIUGnfQzhxky");
	$('.DrvAPUms9TXGB7LgSTgFW[href="/my-details"]').addClass("_1r0vUu7pnBDIUGnfQzhxky");
</script>
@endsection
