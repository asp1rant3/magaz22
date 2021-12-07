

@extends('index')

@section('content')
<!-- 1 -->
 <link rel="stylesheet" href="/temple/css/privacy-policy.css">

    <title>Доступность | {{$settings->project_name}}</title>
<main id="chrome-app-container">
        

<section class="mu-section">

    <article class="accordion">
            <h1>Заявление о доступности</h1>
                    <p></p><p>{{$settings->project_name}} обязуется предоставить сайт, доступный для самой широкой аудитории, вне зависимости от технических или физических возможностей пользователей. Мы активно работаем над тем, чтобы повышать доступность и удобство использования нашего сайта. Поэтому мы стремимся придерживаться многих действующих стандартов и требований.</p><p></p>
                    <dl aria-label="Accordion Control Button Group">
                    <dt>
                        <button class="accordion__title" aria-controls="accordion-content-376d4ef7-4636-43ba-b05f-63c74df26d62" aria-expanded="false" id="accordion-control-376d4ef7-4636-43ba-b05f-63c74df26d62">
                            Инициатива по обеспечению доступности веб-сайтов (WAI)
                        </button>
                    </dt>
                    <dd id="accordion-content-376d4ef7-4636-43ba-b05f-63c74df26d62" aria-hidden="true" style="display: none;"><p>Данный сайт стремится соответствовать уровню A Рекомендаций по обеспечению доступности веб-контента 1.0 <a href="http://www.w3.org/" target="_blank">Консорциума всемирной паутины</a> (W3C). Эти требования объясняют, как сделать веб-контент более доступным для людей с ограниченными возможностями. Соответствие данным требованиям поможет сделать Всемирную сеть более удобной для всех людей.</p></dd>
                    <dt>
                        <button class="accordion__title" aria-controls="accordion-content-08e45941-419b-4d0b-80b0-0167da74d8ba" aria-expanded="false" id="accordion-control-08e45941-419b-4d0b-80b0-0167da74d8ba">
                            Стандарты
                        </button>
                    </dt>
                    <dd id="accordion-content-08e45941-419b-4d0b-80b0-0167da74d8ba" aria-hidden="true" style="display: none;"><p>Мы продолжаем вести разработку сайта в соответствии с рекомендациями, внедряемыми <a href="http://www.w3.org/" target="_blank">Консорциумом Всемирной паутины</a> (W3C), <a href="http://www.rnib.org.uk/" target="_blank">Национальным институтом для слепых</a> (RNIB) и <a href="http://www.plainenglish.co.uk/" target="_blank">Кампанией за чистоту английского языка</a>.</p>

<p>Сайт отображается корректно в текущих веб-браузерах. При просмотре нашего сайта в более старых версиях браузера, страницы могут отображаться неправильно, если браузер не соответствует требованиям. Мы рекомендуем вам установить последнюю версию одного из следующих браузеров, чтобы максимально эффективно пользоваться нашим сайтом.</p>

<p>Microsoft Internet Explorer: <a href="http://www.microsoft.com/" target="_blank">http://www.microsoft.com</a></p>
<p>Mozilla Firefox: <a href="http://www.mozilla.com" target="_blank">http://www.mozilla.com</a></p>
<p>Google Chrome: <a href="https://www.google.com/chrome/" target="_blank">https://www.google.com/chrome</a></p></dd>
                    <dt>
                        <button class="accordion__title" aria-controls="accordion-content-83e423dc-f5ee-48be-abed-01d11eb3aff9" aria-expanded="false" id="accordion-control-83e423dc-f5ee-48be-abed-01d11eb3aff9">
                            Исключения
                        </button>
                    </dt>
                    <dd id="accordion-content-83e423dc-f5ee-48be-abed-01d11eb3aff9" aria-hidden="true" style="display: none;"><p>Хотя {{$settings->project_name}} стремится придерживаться принятых требований и стандартов доступности и удобства использования, не во всех областях сайта это представляется возможным. Мы постоянно ищем решения, которые приведут все разделы данного сайта в соответствие с единым высоким уровнем общей доступности. Если вы испытываете трудности при входе на сайт {{$settings->project_name}}, пожалуйста, немедленно <a href="/to_contact_us">свяжитесь с нами</a>.</p></dd>
            </dl>
    </article>
</section>










      </main>

<script type="text/javascript">

    $('.accordion__title').click(function() {
        console.log();
        if($('#'+$(this).attr("aria-controls")).css('display') == 'none'){
            $('#'+$(this).attr("aria-controls")).fadeIn(600);
        } else {
            $('#'+$(this).attr("aria-controls")).fadeOut(600);
        }
        
    });
</script>
@endsection
