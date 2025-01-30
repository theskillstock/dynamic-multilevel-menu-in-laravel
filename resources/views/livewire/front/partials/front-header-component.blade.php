<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <h1 class="sitename">Hash Hives</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                @foreach ($menus as $menu)
                    @if ($menu->parent_id === null)
                        <li class="{{ $menu->children->isNotEmpty() ? 'dropdown' : '' }}">
                            <a href="{{ $menu->url }}"
                                class="{{ request()->is(ltrim($menu->url, '/')) ? 'active' : '' }}"
                                @if ($menu->children->isNotEmpty()) data-bs-toggle="dropdown" @endif>
                                <span>{{ $menu->title }}</span>
                                @if ($menu->children->isNotEmpty())
                                    <i class="bi bi-chevron-down toggle-dropdown"></i>
                                @endif
                            </a>
                            @if ($menu->children->isNotEmpty())
                                <ul>
                                    @foreach ($menu->children as $child)
                                        <li class="{{ $child->children->isNotEmpty() ? 'dropdown' : '' }}">
                                            <a href="{{ $child->url }}"
                                                @if ($child->children->isNotEmpty()) data-bs-toggle="dropdown" @endif>
                                                <span>{{ $child->title }}</span>
                                                @if ($child->children->isNotEmpty())
                                                    <i class="bi bi-chevron-down toggle-dropdown"></i>
                                                @endif
                                            </a>
                                            @if ($child->children->isNotEmpty())
                                                <ul>
                                                    @foreach ($child->children as $grandchild)
                                                        <li><a
                                                                href="{{ $grandchild->url }}">{{ $grandchild->title }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endif
                @endforeach
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn" href="#about">Get Started</a>

    </div>
</header>
