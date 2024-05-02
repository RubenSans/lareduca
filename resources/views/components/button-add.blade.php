<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex gap-2 items-center px-4 py-4 bg-blue85 border border-transparent rounded-md font-semibold text-white tracking-widest hover:bg-blue85/70 focus:bg-blue85/100 active:bg-blue85/100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    <img src="{{asset('assets/img/IconAdd.svg')}}" alt="">
    <p class="pt-[1px]">{{ $slot }}</p>
</button>
