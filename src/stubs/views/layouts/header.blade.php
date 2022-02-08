<section>
  @component('layouts.navbar.horizontal', [
    'layout' => 'fixed',
    'classes' => 'border-bottom',
    'background' => 'white',
    'position' => 'end'
    ])

    @include('layouts.navbar.items.logout', [
      'icon' => 'sign-out-alt',
      'height' => 4,
      'gap' => 3,
      ])
  @endcomponent

  @component('layouts.navbar.vertical')

    @include('layouts.navbar.items.simple', [
      'label' => 'Colors',
      'url' => route('colors'),
      'height' => 3,
      'gap' => 3,
      'hover' => 'background',
      ])

    @include('layouts.navbar.items.simple', [
      'label' => 'Fonts',
      'url' => route('fonts'),
      'height' => 3,
      'gap' => 3,
      'hover' => 'background',
      ])

    @include('layouts.navbar.items.divider')

    @include('layouts.navbar.items.simple', [
      'label' => 'Borders',
      'url' => route('borders'),
      'height' => 3,
      'gap' => 3,
      'hover' => 'background',
      ])

    @include('layouts.navbar.items.simple', [
      'label' => 'Shadows',
      'url' => route('shadows'),
      'height' => 3,
      'gap' => 3,
      'hover' => 'background',
      ])

    @include('layouts.navbar.items.divider')

    @component('layouts.navbar.items.dropdown', [
      'label' => 'Display',
      'height' => 3,
      'gap' => 3,
      'hover' => 'background',
      'slide' => true
      ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Flex',
        'url' => route('display.flex'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Hover',
        'url' => route('display.hover'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Positions',
        'url' => route('display.positions'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Spacing',
        'url' => route('display.spacing'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])
    @endcomponent

    @component('layouts.navbar.items.dropdown', [
      'label' => 'Elements',
      'height' => 3,
      'gap' => 3,
      'hover' => 'background',
      'slide' => true
      ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Alerts',
        'url' => route('elements.alerts'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Auth',
        'url' => route('elements.auth'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Breadcrumbs',
        'url' => route('elements.breadcrumbs'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Buttons',
        'url' => route('elements.buttons'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Hamburgers',
        'url' => route('elements.hamburgers'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Navbars',
        'url' => route('elements.navbars'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Switches',
        'url' => route('elements.switches'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])

      @include('layouts.navbar.items.simple', [
        'label' => 'Forms',
        'url' => route('elements.forms'),
        'height' => 2,
        'gap' => 4,
        'hover' => 'background',
        ])
    @endcomponent

    @include('layouts.navbar.items.divider')

    @include('layouts.navbar.items.simple', [
      'label' => 'Drag & Drop',
      'url' => route('uploads.index'),
      'height' => 2,
      'hover' => 'background',
      'gap' => 3,
      ])
  @endcomponent
</section>