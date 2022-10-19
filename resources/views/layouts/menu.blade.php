@unless(Auth::user()->is_admin || Auth::user()->is_staff || Auth::user()->is_commi)
    <li class="nav-item">
        <a href="{{ route('entryInfos.index') }}" class="nav-link {{ Request::is('entryInfos*') ? 'active' : '' }}">
            <p>申込情報</p>
        </a>
    </li>
@endunless


@if (Auth::user()->is_admin)
    <h3 class="uk-text-warning">管理者メニュー</h3>
    <li class="nav-item">
        <a href="{{ route('admin_entryInfos.index') }}"
            class="nav-link {{ Request::is('admin_entryInfos*') ? 'active' : '' }}">
            <p>申込一覧</p>
        </a>
    </li>
@endif


@if (Auth::user()->is_commi)
    <h3 class="uk-text-warning">地区コミ</h3>
    <li class="nav-item">
        <a href="{{ route('commi_entryInfos.index') }}"
            class="nav-link {{ Request::is('commi_entryInfos*') ? 'active' : '' }}">
            <p>申込一覧</p>
        </a>
    </li>
@endif
