<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="{{ route('logout') }}"  {{ $attributes->merge(['class' => 'bg-primary-700 py-3 px-6 text-white font-bold uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }} :href="route('logout')"
            onclick="event.preventDefault(); this.closest('form').submit();">
        {{ __('Logout') }}
    </a>
</form>