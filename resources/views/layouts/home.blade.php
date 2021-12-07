
@extends('index')

@section('content')
<title>Главная | {{$settings->project_name}}</title>
<!-- не -->
    <main id="chrome-app-container">
        <div id="plp2">
            <div class="_1Ito59o">

                <div>
                    <div class="_20XcZzB">
                        <div class="_1fq7xC_ headroom-wrapper" style="height: 116px;">
                        </div>
                    </div>
                </div>
                <div class="_3-pwX1m">
                    <div class="_2MoInDZ">
                        <p data-auto-id="styleCount" class="_2JQRAAs styleCount">Всего {{count($products_all)}} моделей</p>
                        <div class="_3pQmLlY">
                            <section>
                                @foreach ($products as $p)
                                <article class="_2qG85dG">
                                    <a class="_3TqU78D" href="/products/{{$p->id}}" aria-label="{{$p->name}}">
                                        <div class="ERlP6Bx">
                                            <img alt="{{$p->name}}" class="_2r9Zh0W" data-auto-id="productTileImage" sizes="(min-width: 768px) 317px, 238px" src="{{$p->photo}}">
                                        </div>
                                        <div data-auto-id="productTileDescription" class="_3WEsAhb">
                                            <div class="_3J74XsK">
                                                <div>
                                                    <p>{{$p->name}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="_1ldzWib _1PL75Ye">
                                            @if(!$p->discount <= 0 && $p->discount < 100)
                                            <span class="qU9n4CQ _1swt2Qk" data-auto-id="productTilePrice">
                                                <span class="_16nzq18">{{$p->sum}} руб.</span>
                                            </span> 
                                            <span class="bOpxk49">
                                                <span data-auto-id="productTileSaleAmount" class="_3VjzNxC">
                                                    {{($p->sum - $p->sum*($p->discount/100))}} руб.</span>
                                                    <?php $p->sum = $p->sum - $p->sum*($p->discount/100); ?>
                                            </span>
                                            <div class="_1MVUcS8">-{{$p->discount}}%</div>
                                            @else
                                            <span class="qU9n4CQ" data-auto-id="productTilePrice">
                                                <span class="_16nzq18">{{$p->sum}} руб.</span>
                                            </span>
                                            @endif
                                        </p>
                                        
                                    </a>
                                    <button type="button" onclick="prod_f(this);" data-name="{{$p->name}}" data-sum="{{$p->sum}}" data-photo="{{$p->photo}}" data-colour="{{$p->colour}}" data-id="{{$p->id}}" class="_2HTnAzH n8gMtm9">
                                        <span class="_30BqGyh"><i class="far fa-heart"></i></span>
                                    </button>
                                </article>


                                @endforeach
                                
                            </section>
                        </div>
                        <div class="fWxiz1Y">
                            <p class="XmcWz6U">Вы просмотрели @if(count($products) < 8) {{count($products)}} @else 8 @endif из {{count($products_all)}}</p>
                            <progress max="{{count($products_all)}}" @if(count($products) < 8) value="{{count($products)}}" @else value="8" @endif class="_1WggT4Y"></progress>
                        </div>
                        <a class="_39_qNys">Загрузить еще</a>
                    </div>
                </div>
<script>
	var products = {!! $products_all !!};
	console.log(products);

	$('._39_qNys').click(function() {
		var _2qG85dG = $('._2qG85dG').length;
		for(var i = _2qG85dG; i < _2qG85dG+8; i++){
			if(i == products.length){
				i = 999999;
				$('._39_qNys').fadeOut(400);
			} else {
				html = '';
				html += `<article class="_2qG85dG">
                                    <a class="_3TqU78D" href="/products/`+products[i]['id']+`" aria-label="`+products[i]['name']+`">
                                        <div class="ERlP6Bx">
                                            <img alt="`+products[i]['name']+`" class="_2r9Zh0W" sizes="(min-width: 768px) 317px, 238px" src="`+products[i]['photo']+`">
                                        </div>
                                        <div class="_3WEsAhb">
                                            <div class="_3J74XsK">
                                                <div>
                                                    <p>`+products[i]['name']+`</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="_1ldzWib _1PL75Ye">`;
                if(!products[i]['discount'] <= 0 && products[i]['discount'] < 100){
                	html += `				<span class="qU9n4CQ _1swt2Qk">
                                                <span class="_16nzq18">`+products[i]['sum']+` руб.</span>
                                            </span> 
                                            <span class="bOpxk49">
                                                <span class="_3VjzNxC">`+(products[i]['sum'] - products[i]['sum'] * (products[i]['discount']/100))+` руб.</span>
                                            </span>
                                            <div class="_1MVUcS8">-`+products[i]['discount']+`%</div>`;
                    products[i]['sum'] = (products[i]['sum'] - products[i]['sum'] * (products[i]['discount']/100));
                } else {
                html += `
                                            <span class="qU9n4CQ">
                                                <span class="_16nzq18">`+products[i]['sum']+` руб.</span>
                                            </span>`;
                }

                html += `</p>
                                    </a>
                                    <button type="button" onclick="prod_f(this);" class="_2HTnAzH n8gMtm9" data-name="`+products[i]['name']+`" data-sum="`+products[i]['sum']+`" data-photo="`+products[i]['photo']+`" data-colour="`+products[i]['colour']+`" data-id="`+products[i]['id']+`">
                                        <span class="_30BqGyh"><i class="far fa-heart"></i></span>
                                    </button>
                                </article>`;
                $('._3pQmLlY section').html($('._3pQmLlY section').html() + html);
                $('.XmcWz6U').html('Вы просмотрели '+(i+1)+' из '+products.length);
                $(".fWxiz1Y progress").attr("value", (i+1));
			}
		}
    });

</script>
@endsection