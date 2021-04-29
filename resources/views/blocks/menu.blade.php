<div class="menu">
    <div class="item-menu">
        <a href="/">
            Главная
        </a>
    </div>
    @foreach($menu as $item)
        <div class="item-menu">
            <a href="{{route($item['alias'])}}">
                {{$item['title']}}
            </a>
        </div>
    @endforeach
    <div class="item-menu">
        <a href="/admin">
            Личный кабинет
        </a>
    </div>
</div>

