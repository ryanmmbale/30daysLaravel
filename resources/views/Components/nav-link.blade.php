@props(['active' => false])

<a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-900 hover:bg-gray-500
                hover:text-white'}} text-sm/6 font-semibold rounded-md px-3 py-2"
   aria-current="{{ $active ? 'page': 'false'}}" {{$attributes}}>{{$slot}}</a>
