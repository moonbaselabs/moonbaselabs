---
extends: _layouts.page
title: About
description: Meet the crew.
---

@section('content')
<x-page-heading title="Meet the Crew" description="We are explorers, tinkerers, painters, and poets. We have the Design, Analytics, and Engineering skills to build your vision." />
<div class="relative overflow-hidden">
  <div class="hidden absolute inset-y-0 h-full w-full 2xl:block">
    <div class="relative h-full text-lg max-w-prose mx-auto">
      <x-star-dust class="absolute bottom-1/2 right-full transform -translate-x-32" />
      <x-star-dust class="absolute bottom-4 left-full transform" />
    </div>
  </div>
  <div class="bg-onyx-600 py-6 sm:py-12 lg:py-24 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="relative max-w-lg mx-auto lg:max-w-7xl">
      <ul class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-3 lg:gap-8">
        <li class="py-10 px-6 bg-onyx-500 text-center rounded-lg xl:px-10 xl:text-left">
          <div class="space-y-6 xl:space-y-10">
            <img loading="lazy" class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="/assets/images/nic-wentling.jpg" alt="">
            <div class="space-y-2 xl:flex xl:items-center xl:justify-between">
              <div class="font-medium text-lg space-y-1">
                <h4 class="text-white">Nic Wentling<span class="text-gray-500">, Principal Owner</span></h4>
                <p class="text-gold-300">Strategy & Partnerships</p>
              </div>

              <ul class="flex justify-center space-x-5">
                <li>
                  <a href="https://www.linkedin.com/in/nic-wentling/" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Nic's LinkedIn</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/nwentling5" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Nic's Twitter</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <p class="mt-5 xl:mt-8">Software engineer with a passion for solving technical problems. Formerly a Material and Process Engineer at Textron Aviation.</p>
        </li>

        <li class="py-10 px-6 bg-onyx-500 text-center rounded-lg xl:px-10 xl:text-left">
          <div class="space-y-6 xl:space-y-10">
            <img loading="lazy" class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="/assets/images/ted-kriwiel.jpg" alt="">
            <div class="space-y-2 xl:flex xl:items-center xl:justify-between">
              <div class="font-medium text-lg space-y-1">
                <h4 class="text-white">Ted Kriwiel<span class="text-gray-500">, Partner</span></h4>
                <p class="text-gold-300">Business Development & Data Analytics</p>
              </div>

              <ul class="flex justify-center space-x-5">
                <li>
                  <a href="https://www.linkedin.com/in/ted-kriwiel/" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Ted's LinkedIn</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/tedkriwiel" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Ted's Twitter</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <p class="mt-5 xl:mt-8">Data analyst who enjoys telling stories with numbers. Founder of <a class="underline" href="https://www.8oaks.org/">Eight Oaks</a>.</p>
        </li>

        <li class="py-10 px-6 bg-onyx-500 text-center rounded-lg xl:px-10 xl:text-left">
          <div class="space-y-6 xl:space-y-10">
            <img loading="lazy" class="mx-auto h-40 w-40 rounded-full xl:w-56 xl:h-56" src="/assets/images/christian-taylor.jpg" alt="">
            <div class="space-y-2 xl:flex xl:items-center xl:justify-between">
              <div class="font-medium text-lg space-y-1">
                <h4 class="text-white">Christian Taylor<span class="text-gray-500">, Partner</span></h4>
                <p class="text-gold-300">Web Development</p>
              </div>
              <ul class="flex justify-center space-x-5">
                <li>
                  <a href="https://imacrayon.com" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Christian's Website</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                      <path d="M16.555 5.412a8.028 8.028 0 00-3.503-2.81 14.899 14.899 0 011.663 4.472 8.547 8.547 0 001.84-1.662zM13.326 7.825a13.43 13.43 0 00-2.413-5.773 8.087 8.087 0 00-1.826 0 13.43 13.43 0 00-2.413 5.773A8.473 8.473 0 0010 8.5c1.18 0 2.304-.24 3.326-.675zM6.514 9.376A9.98 9.98 0 0010 10c1.226 0 2.4-.22 3.486-.624a13.54 13.54 0 01-.351 3.759A13.54 13.54 0 0110 13.5c-1.079 0-2.128-.127-3.134-.366a13.538 13.538 0 01-.352-3.758zM5.285 7.074a14.9 14.9 0 011.663-4.471 8.028 8.028 0 00-3.503 2.81c.529.638 1.149 1.199 1.84 1.66zM17.334 6.798a7.973 7.973 0 01.614 4.115 13.47 13.47 0 01-3.178 1.72 15.093 15.093 0 00.174-3.939 10.043 10.043 0 002.39-1.896zM2.666 6.798a10.042 10.042 0 002.39 1.896 15.196 15.196 0 00.174 3.94 13.472 13.472 0 01-3.178-1.72 7.973 7.973 0 01.615-4.115zM10 15c.898 0 1.778-.079 2.633-.23a13.473 13.473 0 01-1.72 3.178 8.099 8.099 0 01-1.826 0 13.47 13.47 0 01-1.72-3.178c.855.151 1.735.23 2.633.23zM14.357 14.357a14.912 14.912 0 01-1.305 3.04 8.027 8.027 0 004.345-4.345c-.953.542-1.971.981-3.04 1.305zM6.948 17.397a8.027 8.027 0 01-4.345-4.345c.953.542 1.971.981 3.04 1.305a14.912 14.912 0 001.305 3.04z" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/ima_crayon" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Christian's Twitter</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <p>Visual artist and web developer. Passionate contributor to the tech and art communities of Wichita.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<x-cta.meeting />
@endsection
