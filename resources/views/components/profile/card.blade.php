<div class="bg-white shadow rounded-lg mb-3">
    <header class="border-b border-gray-200">
       {{ $header }}
    </header>
    <section class="card mt-3">
        {{ $slot }}
    </section>
    <footer class="flex justify-end border-t border-gray-200 py-3 pr-5">
        {{ $footer }}
    </footer>
</div>