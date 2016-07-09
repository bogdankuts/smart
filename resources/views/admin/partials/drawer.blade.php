@section('drawer')
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Привет, {{Auth::user()->name}}</span>
        <nav class="mdl-navigation">

            <a class="mdl-navigation__link @if ( $env == 'dashboard') active_nav @endif" href="/admin">Панель управления</a>
            <div class="mdl-navigation__devider"></div>

            <a class="mdl-navigation__link @if ( $env == 'articles') active_nav @endif" href="/admin/articles">Новости</a>
            <a class="mdl-navigation__link @if ( $env == 'change_article') active_nav @endif" href="/admin/change_article">Добавить новость</a>
            <div class="mdl-navigation__devider"></div>

            <a class="mdl-navigation__link @if ( $env == 'admins') active_nav @endif" href="/admin/list_admins">Администраторы</a>
            <a class="mdl-navigation__link @if ( $env == 'new_admin' || $env == 'change_admin') active_nav @endif" href="/admin/change_admin">Добавить администратора</a>
			<div class="mdl-navigation__devider"></div>

			<a class="mdl-navigation__link" href="/admin/about"><i class="material-icons">help_outline</i></a>
		</nav>
    </div>
@stop