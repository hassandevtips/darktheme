<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="themeDropdown" data-bs-toggle="dropdown"
        aria-expanded="false">
        {{ trans('Toggle Theme') }}
    </button>
    <ul class="dropdown-menu" aria-labelledby="themeDropdown">
        <li>
            <a class="dropdown-item" href="javascript:void()" onclick="toggleTheme('light')">{{ trans('Light Mode') }}</a>
        </li>
        <li>
            <a class="dropdown-item" href="javascript:void()" onclick="toggleTheme('dark')">{{ trans('Dark Mode') }}</a>
        </li>
    </ul>
</div>

<!-- Assets -->
<link rel="stylesheet" href="{{ asset('vendor/dark-theme/css/customDark.css') }}">
<script src="{{ asset('vendor/dark-theme/js/theme-toggle.js') }}"></script>
