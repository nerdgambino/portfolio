
<ul class="tabs">
<?php $current = (!is_null(request()->get('tab')) && array_key_exists(request()->get('tab'), $tabs)) ? request()->get('tab') : null ?>
<?php $i = 0; ?>
@foreach($tabs as $tab => $title)

  <li class="tab"><a href="#" data-tab="{{ $tab }}" class="link {{ ($current == $tab || (is_null($current) && $i === 0)) ? 'active' : '' }}">{{ $title }}</a></li>
<?php $i++; ?>
@endforeach

</ul>