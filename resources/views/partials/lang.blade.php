<div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdownLanguageLink">
    @foreach(array_keys(config('locale.languages')) as $lang)
        @if($lang != app()->getLocale())
            <small><a href="{{ route('lang', $lang) }}" class="dropdown-item">@lang('menus.language-picker.langs.'.$lang)</a></small>
        @endif
    @endforeach
</div>
