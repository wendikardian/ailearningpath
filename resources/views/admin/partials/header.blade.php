<div class="navbar bg-base-100">

    <div class="flex-1 text-xl font-semibold">
    <p class="text-orange-400">{{ $title }}</p>
    </div>
    <div class="flex-none p-2 bg-white rounded-2xl drop-shadow-lg">
        <label tabindex="0" class="flex justify-items-start btn btn-ghost normal-case text-left w-56 p-0 font-light">
            <div class="flex-none mr-2"><img class="items-start object-cover h-10 w-10 rounded-lg" src="/res/img/user-default.png" alt=""></div>
            <div class="grow text-gray-600">
              <p class="font-semibold mb-1">Admin</p>
            </div>
        </label>
        <form action="/keluar" method="POST">
          @csrf
          <button type="submit" class="btn btn-ghost btn-circle">
            <div class="indicator text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
              </svg>
          </div></button>
        </form>
    </div>
</div>