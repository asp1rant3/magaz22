
@extends('account')

@section('content')
<title>Изменить пароль | {{$settings->project_name}}</title>
<div class="margin-container-addMargin-KMO5Q">
    <div>
        <div class="_1qfLHRc1-rw9Klb8Z3NFbN undefined">
            <h1 data-auto-id="page-title"><span class="_1b5Uk1dfLr1v6SwgJdVcJQ _1pS4foYSK0PGNJ8Ptnv20y _1Lm9ANyFDkhMR2iduD5BgN">Изменить пароль</span></h1>
            <p class="_3RT1U9SfmQO672a7rgNu_7 _2lK1cH9LGzEuUd9TVnW37R">Вы в любой момент можете изменить ваш пароль, чтобы обеспечить безопасность вашей учетной записи</p>
        </div>
    </div>
</div>
<div class="loading-loadingContainer-2jySs">
    <form novalidate="">
        <div class="margin-container-addMargin-KMO5Q">
            <div class="card-card-3DNYN" data-auto-id="cardWrapper">
                <div class="card-section-panel-BcNjY card-section-singleCard-1eEPl card-section-topPadding-2p3l2 card-section-leftPadding-2p443 card-section-rightPadding-4gNBt" data-auto-id="card">
                    <div class="tFCIchuymp_OszqHc_2Ki" id="ChangePassword_existingPassword"><label id="label-existingPassword" class="_3WLWoxYGsxL6zFZGjL_Tj1" data-auto-id="changePassword-existingPassword"><span class="_17gIfwZAcpE65Ej2B24dAK">Текущий пароль:</span><span class="_2mjFemwevjsop2UesLMMS"><span class="_1KdL0dXQeQ6gn2W4lWS6gn"><input type="password" maxlength="120" name="existingPassword" value="" aria-invalid="false" aria-required="true" aria-describedby="label-existingPassword error-existingPassword" class="_2yQHTjMvRnzbhJs1_yt0QU _3Fu5Rzk5BdJtSDPmMCb-QG"></span></span></label></div>
                    <div class="tFCIchuymp_OszqHc_2Ki" id="ChangePassword_password"><label id="label-password" class="_3WLWoxYGsxL6zFZGjL_Tj1 _1e8e0sgSWr0nh-9UQpl1Ls" data-auto-id="changePassword-password"><span class="_17gIfwZAcpE65Ej2B24dAK">Новый пароль:</span><span class="_2mjFemwevjsop2UesLMMS"><span class="_1KdL0dXQeQ6gn2W4lWS6gn"><input type="password" maxlength="120" name="password" value="" aria-invalid="false" aria-required="true" aria-describedby="label-password error-password minimumlength" class="_2yQHTjMvRnzbhJs1_yt0QU _3Fu5Rzk5BdJtSDPmMCb-QG"></span></span></label></div>

                </div>
                <div class="card-section-panel-BcNjY card-section-singleCard-1eEPl card-section-bottomPadding-K3SMN" data-auto-id="card">
                    <div class="_3RnntZZLFy4On0wd60hPh">
                        <div class="error-wrapper-errorWrapper-3e83Y"><button type="submit" class="button-button-2JMYQ button-primary-1-Z5a button-disabled-3RuTi button-large-3FkYz" role="button" disabled=""><span class="button-content-1ybTG">Сохранить пароль</span></button></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
	$('.DrvAPUms9TXGB7LgSTgFW').removeClass("_1r0vUu7pnBDIUGnfQzhxky");
	$('.DrvAPUms9TXGB7LgSTgFW[href="/change-password"]').addClass("_1r0vUu7pnBDIUGnfQzhxky");
</script>
@endsection
