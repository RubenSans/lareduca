<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex gap-2 items-center p-3 bg-blue85 rounded-md font-semibold text-white tracking-widest hover:bg-blue85/70 transition-all duration-200']) }}>
    <img src="{{asset('assets/img/IconAdd.svg')}}" alt="">
    <p class="text-sm">{{ $slot }}</p>
</button>
