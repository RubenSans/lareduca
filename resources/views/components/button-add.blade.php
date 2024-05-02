<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex gap-2 items-center px-4 py-4 bg-blue85 rounded-md font-semibold text-white tracking-widest hover:bg-blue85/70  transition-all duration-200']) }}>
    <img src="{{asset('assets/img/IconAdd.svg')}}" alt="">
    <p class="pt-[1px]">{{ $slot }}</p>
</button>
