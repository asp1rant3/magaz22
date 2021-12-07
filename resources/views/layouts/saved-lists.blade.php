@extends('index')
@section('content')
<title>Избранное | {{$settings->project_name}}</title>
<link href="/temple/css/saved-lists.css" media="screen, projection" rel="stylesheet" type="text/css">
<!-- не -->
<main class="main_GDuYi">
    <div class="progressIndicatorWrapper_vDjCW">
        <h1 class="header_tS_Sk">Избранное</h1>
        <div class="loadedItemsWrapper_3QrER">
            <section class="productTiles_2GifC">
                <ol>
                    @if(Auth::user())
                    @foreach ($arr_lists as $p)
                    <li>
                        <div class="progressIndicatorWrapper_vDjCW">
                            <div class="customerItemsProductTile_19AHL">
                                <div class="productTile_3HEk2"><a href="/products/{{$p->id}}">
                                        <div class="productImageWrapper_3aOXQ">
                                            <div class="imageWrapper_2MG5O productImage_OHEr2"><img class="productImage_2uJHI" src="{{$p->photo}}" sizes="(min-width: 1024px) 300px, (min-width: 768px) 312px, 227px"></div>
                                        </div>
                                        <div class="title_1RKnO">
                                            <div class="overflowFade_l2MEf">
                                                <div>
                                                    <p>{{$p->name}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <button type="button" onclick="prod_del(this);" data-id="{{$p->id}}" class="_2HTnAzH n8gMtm9" style="bottom: 215px;">
                                        <span class="_30BqGyh">
                                            <i class="fas fa-trash" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                    <div class="pricing_ThuFn threeLines_3DPgJ"><span class="price_1YBt-"><span class="noWrap_1zIIQ">{{$p->sum}} руб.</span></span></div>
                                    <div class="productSelect_3ZDo7 select_mLH9c hasOptions_11lNF"><select disabled="">
                                            <option>{{$p->colour}}</option>
                                        </select><span class="indicator_2GBcb"></span></div>
                                    <button class="toBagButton_OatoQ toBagButton_3wcKB" onclick="buy(this);" data-id="{{$p->id}}">Добавить в корзину</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endif
                </ol>
            </section>
        </div>
    </div>
</main>
<script>
@if(Auth::user())

function prod_del(e) {

    $.ajax({
        url: '/saved-lists_del',
        data: {
            'id': $(e).data('id'),
        },
        type: 'delete',
        success: function(data) {
            if (data.success == true) {
                location.reload();
            } else {
                console.log("error");
            }
        },
        error: function(msg) {
            console.log(msg);
        }
    });
}
@else

function reload() {
    if (localStorage.getItem('prod')) {
        var items_arr = JSON.parse(localStorage.getItem('prod'));
        console.log(items_arr);
        var items = '';
        for (var i = 0; i < items_arr.length; i++) {
            items = items + `
                    <li>
                        <div class="progressIndicatorWrapper_vDjCW">
                            <div class="customerItemsProductTile_19AHL">
                                <div class="productTile_3HEk2"><a href="/products/` + items_arr[i]["id"] + `">
                                        <div class="productImageWrapper_3aOXQ">
                                            <div class="imageWrapper_2MG5O productImage_OHEr2"><img class="productImage_2uJHI" src="` + items_arr[i]["photo"] + `" sizes="(min-width: 1024px) 300px, (min-width: 768px) 312px, 227px"></div>
                                            
                                    
                                        </div>
                                        <div class="title_1RKnO">
                                            <div class="overflowFade_l2MEf">
                                                <div>
                                                    <p>` + items_arr[i]["name"] + `</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <button type="button" onclick="prod_del(this);" data-id="` + i + `" class="_2HTnAzH n8gMtm9" style="bottom: 215px;">
                                        <span class="_30BqGyh">
                                            <i class="fas fa-trash" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                    <div class="pricing_ThuFn threeLines_3DPgJ"><span class="price_1YBt-"><span class="noWrap_1zIIQ">` + items_arr[i]["sum"] + ` руб.</span></span></div>
                                    
                                    <div class="productSelect_3ZDo7 select_mLH9c hasOptions_11lNF"><select disabled="">
                                            <option>` + items_arr[i]["colour"] + `</option>
                                        </select><span class="indicator_2GBcb"></span></div>
                                        <button class="toBagButton_OatoQ toBagButton_3wcKB m_open" href="#login">Авторизоваться</button>
                                </div>
                            </div>
                        </div>
                    </li>`;
        }
        $(".productTiles_2GifC ol").html(items);
    }
}
reload();

function prod_del(e) {
    console.log($(e).attr('data-id'));
    var items_arr = JSON.parse(localStorage.getItem('prod'));
    items_arr.splice($(e).attr('data-id'), 1);
    console.log(items_arr);
    localStorage.setItem('prod', JSON.stringify(items_arr));
    reload()
}
@endif

</script>
@endsection
