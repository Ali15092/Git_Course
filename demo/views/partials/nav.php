  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <!-- Fixed Working Logo URL -->
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <!-- Navigation Links -->
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current Page: bg-gray-900 text-white, Default: text-gray-300 hover:bg-gray-700 hover:text-white -->
              <a href="/" class="<?=urlis('/')? 'bg-gray-900 text-white':'text-gray-300'?>
               hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
              <a href="/about" class="<?=urlis('about')? 'bg-gray-900 text-white':'text-gray-300'?> 
              hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
              <a href="/contact" class="<?=urlis('contact')? 'bg-gray-900 text-white':'text-gray-300'?>
              hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a>
              <a href="/notes" class="<?=urlis('notes')? 'bg-gray-900 text-white':'text-gray-300'?>
              hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Notes</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>