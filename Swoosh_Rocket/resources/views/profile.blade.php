<x-layout>
    <x-navbar />

    <div class="container d-flex mt-5 ms-5">
        <div class="d-inline">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </div>
        <div class="d-inline my-0">
            <p class="ms-3 mb-0  fw-bold fs-3 ">{{ Auth::user()->name }}</p>
            <p class="ms-3 mt-0 fw-bold text-secondary fst-italic">Membro dal: {{ (Auth::user()->created_at->isoFormat('D MMMM YYYY', 'LL')) }}</p>
        </div>
    </div>
</x-layout>