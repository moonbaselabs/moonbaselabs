---
extends: _layouts.page
title: Nonprofits
description: We build software that nonprofits use to change the world.
---

@section('content')
<div class="py-6 sm:py-12 lg:py-24 px-4 sm:px-6 lg:py-16 lg:px-8">
  <div class="mx-auto max-w-7xl">
    <div class="grid gap-12 md:gap:24 md:grid-cols-2 lg:gap-40">
      <div class="lg:mt-0 md:order-2">
        <img aria-hidden class="max-w-sm mx-auto md:max-w-full" src="/assets/images/connections.svg" alt="Connections">
      </div>
      <div class="md:max-w-2xl md:flex md:items-center">
        <div>
          <a href="/blog/building-software-that-matters/" class="inline-flex items-center text-white bg-navy-600 rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-silver-700">
            <span class="inline-flex items-center px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-blue-500 rounded-full">
              We
              <!-- heart -->
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="inline-block mx-1 w-3 h-3" viewBox="0 0 24 24" fill="currentColor"><path d="M20.205,4.791c-1.137-1.131-2.631-1.754-4.209-1.754c-1.483,0-2.892,0.552-3.996,1.558 c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412L12,21.414 l8.207-8.207C22.561,10.854,22.562,7.158,20.205,4.791z"></path></svg>
              nonprofits
            </span>
            <span class="ml-4 text-sm">Read our blog</span>
            <!-- chevron-right -->
            <svg class="ml-2 w-5 h-5 text-silver-700" xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M10.707 17.707L16.414 12 10.707 6.293 9.293 7.707 13.586 12 9.293 16.293z"></path></svg>
          </a>
          <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
            We build software that nonprofits use to <span class="text-orange-500">change the world</span>
          </h1>
          <p class="mt-3 text-base text-silver-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
            We want to give nonprofits the tools that built Netflix and Amazon. We want good to scale. Empowered teachers, diverse entrepreneurs, stronger leaders: those missions are now our mission.
          </p>
          <x-button size="xl" color="onyx" class="mt-8" href="#software-analytics">
            Learn more
            <!-- down-arrow -->
            <svg class="ml-3 -mr-1 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.707 12.707L17.293 11.293 13 15.586 13 6 11 6 11 15.586 6.707 11.293 5.293 12.707 12 19.414z"></path></svg>
          </x-button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="software-analytics" class="py-6 sm:py-12 lg:py-24 px-4 sm:px-6 lg:py-16 lg:px-8">
  <div class="mx-auto max-w-7xl">
    <div class="grid gap-24 md:grid-cols-2">
      <div>
        <div>
          <!-- monitor -->
          <svg aria-hidden width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8348 34.3323C8.01791 34.3323 3.37434 38.9759 3.37434 44.7928V75.1619C3.37434 80.9788 8.01792 85.6223 13.8348 85.6223H82.1652C87.9821 85.6223 92.6257 80.9788 92.6257 75.1619V44.7928C92.6257 38.9759 87.9821 34.3323 82.1652 34.3323H13.8348ZM0 44.7928C0 37.1123 6.15432 30.958 13.8348 30.958H82.1652C89.8457 30.958 96 37.1123 96 44.7928V75.1619C96 82.8424 89.8457 88.9967 82.1652 88.9967H13.8348C6.15432 88.9967 0 82.8424 0 75.1619V44.7928Z" fill="#4B5A6B"/>
            <path d="M71.5357 75.1616C71.5357 78.1985 69.1737 80.5605 66.1368 80.5605H13.8345C10.7976 80.5605 8.43555 78.1985 8.43555 75.1616V44.7925C8.43555 41.7556 10.7976 39.3936 13.8345 39.3936H66.1368C69.1737 39.3936 71.5357 41.7556 71.5357 44.7925V75.1616Z" fill="#187BBC"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8274 53.2292L15.8423 48.3826L17.9004 46.2656L25.063 53.2292L17.9004 60.1928L15.8423 58.0758L20.8274 53.2292Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M35.9372 60.6098H26.3203V57.6572H35.9372V60.6098Z" fill="white"/>
            <path d="M83.3459 47.8294C85.6754 47.8294 87.5638 45.941 87.5638 43.6115C87.5638 41.282 85.6754 39.3936 83.3459 39.3936C81.0164 39.3936 79.1279 41.282 79.1279 43.6115C79.1279 45.941 81.0164 47.8294 83.3459 47.8294Z" fill="#658F61"/>
            <path d="M83.3459 64.1966C85.6754 64.1966 87.5638 62.3082 87.5638 59.9787C87.5638 57.6492 85.6754 55.7607 83.3459 55.7607C81.0164 55.7607 79.1279 57.6492 79.1279 59.9787C79.1279 62.3082 81.0164 64.1966 83.3459 64.1966Z" fill="#E5743C"/>
            <path d="M83.3459 80.5618C85.6754 80.5618 87.5638 78.6734 87.5638 76.3439C87.5638 74.0144 85.6754 72.126 83.3459 72.126C81.0164 72.126 79.1279 74.0144 79.1279 76.3439C79.1279 78.6734 81.0164 80.5618 83.3459 80.5618Z" fill="#A9995D"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M47.9198 30.4231L70.3429 8L72.729 10.386L49.1086 34.0064L46.7183 34.0021L23.2666 10.3817L25.6612 8.00428L47.9198 30.4231Z" fill="#4B5A6B"/>
          </svg>
        </div>
        <div class="mt-6">
          <h2 class="text-3xl font-extrabold tracking-tight text-white">
            Software<span class="sr-only">:</span>
            <span class="mt-4 block text-2xl">Empowering the doers</span>
          </h2>
          <p class="mt-4 text-lg text-silver-700">
            Software helps deliver impact at scale. Generating impact doesn’t have to be complicated. Streamline communication, centralize information, and eliminate friction in your processes.
          </p>
        </div>
      </div>
      <div>
        <div>
          <!-- analytics -->
          <svg width="96" height="91" viewBox="0 0 96 91" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.4433 0C9.56699 0 0 9.56699 0 21.4433C0 33.3195 9.56699 42.8865 21.4433 42.8865C33.3195 42.8865 42.8865 33.3195 42.8865 21.4433H21.4433V0Z" fill="#187BBC"/>
            <path d="M21.4429 0V21.4433H42.8861C43.0511 9.56699 33.3191 0 21.4429 0Z" fill="white"/>
            <path d="M65.9134 15.6709H56.0825V42.8873H65.9134V15.6709Z" fill="#E5743C"/>
            <path d="M80.8246 0H70.9277V43.0515H80.8246V0Z" fill="#E5743C"/>
            <path d="M95.6703 21.4434H85.7734V42.8866H95.6703V21.4434Z" fill="#E5743C"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38.4815 56.5557L58.0794 83.2352L77.3293 63.6698H95.9998V66.9687H78.7115L57.7141 88.3104L38.0544 61.5468L21.1186 77.8553H0.824707V74.5563H19.7885L38.4815 56.5557Z" fill="#4B5A6B"/>
            <path d="M20.2887 81.6496C23.1127 81.6496 25.4021 79.3603 25.4021 76.5362C25.4021 73.7122 23.1127 71.4229 20.2887 71.4229C17.4646 71.4229 15.1753 73.7122 15.1753 76.5362C15.1753 79.3603 17.4646 81.6496 20.2887 81.6496Z" fill="#A9995D"/>
            <path d="M37.7731 64.1643C40.5971 64.1643 42.8865 61.8749 42.8865 59.0509C42.8865 56.2268 40.5971 53.9375 37.7731 53.9375C34.949 53.9375 32.6597 56.2268 32.6597 59.0509C32.6597 61.8749 34.949 64.1643 37.7731 64.1643Z" fill="#A9995D"/>
            <path d="M57.0724 90.8869C59.8964 90.8869 62.1858 88.5976 62.1858 85.7735C62.1858 82.9495 59.8964 80.6602 57.0724 80.6602C54.2483 80.6602 51.959 82.9495 51.959 85.7735C51.959 88.5976 54.2483 90.8869 57.0724 90.8869Z" fill="#A9995D"/>
            <path d="M77.3605 70.927C80.1845 70.927 82.4739 68.6376 82.4739 65.8136C82.4739 62.9895 80.1845 60.7002 77.3605 60.7002C74.5364 60.7002 72.2471 62.9895 72.2471 65.8136C72.2471 68.6376 74.5364 70.927 77.3605 70.927Z" fill="#A9995D"/>
          </svg>
        </div>
        <div class="mt-6">
          <h2 class="text-3xl font-extrabold tracking-tight text-white">
            Data Analytics<span class="sr-only">:</span>
            <span class="mt-4 block text-2xl">Work that matters deserves to be measured</span>
          </h2>
          <p class="mt-4 text-lg text-silver-700">
            But how do you know your work is working? Abandon the spreadsheets. Create context, understand your stakeholders, and visualize your impact.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<x-cta.case-studies label="Nonprofits" :case-studies="$case_studies->filter(fn ($caseStudy) => in_array('nonprofit', $caseStudy->tags, true))" />
<x-cta.meeting team />
@overwrite
