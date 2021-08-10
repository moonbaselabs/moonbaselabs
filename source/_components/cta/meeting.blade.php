@props(['team' => false])
<div class="bg-onyx-700">
  <div class="max-w-7xl mx-auto text-center py-24 px-4 sm:px-6 lg:py-48 lg:px-8">
    <h2 class="text-3xl font-display font-bold tracking-tight text-gray-900 sm:text-4xl">
      <span class="block">Learn how we can help.</span>
      <span class="block text-orange-500">It starts with one small step.</span>
    </h2>
    <div class="mt-8 flex justify-center">
      <div class="inline-flex rounded-md shadow">
        <x-button color="green" href="/contact" onclick="window.fathom.trackGoal(window.GOAL_ID, 0);">
          Schedule a Meeting
        </x-button>
      </div>
      @if ($team)
        <div class="ml-3 inline-flex">
          <x-button color="onyx" href="/about">
            Meet Our Team
          </x-button>
        </div>
      @endif
    </div>
  </div>
</div>
